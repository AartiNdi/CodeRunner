<?php

$contents.='
<center><big><h1><u>Let\'s start from the basics (BASICS)
</u></h1></big></center>
<div style="text-align:justify; width:520px">
The Long-form of multiplication of two numbers is a fantastic example of an algorithm which we pick up right from our childhood without mostly giving a much thought as to why it always seems to work. An important factor in the success of this amazingly simple looking algorithm is the way we manipulate the partial products.<br />
Assuming that we do the addition of all the partial products in a single step, your task is to determine the number of carry-overs in the final sum of the partial products. Refer to following figure to get more clarity:<br />
<br />
<pre>
             1234 
    x         987 	The sum of digits which produce carry-over are:
---------------     6+7+6 = <b>1</b>9
            8638    1+8+8+0 = <b>1</b>7 (1 is carry-over from previous sum of digits)      
          9872		9+1 = <b>1</b>1 (1 is carry-over from previous sum of digits)   	
     11106    
---------------
     1217958
---------------

As shown in the above figure, 
the partial products are 8368,9872,11106 and it has 3 carry-overs.
 
Input Format:
Line 1: N 		/* the number of test cases  (N <=100)*/
Line 2: X1 Y1	/* Test Case 1: X1 Y1 are two numbers to be multiplied. */
Line 3: X2 Y2	/* Test Case 2*/
......
......
Line N+1: Xn Yn		/* Test Case N */
<b>/* the numbers are positive integers and can be at the most 100 digits long. */</b>
Output Format:
Line 1: C1		/* C1 is the number of carry-overs
			   in multiplication of X1 and Y1 as explained */
Line 2: C2		/* Carry over for test case 2*/
......
......
Line N: Cn	/* Carry Over for test case N */


Sample Input:
3
1234 987
1234 111
1234 929

Sample Output:
3
0
1
</pre>
</div>
';
?>