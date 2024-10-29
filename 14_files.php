<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
  <title>Sessions | PHP</title>
</head>

<!-- Les sessions sont definies du coté serveur -->

<body class="bg-[olive]">
  <div class="max-w-5xl min-h-screen p-4 m-auto flex flex-col gap-4">
    <?php

    $file = "extras/usersText.txt";
    //echo readfile($file);

    if (file_exists($file)) {
      $handle = fopen($file, "r");
      $content = fread($handle, filesize($file));

      echo $content;

      fclose($handle);
    } else {
      $handle = fopen($file, "w");
      $contenu = "KAMDEM" . PHP_EOL . "KOGAING" . PHP_EOL . "PATRICK" . PHP_EOL . "LUDOVIC";
      fwrite($handle, $contenu);
      fclose($handle);
    }

    ?>
  </div>
</body>

</html>