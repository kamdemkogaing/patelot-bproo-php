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
    <div>
      <?php
      // toujours demarrer la session
      session_start();

      if (isset($_POST["submit"])) {
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($email === "kamdem@patelot.de" && $password = "123456") {
          $_SESSION["isLogin"] = true;
          $_SESSION["name"] = $name;

          header("location: /patelot-bproo-php/extras/dashbord.php");
        } else {
          echo "Vos identifiants sont incorrects";
          $_SESSION["isLogin"] = false;
        }
      }
      ?>
    </div>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <div class="flex lg:flex-row md:flex-col justify-start items-center">
        <div class=" mb-4 mr-4 ">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Type here" class="input input-bordered w-full max-w-xs " />
        </div>
        <div class=" mb-4 mr-4 ">
          <label for="name">Email</label>
          <input type="text" name="email" placeholder="Type here" class="input input-bordered w-full max-w-xs " />
        </div>

        <div class="mb-4 mr-4 ">
          <label for="email">Mot de passe</label>
          <input type="password" name="password" placeholder="Type here"
            class="input input-bordered w-full max-w-xs " />
        </div>

        <div class="mt-3 ">
          <input type="submit" name="submit" value="valider"
            class="cursor-pointer input input-bordered w-full max-w-xs" />
        </div>
      </div>
    </form>
  </div>
</body>

</html>