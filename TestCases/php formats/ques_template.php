<?php
defined('_Insomnia') or die('Restricted access');
$problem='';
if(isset($_GET['problem']))
{
	$problem=mysql_real_escape_string($_GET['problem']);
	$sql='select * from insomnia_problems where problem = "'.$problem.'"';
	$result=mysql_query($sql);$result=mysql_fetch_array($result);
	if(!($result))
	{
		die('Sorry! , you do not have enough score to view this problem.');
	}
	else
	{
		require_once('problems/problem_'.$result['name'].'.php');
		$contents.='Time Limit:	'.$result['timelimit']. " second(s)<br />";
		$contents.='Problem Code:	'.$result['problem'].'<br />';
		$contents.='Points:	'.$result['points'].'<br />';
		$contents .= '<a href="index.php?option=submit&problem='.$problem.'" class="read_more">Submit</a>'; 
		$contents.='<br />
		<p class="text_box"></p>';
    	$sql='select * from insomnia_problem_comments where pid="'.$problem.'" order by id desc';
		$result=mysql_query($sql);
		if(mysql_num_rows($result)!=0)$contents.='<h1>Admin Comments</h1>';
		while($resultx=mysql_fetch_array($result)){
			$contents.='
			Posted by admin at <b>'.$resultx['time'].'(IST)</b><br />
			'.$resultx['comment'].'<br /><br />';
		}
	}
}
else
{
	$flag=true;
}
?>