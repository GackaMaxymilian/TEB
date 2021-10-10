<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <1-- komentarz w HTML -->
    <?php
    // komentarz w jednej lini
/*
komentarz
w wielu
liniach
*/

// . konkatenacja
$name="Janusz";
$surname="Kowalski";
echo "Imię" . nazwisko: $name"." $surname";


$text = "<br>imię i nazwisko";
$text .= $name;
echo $text;
$text = $surname;
echo $text<br>;


// . interpolacja
echo "imię ","i nazwisko",$name;

?>


  </body>
</html>
