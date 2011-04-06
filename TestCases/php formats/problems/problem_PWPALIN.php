<?php

$contents.="
<center><big><h1><u>Play With Palindromes (PWPALIN)
</u></h1></big></center>
<div style='text-align:justify; width:520px'>
<p> 
	You are given a String code, a position array and a length array. code contains an encoded string which you must decode using the following method. Step through the elements of position in order, and for each element i, take the substring of length length[i] at position position[i]. Insert the reverse of that substring before position position[i]+length[i], thereby creating a palindromic substring. All positions are 0-based. Return the decoded String.
 
<p> 
<pre> 
Constraints
-	code will contain between 1 and 10 characters, inclusive.
-	code will contain only digits ('0'-'9') and letters ('a'-'z', 'A'-'Z').
-	position will contain between 0 and 10 elements, inclusive.
-	length will contain the same number of elements as position.
-	position and length will always refer to a valid substring in the           
(partially decoded) string code.
-	Each element of length will be positive.
-	The return value will have at most 1000 characters.
 
 
Input Format:
Line1 - No of test cases T (<50)<br/> 
Next 3T LInes contain String code, Positions array and Length array for T 
test cases.
Line2 - String code
Line3 - Position array ( Values separated by space)
Line4 - Length array ( Values separated by space)
And so on.
 
Output Format<br/> 
Line 1 to T - Each line contain Required String for the corresponding test case.<br/> 
<br/> 
 
Examples
0)
ab
0
2
Returns: abba
The decoding step selects the whole string and appends it in reversed form.
 
1)	
Misip
2 3 1 7
1 1 2 2
Returns: Mississippi
The decoding steps are: 'Misip' -> 'Missip' -> 'Misssip' -> 'Mississip' -> 'Mississippi'
 
2)	    	
XY
0 0 0 0
2 4 8 16
Returns: XYYXXYYXXYYXXYYXXYYXXYYXXYYXXYYX
In this example the length of the string doubles in each decoding step.</div>
";
?>