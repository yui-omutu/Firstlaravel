<?php
function text($score1,$score2,$score3)
{
$total = $score1+$score2+$score3;

if($total>=210){
 echo $total . "なので合格です";
}else{
echo $total . "なので不合格です";
}
}
echo text(100,200,30);
