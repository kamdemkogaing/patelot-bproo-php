<?php

// condition in PHP

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>

<body>
  <div class="top-container">
    <div class="sub-container">
      <?php

      $date = date("H:i:s");
      echo $date;
      echo "<br>";

      if ($date < 4) {
        echo "Nous sommes á la premiere heure de la journée";
        echo "<br>";
      } elseif ($date < 12) {
        echo "Nous sommes en matinée";
        echo "<br>";
      } else {
        echo "Je n'ai aucune idée";
        echo "<br>";
      }

      if (false) {
        echo "Super la condion est true";
        echo "<br>";
        echo "Super la condion est true";
        echo "<br>";
        echo "Super la condion est true";
        echo "<br>";
        echo "Super la condion est true";
        echo "<br>";
        echo "Super la condion est true";
        echo "<br>";
      }

      if (10 < 20) {
        echo "la condition est vrai";
        echo "<br>";
      } else {
        echo "la condition est fause";
        echo "<br>";
      }


      // switch conditions
      $color_preferer = "white";

      switch ($color_preferer) {
        case "olive";
          echo "olive";
          echo "<br>";
          break;
        case "yellow";
          echo "yellow";
          echo "<br>";
          break;
        default;
          echo "Vous ne preferez aucune couleur...";
          break;
      }

      ?>
    </div>
  </div>
</body>

</html>