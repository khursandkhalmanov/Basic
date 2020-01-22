<?php
$up = 3;
$down = 2;
$strip = '';
$count = 1;
do{
  $strip = $strip - $down;
  echo $count."<br>";
  $strip = $strip + $up;

  $count++;

}while($strip<30);
