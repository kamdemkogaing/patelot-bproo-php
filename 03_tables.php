<?php

// simple tables
$firstTable = [8, 10, 40, 44, "patelot", "pk"];
$fruits = array("Banane", "Ananas", "Birne", "Mangos");

// somes examples
$clubs = array(array("VKE", "POUAHOM", "SKOBK", "TEAM KARLSRUHE"), array("FIFVE 24", "CLUB SPORTIF", "LONDON 25", "LICENCES"));

// associate tables
$users = [
  [
    "name" => "KAMDEM",
    "firstName" => "PATRICK",
    "email" => "patrick-kamdem@patelot.de",
    "age" => 44
  ],
  [
    "name" => "BAUMANN",
    "firstName" => "BINJA",
    "email" => "binja-baumann@patelot.de",
    "age" => 40
  ],
  [
    "name" => "KAMDEM",
    "firstName" => "LUCA",
    "email" => "luca-kamdem@patelot.de",
    "age" => 10
  ],
  [
    "name" => "KAMDEM",
    "firstName" => "ELYAS",
    "email" => "elyas-kamdem@patelot.de",
    "age" => 8
  ]
]

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
      <div><?php print_r($firstTable[4]); ?></div>
      <div><?php print_r($fruits[2]); ?></div>
      <div><?php echo $users[3]["name"], " ; ", $users[3]["firstName"], " ; ", $users[3]["email"], " ; ", $users[3]["age"]; ?></div>
      <div><?php echo $clubs[1][3] ?></div>
    </div>
  </div>
</body>

</html>