#include <iostream>
#include <cstdio>
#include <cstdlib>
#include <cstring>
#include <fstream>
using namespace std;

int main()
{
	int test;
	scanf("%d", &test);
	ofstream inputOut("input1.txt");
	ofstream outputOut("output1.txt");
	
	inputOut << test << endl;
	while(test--)
	{
		char num1[101], num2[101];
		scanf("%s", num1);
		scanf("%s", num2);
		inputOut << num1 << " " << num2 << endl;
		int len1 = strlen(num1), len2 = strlen(num2);
		
		int res[202];
		int num1C[len1+1];
		
		for (int i = 1; i <= len1; i++)
		{
			num1C[i] = num1 [ len1 - i] - 48;
		}
		for (int i = 0; i < 202; i++) res[i] = 0;
		
		
		// calculating numbers
		for (int i = 0; i < len2; i++)
		{
			int currNum = num2[len2-1-i] - 48;
			int count = 0;
			for(int j = 1; j <= len1; j++)
			{
				res[i+j] += (currNum*num1C[j] + count)%10;
				count = (currNum*num1C[j] + count)/10;
			}
			
			res[len1+i+1] += count;
		}
		
		// calculate end result
		int noCarry = 0;
		int carry = 0;
		for (int i = 1; i < len1+len2+1; i++)
		{
			carry = (carry + res[i])/10;
			if( carry != 0)
			{
				cout << "carry in position :"<< i<<endl;
				 noCarry++;
			}
		}
		printf("%d\n", noCarry);
		outputOut << noCarry << endl;
	}
	inputOut.close();
	outputOut.close();
}
