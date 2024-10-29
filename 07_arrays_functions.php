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
      <div>
        <?php
        //https://www.php.net/manual/en/ref.array.php

        $fruits1 = ["ananas", "orange", "papaye", "avocats", "pasteque"];
        $fruits2 = ["cerise", "oignon", "cassi", "canne-a-sucre", "noisette"];

        // count()
        //echo count($fruits) . " --<br>";

        // array_push
        /* echo array_push($fruits, "mangue") . " --<br>";
        print_r($fruits); */

        // array_count_values
        //print_r(array_count_values($fruits) . " --<br>");

        // array_pop
        //print_r(array_pop($fruits) . " --<br>");

        // array_unshift
        /* array_unshift($fruits, "kior", "kamdem");
        print_r($fruits); */

        // array_map
        // print_r(array_map(fn($fruit) => $fruit . "-patelot.de", $fruits));

        // array_merge
        //print_r(array_merge($fruits1, $fruits2));

        //array_rand
        //print_r(array_rand($fruits1, 1));

        // array_reduce
        print_r(array_reduce($fruits1, fn($fruit) => $fruit = "avocats"));

        ?>
      </div>
    </div>
  </div>
</body>

</html>