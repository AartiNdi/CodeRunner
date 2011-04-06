<?php

$contents.='
<center><big><h1><u>Ultimate Game (ULGAME)
</u></h1></big></center>
<div style="text-align:justify; width:520px">
Shashank mostly does coding in his room and if at all he gets bored, plays some flash games. One day while Shashank was playing a game, Saket entered his room. To make things more interesting, he set an objective for Shashank.
<br /><br />
The game is as follows:<br />
It is played in a rectangular area which is divided into various 1*1 grids (marked using coordinates from (1,1) to (X, Y) where X and Y are the lengths of its sides) and some of these grids are blocked. You are given dimensions of a cuboid block (l*h*h where l is length, h is breadth and h is the height) and it is said to be standing right now if it is currently resting on the base with minimum area ( the h*h face).<br />
<br />
A move is defined as the one which occurs when the cuboid can topple on to any one of its lateral faces, so anyone of its lateral sides will be the new base after the move is complete.  Also the rotation takes place on the edge common to both lateral face which will become the new base and the current base. Thus this edge remains in the same position even after rotation. Observe that there are three possible orientations of the block (obviously if all l, b and h are different) and in each orientation it can choose from one of the 4 possible moves up, down, left and right.<br />
<br />
<b>
An example for 2*1*1 block is given below<br />
Orientations:<br /><br /></b>
<img src="images/problem_ULGAME1.jpg" /><br /><br />
<b>Also, consider all possible moves  when the block is in standing position:<br /><br /></b>
<img src="images/problem_ULGAME2.jpg" /><br /<br /><br />
The objective of the game is to make the cuboid block stand at a provided coordinate position using legal moves, but Saket asked Shashank to do so in minimum number of moves. The initial grid of standing is given and sides of its base are parallel to the sides of the rectangular play area given to you.
Help Shashank!
<br /><br />


<pre><b>
Input Format
Line 1:  T 	/* T is the number of test cases T<=100 */ 
Line 2:  X Y	/* X Y are dimensions of rectangular board area for test case 1 */
Line 3:  L H H	/* L,H are integers and < 4. L,H is a non-increasing sequence*/
Line 4:  P Q	/* (P,Q) indicate start position of the game. P,Q are integers */
Line 5:  G	/* G is an integer indicating the number of blocked grids */
Line 6:  M1 N1  /* (M1,N1) indicate blocked position of grid 1 */   		
Line 7:  M2 N2  /* (M2,N2) indicate blocked position of grid 2 */   		
…..
…..
Line 5+G: Mg Ng   /* (Mg,Ng) indicate blocked position of grid M */
Line 5+G+1:           /* blank space */
Line 5+G+2: X Y     /* beginning of test case 2 */   		
……
……
(/*Note that individual test cases are separated by blank spaces*/) 
(/*Note the starting position will that of the grid occupied by the top-left corner of the specified base of the block */)


Output Format
Line 1: MV1    /* minimum number of moves in which game can be completed for test case 1*/ 
Line 2: MV2    /* minimum number of moves in which game can be completed for test case 2*/
……
……
Line N: MVn   /* minimum number of moves in which game can be completed for test case N*/


Sample Input
1
6 6
2 1 1
2 3
4 3
3
1 3
3 3
4 4

Sample Output:
4


Pictorial Representation for sample input:
<img src="images/problem_ULGAME3.jpg" />
</b></pre></div>
';
?>