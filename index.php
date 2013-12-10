<?php

include 'cap.php';
include 'block.php';

echo "<style>";
include 'main.css';
echo "</style>";

//echo " <head><link rel='stylesheet' href='main.css' type='text/css'> </head>";
//Эта ебанная пизда выше нихуя не работает как нужно. Но, кажется, так правильнее.

$user_name = 'link';
$user_dick_length = 1;

$author = 'Ницше';
$name = 'О вечном';
$date = '21.10.13';
$time = '4:13';
$text = 'Женщины - это кошки. В лучшем случае - коровы.';


startBlockWriting();	
cap($user_name, $user_dick_length);
endOfCap();
addBlock($author, $name, $tags, $date, $time, $text);

stopBlockWriting();
