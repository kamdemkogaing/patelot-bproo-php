<?php

// Definition des variables en PHP
$firstName = "LUVODIC";
$lastName = "KOGAING";

$age = 44;
$is_married = true;

$account_balance = 4705.99;

// on déclare ainsi une constante en PHP. Une variable qui ne peut plus changer son contenu.
define("DATABASE", "MySQL");
define("DB_PATELOT", "patelot.de");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div><?php echo "Mein Name ist: $lastName und mein Vorname ist: $firstName"; ?></div>
  <p><?php echo "Ich bin verheiratet, ja: $is_married"; ?></p>
  <p><?php echo DATABASE; ?></p>
  <p><?php echo DB_PATELOT; ?></p>
</body>

</html>