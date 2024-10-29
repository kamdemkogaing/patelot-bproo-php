<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document | PHP</title>
</head>

<body>
  <div class="top-container">
    <div class="sub-container">
      <div>
        <ul>
          <li>Host: <?php print_r($_SERVER["HTTP_HOST"]) ?></li>
          <li>Host: <?php print_r($_SERVER["HTTP_USER_AGENT"]) ?></li>
          <li>Host: <?php print_r($_SERVER["REQUEST_URI"]) ?></li>
          <li>Host: <?php print_r($_SERVER["HTTP_CONNECTION"]) ?></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>