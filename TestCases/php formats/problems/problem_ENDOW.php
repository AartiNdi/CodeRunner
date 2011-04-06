<?php

$contents.='
<center><big><h1><u>2012 End of The World (ENDOW)
</u></h1></big></center>
<div style="text-align:justify; width:520px">
Getting the maps from Charlie, Jackson set to China along with his family. He is on way to the arks stationed in Tibet, in a van with a Buddhist monk. <br />
They have to reach the destination by choosing among the various paths they have. Also, because the van can run with its fuel only for a fixed amount of time, they must choose their paths wisely to move along those edges which lead to some filling stations (that are present at nodes) if required. <br />
But an earthquake starts in India and is set to destroy their mission to reach the arks. <br />
Given the initial position of the van and assuming the earthquake starts at origin which spreads evenly in a circular fashion with a fixed increase in radius of destroyed area with time, your task is to find if they can reach the arks, if yes also the minimum time in which they can do it. Note also that the time taken at different filling stations is different and once filled, the van can travel a fixed constant amount of time. Note that it is not possible to fill partly that is they can either choose to fill completely or not fill at all when passing through the filling stations.<br />
Assume initially the van is filled completely with fuel and do not bother to check whether the van is getting affected midway by a earthquake in a path from one node to another. Note they must reach the nodes before the earthquake does or else their mission is a failure.<br />
<br />
<pre><b>
Input Format
Number of test cases n ( <= 1000) is the first line of input
Then for each test case 
First line contains the x and y coordinates 
of van (not origin) at time t=0  separated by a space

Second line has the x and y coordinates of destination separated by a space

Third line contains the time in minutes which the van can run once filled with fuel

Fourth line contains a floating point number having three precision digits 
which indicates the rate of increase in 
radius of area affected by earthquake in m per seconds

Fifth line contains a single integer e which indicates total number of edges.

Next e lines contain x1 y1 x2 y2 t 
( all the five are integers with edge between 
x1,y1 and x2, y2 having the weight t in minutes )

Next line has integer f indicating 
number of filling stations followed by f lines each having x y t 
(coordinates of filling points followed by time taken 
in minutes to fill at this point )

* Consecutive test cases are separated by a blank line.
* Note that all the coordinates and times are non negative integers 
given in kilometres and minutes, their absolute value is less than 1001.

Output Format
For each test case output “yes” if it is possible 
to reach the arks followed by another line indicating the minimum time 
in which they can reach else output a single line indicating “no”

Sample Input
1
1 1
100 100
30
10.000
6
1 1 2 2 2
2 2 3 3 3
3 3 20 20 10
3 3 60 60 10
20 20 100 100 20
60 60 100 100 12
3
3 3 5
60 60 5
20 20 5

Sample output:
yes
27
</b></pre>
</div>
';
?>