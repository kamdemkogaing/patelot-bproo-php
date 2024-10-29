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

        $string = "kamdem kogaing patrick";
        print_r(strtoupper($string));

        echo "<h1>KAMDEM</h1>";
        echo htmlspecialchars("<h1>KAMDEM</h1>");

        printf("10*5=%d", 10 * 5);
        ?>
      </div>
    </div>
  </div>
</body>

</html>