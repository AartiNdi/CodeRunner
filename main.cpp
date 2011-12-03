/**************************************************************************
CodeRunner - the online judge
Author: Shashank Kumar <shashankkumar.me@gmail.com>
Copyright (c): 2011 All rights reserved
Version: 1.5

 * This is a free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
  
You may contact the author of CodeRunner by e-mail at:
shashankkumar.me@gmail.com

****************************************************************************/
#include "includeh.h"
#include "FileInfo.h"
#include "ContentParser.h"
#include "FileHandle.h"

int main(int argc, char* argv[])
{
	
	if(chdir(PATH)==-1)
	{
		printf("%d\n", errno);
		printf("IE ERROR Cannot change directory to the one specified in config.h");
		return 1;
	}
	
	int opt;
	int SleepInterval = SLEEPINTERVAL;
	bool RunOnce = false, DownloadSourceFile = true;
	FileInfoFetchOptionsStruct* FileInfoFetchOptions = new FileInfoFetchOptionsStruct();
	bool UsageError = false;

	FileInfoFetchOptions->Init();

	while((opt = getopt(argc, argv, "ancdbfr:p:l:s:")) != -1){
		switch(opt){
			case 'f':
				FileInfoFetchOptions->f = true;
				FileInfoFetchOptions->FileInfo.FileId = atoi(optarg);
			break;
			case 'p':
				FileInfoFetchOptions->p = true;
				strcpy(FileInfoFetchOptions->FileInfo.ProblemId, optarg);
			break;
			case 'l':
				FileInfoFetchOptions->l = true;
				strcpy(FileInfoFetchOptions->FileInfo.lang, optarg);
			break;
			case 'b':
				CurlWrapper::ForcePushResult = true;
			break;
			case 'c':
				FileHandle::Clean = true;
			break;
			case 'n':
				FileHandle::SendResultsVar = false;
			break;
			case 's':
				SleepInterval = atoi(optarg);
			break;
			case 'r':
				RunOnce = true;
			break;
			case 'd':
				FileHandle::DownloadSourceFile = false;
			break;
			case 'i':
				ContentParser::OneFileExecution = true;
			break;
			case 't':
				FileInfoFetchOptions->tl = true;
				FileInfoFetchOptions->FileInfo.TimeLimit = atoi(optarg);
			break;
			case 'm':
				FileInfoFetchOptions->ml = true;
				FileInfoFetchOptions->FileInfo.MemoryLimit = atoi(optarg);
			case 'v':
			break;
			case 'a':
				CurlWrapper::ForceGetFileIds = true;
			break;
			default: /* '?' */
				UsageError = true;
		}
	}
	
	if(FileInfoFetchOptions->f){
		if(ContentParser::OneFileExecution && (!FileInfoFetchOptions->ml || !FileInfoFetchOptions->tl || !FileInfoFetchOptions->p || !FileInfoFetchOptions->l)) UsageError = true;
		else if(!ContentParser::OneFileExecution && (FileInfoFetchOptions->p || FileInfoFetchOptions->l)) UsageError = true;
	}
	if(UsageError){
		fprintf(stderr, "Usage: %s [-f fileid [-i -p problemcode -t timelimit -m memorylimit -l lang] | [-p problemcode] [-l language] ] [-s sleepinterval] [-b] [-n] [-c] [-r] [-d] [-v]\n", argv[0]); 
		exit(EXIT_FAILURE);
	}
	
	Logs::OpenLogFile();
	Logs::CodeRunnerStarted();
	Logs::CloseLogFile();
	
	if(ContentParser::OneFileExecution){
		FileInfoStruct* FileInfo = &(FileInfoFetchOptions->FileInfo);
		FileHandle F(FileInfo);
		F.Action();
		return 0;
	}
	
	do{
		Logs::OpenLogFile();
		bool CurrentIteration = true;
		ContentParser *ContentVar = new ContentParser();
		//if(ContentParser->OneFileExecution) OneFileInfoPrepare();
		if(ContentVar->FetchFileInfoList(FileInfoFetchOptions)==-1){
			CurrentIteration = false;
		}
		
		if(CurrentIteration && ContentVar->EndOfContent()){
			Logs::WriteLine("File Queue Empty. Nothing to evaluate.");
			CurrentIteration = false;
		}
		
		while(CurrentIteration && !ContentVar->EndOfContent()){
			FileInfoStruct* FileInfo = ContentVar->GetNextFileInfo();
			FileHandle F(FileInfo);
			F.Action();
			//delete FileInfo;
		}
		
		if(CurrentIteration) Logs::WriteLine("Current batch of files evaluated.");
		
		delete ContentVar;
		Logs::GoToSleep();
		Logs::CloseLogFile();
		sleep(SleepInterval);
		
	}while(!RunOnce);
		
    return 0;
}
