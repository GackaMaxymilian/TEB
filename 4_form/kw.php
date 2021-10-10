<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pole i obwód kwadratu</title>
  </head>
  <body>
    <?php
  if (!empty($_POST['a'])) {
      $a=str_replace(",", ".", $_POST['a']);
      $area=number_format($a**2, 1);
      $rectangle=number_format(4*$a, 1);

      echo <<< RESULT
        Pole Wynosi: $area cm<sup>2</sup><br>
        Obwód wynosi: $rectangle cm<br>
        RESULT;
    }
else {
  echo "Wypełnij Dane";
}
     ?>
     </body>
</html>
