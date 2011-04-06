<?php

$contents.="
<center><big><h1><u>Prime Problem: (PPROB)
</u></h1></big></center>
<div style='text-align:justify; width:520px'>
Find the number of primes possible which follows the following three conditions:<br />
a) Can be expressed as a sum of squares of two integers x and y i.e. x^2 +y^2= prime.<br />
b) Lies between two integers (not necessarily prime numbers) P and Q.<br />
c) Two integers Z and A exists such that (x^y) % Z = A.<br />
<br />
<pre>
Input Format:
t (No. of test cases)
For each test case, input
P Q Z A

Output Format:


Sample Input
2
12 102 7 1
134 194 3 1

Sample Output:
2
5

Limits:
0<=P<100000000
0<Q<=100000000
0<Z<=9999999
0<=A<9999999


</pre>
</div>
";
?>