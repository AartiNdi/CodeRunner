<?php
defined('_Insomnia') or die('Restricted access');


$contents.='
<big>Please <u><b>do not use File Handling </b></u>for I/O from now on.</big><br />
<big>Java submissions should have <u>main</u> as their class name</br>

<h1>Problems</h1>
<a href="index.php?option=ques&problem=BASICS"><h1>Problem 1: Let\'s begin with the basics (BASICS) - (5 points)</h1></a>
<a href="index.php?option=ques&problem=PPROB"><h1>Problem 2: Prime Problem (PPROB) - (10 points)</h1></a>
<a href="index.php?option=ques&problem=ENDOW"><h1>Problem 3:  2012, End of The World (ENDOW) - (10 points)</h1></a>
<a href="index.php?option=ques&problem=CROSSOUT"><h1>Problem 4: Cross Out (CROSSOUT) - (15 points)</h1></a>
<a href="index.php?option=ques&problem=ULGAME"><h1>Problem 5: Ultimate Game (ULGAME) - (15 points)</h1></a>
<a href="index.php?option=ques&problem=METROMAP"><h1>Problem 6: Metro Map (METROMAP) - (15 points)</h1></a>
<a href="index.php?option=ques&problem=ALEX"><h1>Problem 7: Alexander (ALEX) - (30 points)</h1></a>
<a href="index.php?option=ques&problem=ARCHI"><h1>Problem 8: Architecture (ARCHI) - (30 points)</h1></a>


<br />
<ol>
<li>Time limit for all the problems will be displayed in the problem</b><br /></li>
<li>Source Code size limit is 25kb.<br /></li>
<li>Memory limit for all problems is 64 MB<br /></li>
<li>Points are written in front of the problems.<br /></li>
</ol>
<div >
<a href="index.php?option=scoreboard" ><h3 style="text-decoration:underline;font-size:20px;color:white">View Current Event Statistics</h3></a>
</div>
';
require_once('updates.php');
$contents.='
<h3 style="text-decoration:underline;font-size:20px;color:white">UPDATES</h3>'.$updates;
?>