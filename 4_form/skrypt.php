<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwód</title>
  </head>
  <body>
    <?php
    if (!empty($_POST['SideA']) && !empty($_POST['SideB'])) {
      $a=str_replace(",", ".", $_POST['SideA']);
      $b=str_replace(",", ".", $_POST['SideB']);
      $area=$a*$b;
      $rectangle=2*$a+2*$b;

      echo <<< RESULT
      Długości boków:<br>
      a = $a, b = $b<hr>
      Pole wynosi: $area cm<sup>2</sup><br>
      Obwód wynosi: $rectangle cm<br>
      RESULT;
    }else {
      echo "Wypełnij wszystkie dane prawidłowo!";
    }
    ?>
    <a href="./4area.php">Strona Główna</a>
  </body>
</html>
