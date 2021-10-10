<?php
echo PHP_VERSION, '<br>';
//echo phpinfo();


echo 2**10;

// systemy liczbowe
// binarny 2, oktalny 8, decymalny 10, heksadecymalny 16

$dec=12;
$bin=0b1101;
$oct=030;
$hex=0x31;
$hex=0x2A;

echo "<hr>$dec<br>"; //12
echo "<hr>$bin<br>"; //13 => 1101 => 1*2^0 + 0*2^1 + 1*2^3 + 1*2^4 = 1+0+4+8=13(10)
echo "<hr>$oct<br>"; //8 => 10(8) => 0*8^0 + 3*8^1 = 0+24 = 8(8)
echo "<hr>$hex<br>"; //8 => 31(16) => 1*16^0 + 3*16^1 = 1+48 = 49(16)
echo "<hr>$hex<br>"; //42 => 2A => 10*16^0 + 2*16^1 = 10+32 = 42(16)

// porównanie a identyczność
$x=10;
$y=10.0;

if ($x==$y) {
  echo "Równe";
}else {
  echo "Różne";
}

if ($x===$y) {
  echo "identyczne";
}else {
  echo "nieidentyczne";
}

echo gettype($x); //integer
echo gettype($y); '<hr>'; //double

/*
postnkrementacja $i++
prenkrementacja ++$i
postdekrementacja $i--
predekrementacja --$i
*/


$x=1;
echo $x++; //1
echo $x; //2
echo ++$x; //3
echo ++$x; //4
echo $x; //4

echo --$x; //3
$y=$x++;
echo $x; //4
echo $y; //3
$x=++$x;
echo $x; //5
$x=$y++;
echo $x; //3
echo $y;'<hr>'; //4

$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++;
echo $y; //4
$y=++$x;
$y=$x++;
echo $x; //6
echo --$y; //5
?>
