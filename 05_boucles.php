<?php

/* Les Boucles */


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
      <div><?php echo "BOUCLES :<br><br>" ?></div>
      <div>
        <?php
        /*  for ($init = 0; $init < 20; $init++) {
          echo "PHP FOR PATELOT $init<br>";
        }
        echo "Another..." */

        /*  $i = 1;
        $multi = 9;

        while ($i < 12) {
          echo "9 x $i = " . ($multi * $i) . "<br>";
          $i++;
        } */

        $users = [
          [
            "lastName" => "KAMDEM",
            "firtsName" => "PATRICK",
            "age" => 44
          ],
          [
            "lastName" => "BAUMANN",
            "firtsName" => "BINJA",
            "age" => 40
          ],
          [
            "lastName" => "KAMDEM",
            "firtsName" => "ELAYS",
            "age" => 8
          ],
        ];

        foreach ($users as $user) {
          print_r($user["lastName"] . "<br>");
        }

        print_r(json_encode($users));
        ?>
      </div>
    </div>
  </div>
</body>

</html>