<?php

$contents.='
<center><big><h1><u>(ARCHI)
</u></h1></big></center>
<div style="text-align:justify; width:520px">
An architecture student from IIT Roorkee is faced with great problem.<br />
Hari is designing a new hall. He has finalized the coordinates of some statues with base of dimension (1*1)to be placed in the hall. Now he decides to use tiles of 2*1 dimension for building the floor.<br />
The tiles must not overlap with one another and should not intrude into places given for the statues.  Also the sides of tiles must be placed parallel to sides of the room. He is not sure whether he can do the floor building work without cutting any tile in half!!! Since the tiles are costly he wants to be sure that for the given coordinates of statues, whether it is possible or not to completely develop the floor using just 2*1 dimension tiles.<br />
The coordinates were marked in the room taking one of the corners as origin.<br />
<br />
<pre>
Input Format:
Number of test cases n ( <= 100 )is first line of input
Then for each test case the first line contains
dimension of hall (2 <= m, n <= 100)
number of statues t ( <= 100)
The next t lines contain the coordinate 
of each statue (x and y separated by space)
This is followed by the rest n-1 test cases separated by blank line

Output Output:
For each case output a single line having the word "possible"
if it is possible to have such a configuration and "impossible"
if it is not possible.

Example

Sample input:  
2
4 4
2
0 0
3 0

4 4
2
0 0
2 0

Sample output:
possible
impossible
</pre>
<br />
<img src="images/problem_ARCHI1.jpg" />
<img src="images/problem_ARCHI2.jpg" />
</div>
';
?>