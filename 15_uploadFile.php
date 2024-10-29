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
    $allowed_extensions = ["jpg", "png", "gif", "gpeg"];

    if (isset($_POST["submit"])) {
      $name = $_FILES["upload"]["name"];

      $extension = explode(".", $name);
      print_r($extension);
    }
    ?>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
      <div class="flex flex-col justify-start items-start text-black">
        <div class=" mb-4 mr-4">
          <label for="name">Choose your file</label>
          <input type="file" name="upload" class="" />
        </div>

        <div class="">
          <input type="submit" name="submit" value="Submit"
            class="cursor-pointer input input-bordered w-full max-w-xs" />
        </div>
      </div>
    </form>
  </div>
</body>

</html>