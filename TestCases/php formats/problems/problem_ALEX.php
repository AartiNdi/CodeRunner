<?php

$contents.="
<center><big><h1><u>Alexander (ALEX)
</u></h1></big></center>
<div style='text-align:justify; width:520px'>
A new continent has just been discovered called Lang. There are already people living on this continent but they are not governed by anyone. So, all the countries are in a hurry to capture maximum part of this continent. A country called Prog has just employed you to help it in this mission. You have been provided with the map of this new continent. All the houses in the Lang have been marked in this map. This strange continent has only one way roads. These roads are also marked on the map. The only rule followed in Lang up till now is that a group of houses in which every house is reachable from every other house, is a village. <br />
Prog has ordered a brigadier ‘B’ to go to Lang and capture more and more land. For this purpose he has been allocated a house in some village. <br />
A village comes under the acquisition of a country only if at least 1 person residing in that village is a soldier in the army of that country. So, B decides to go house to house to recruit soldiers. Each village from which he recruits soldier becomes a part of Prog.<br />
B can visit a house only if he can recruit a soldier from that house. But, a person from a house (say ‘H’), will become a soldier only if any one of the other houses with direct roads TO ‘H’ has a soldier.	As B is resident of some village so he can start recruiting villagers.<br />
As B is getting old, he decides to travel each road only once. B can visit each village only once. He can recruit only one soldier from each house.<br />
B needs to recruit at least one soldier from each village and move to the next village quickly. ’B’ should capture as many villages as possible.<br />
Assume that the number of villages is small.<br />
Assume all roads are of equal lengths.<br />
Assume that both houses on the ends of the road are different.<br />
<br />
Remember, that B can travel each road only once.<br />
Suggest a path to B so that he can capture maximum part of Lang with the minimum number of soldier recruitments.<br />
First take the input for the first test case. Then give its output as described below. Then take the input for the next test case and so on.<br />
Assume the maximum number of villages to be 10 and the maximum number of houses in each village to be 20.<br />
<br />
<pre><b>
Input Format
The name of a house is an alphanumeric string of maximum length 10.
First line of input should take in the number of test cases.
Next line of input is the number of houses (n) followed by a space and then the number of roads(r).
Next r lines are information on connectivity of roads. One line contains information about one road.
First the name of the house from which road originates is entered followed by a space and 
then the name of the house at which the road ends is entered. 
This road provides connectivity only from the first house to second house but NOT vice-versa.
The next line gives the name of the house of B.

Output Format
Path
Give the path that B should follow in following format.-
Give the name of each house visited starting from B’s house in each line

Sample Input
1
9 12
a b
b c
c a
c e
c g
e d
d f
f e
f g
g i
i h
h g
a

Sample Output
a
b
c
e
d
f
g
</b></pre>
</div>
";
?>