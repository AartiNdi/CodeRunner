<?php

$contents.="
<center><big><h1><u>Metro Map (METMAP)
</u></h1></big></center>
<div style='text-align:justify; width:520px'>
With the great success of Delhi Metro, there has been a rise in demands from other metropolitan cities also, to have a Metro Rail in their city as well. So, we at COGNIZANCE thought to provide an automated solution.<br />
Your task is to design an optimal metro rail route through a city, given its map. However, as always, the economics will be our priority. The map of the city is represented as a matrix.<br />
<br />
<img src = 'images/problem_METROMAP1.jpg' />
<img src = 'images/problem_METROMAP2.jpg' />
<br /><br />
The following rules need to be noted:<br />
1) The matrix will have X rows and Y columns.<br />
2) The number in each cell of the matrix denotes the number of colonies that will be benefited if a metro station were to be placed in that cell of the matrix.<br />
3) The source station is always located at M (1, 1) and the destination station is always to be located at M(X, Y).<br />
4) You can establish intermediate stations at different cells in the matrix. However, only one station can be built at any cell of the matrix.<br />
5) If you choose to establish an intermediate station at M(i,j) then you cannot make the next stations at following points:<br />
* M(i+1,j)<br />
* M(i,j+1)<br />
* M(p,q) where p < i  or q < j   (i.e. you cannot make next stations at any backward cells).<br />
Other than the above restrictions, you can make next stations at any other points.<br />
6) Distance between any two stations M(i1,j1) and M(i2,j2) is defined as:<br />
<b>D = sqrt( (i1-i2)^2 + (j1-j2)^2 )  units </b> ( i.e. the Euclidean distance between matrix positions)<br />
7) Two stations will always be connected by rail tracks of length given by the formula in rule 6.<br />
8) The various cost are as follows:<br />
* Cost of a building a station = S <br />
* Cost of laying a unit distance rail track = R.<br /><br />
Your objective is to minimize the following cost of the project given by:<br />
<br />
<b>Cost of the project = (S * (Number of stations) + R * (Length of the entire rail track))/w</b><br />
Where, w = Total Number of all Colonies that will benefited if metro stations where established in their respective cells.<br />
<b>And give the route of the Metro Rail from the source to destination for this optimal path.<br /></b>
<br />
<pre><b>
Input Format:
X,Y	    /* Number of rows and Number of Columns in matrix; X<=50 Y<=50 */
min_w	    /* Minimum number of colonies that must be covered */
a11 a12 a13 ....... a1Y	/* the map of the city as matrix;   0 <= aij <= 1000 */
...
...
...
aX1 aX2 aX3 ....... aXY
S R     /* Cost of building a station & cost 
	of laying unit distance rail track; S<=100000 & R<=100000 */
		
Output Format:
N	/* Total number of all stations including source and destination.*/
w	/* Total number of colonies covered by all of the N stations */
(i1,j1) /* Route map of M(i,j) positions of N stations in order from source 
	to destination */
(i2,j2)						
....	
(iN,jN)		
C	/* Optimal Cost of the project; Rounded off to five decimal places. */


Sample Input:
4,4
15
5 3 7 4
2 8 9 2
9 4 7 5
8 6 2 2
10 3

Sample Output:
5
23
(1,1)
(3,1)
(3,3)
(4, 4)
1.97453
(I think this is the optimal!, try to find if any other)
</b></pre>
</div>
";
?>