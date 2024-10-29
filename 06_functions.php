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
        $x = 10;

        /* function greetings()
        {
          global $x;
          $y = 5;
          echo $x . " in <br>";
          echo $y . " in <br>";
          echo "KAMDEM PATRICK";
        }

        echo $x . " out <br>";
        greetings(); */

        /* function greeting($name = "Kogaing", $firstName = "Patrick")
        {
          echo "Hallo zusammen " . $name . " " . $firstName;
        }

        greeting(); */

        // anonym function in PHP
        /* $greeting = function () {
          echo "KAMDEM";
        };

        $greeting(); */

        // arrow function in PHP
        $addition = fn() => "Ing. Inf. Patrik Kamdem <br>";
        echo $addition();

        // return functions in PHP
        function add($n1, $n2)
        {
          return $n1 + $n2;
        }

        $sum = add(1980, 1984);
        echo $sum;

        $substraction = fn($n1, $n2) => $n1 - $n2;
        echo $substraction(1984, 1980);

        ?>
      </div>

    </div>
  </div>
</body>

</html>