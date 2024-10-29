<?php
if (isset($_POST["submit"])) {
  echo $_POST["name"];
  echo $_POST["email"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document | PHP</title>
</head>

<body class="bg-black">
  <div class="max-w-5xl px-4 m-auto flex flex-col items-center gap-10 text-white">
    <ul class="list-decimal">
      <li>Host: <?php print_r($_SERVER["HTTP_HOST"]) ?></li>
      <li>Host: <?php print_r($_SERVER["HTTP_USER_AGENT"]) ?></li>
      <li>Host: <?php print_r($_SERVER["REQUEST_URI"]) ?></li>
      <li>Host: <?php print_r($_SERVER["HTTP_CONNECTION"]) ?></li>
      <li>Host: <?php var_dump($_SERVER["PHP_SELF"]) ?></li>
    </ul>

    <div class="my-8">
      <a class="text-xl font-semibold" href="<?php echo $_SERVER["PHP_SELF"] ?>?name=PatrickKamdem&age=44">
        J'apprends a coder en PHP
      </a>
    </div>

    <div class="">
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <div class="flex flex-row justify-start items-center text-black">

          <div class=" mb-4 mr-4">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
          </div>

          <div class="mb-4 mr-4">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
          </div>

          <div class="mt-3">
            <input type="submit" name="submit" value="valider"
              class="cursor-pointer input input-bordered w-full max-w-xs" />
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>