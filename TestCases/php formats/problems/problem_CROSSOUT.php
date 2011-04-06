<?php

$contents.='
<center><big><h1><u>Cross Out (CROSSOUT)
</u></h1></big></center>
<div style="text-align:justify; width:520px">
Bored by their daily college lectures, one day  Saket and Mano decided that they rather better spend their lecture time playing some ‘geekish’ game, which Saket claimed was one of his novel discoveries.( Of course he was lying!). So they started playing this game called - ‘Cross Out’.<br />
The rules of the game are as follows:<br />
1. An array of empty boxes is drawn in the rough sheet. (Like the one shown below.) After mutual agreement between both the players, the total number of boxes that constitute the array is decided. Let us call it N.<br />
2. The first player starts out by crossing as much number of boxes he wants, but of course he cannot cross out all the boxes of the array, in the first move of the game, itself.<br />
3. Then the second player has the option to cross as much number of boxes he wants, with the restriction that at the maximum, he can cross out only twice the number of boxes crossed out in the previous move by the first player.<br />
4. The game thus continues, with each player crossing out as many boxes he wants. The only restriction is that he can cross out, at most twice the number of boxes crossed out by the other player in the previous turn.<br />
5. The one to cross out the last box wins the game.<br />
<br />
<img src="images/problem_CROSSOUT.jpg" />
<br /><br />
Saket always insisted on being the first player of the game. Mano always happily agreed, not knowing why Saket was so adamant being the first to move, when the game seemed to favour the one who moved second.<br />
However, on the contrary, no matter how many times they played, Mano always lost the game, notwithstanding Mano always played with most optimum strategy. (Mano is genius, of course.)<br />
This continued, until one day, Mano got frustrated and decided not to play any more until Saket shared the secret. Saket reluctantly shared the wisdom with Mano and they never played this game again. (Well, the beauty of magic lies in the trick!)<br />
<br />
Well, knowing how much publicity it will fetch, Saket has decided to share half of the wisdom with our INSOMNIAC friends, too. (Yeah, you guessed it right, he is cunning!)<br />

The wisdom is: ‘The game is won in the first move itself. That is, in the first move of the game you cross out a given number of boxes and then no matter how much optimally the opponent plays thereafter, the first player is always going to win. Of course, this does not hold when the first player himself wants to lose. ’<br />
Never mind, we have assured Saket that there will be many of our talented friends playing out there today, who can easily see through his cheap trick. <br />
<br />
<pre>
Input Format:
N	 /* the number of the boxes in the array;   2<=N<=1000000 */
Output Format:
M 	/* the number of boxes that should be crossed 
	out by the first player at start of the game so
	that no matter how optimally the game is played thereafter 
	the first player always wins.
	*/


Sample Input:
20
Sample Output:
2
</pre>
</div>
';
?>