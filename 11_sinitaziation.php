<?php
if (isset($_POST["submit"])) {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);

  echo $name;
  echo "<br>";
  echo $email;
}
?>

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
  <title>Courses | PHP</title>
</head>

<body class="bg-black">
  <div class="max-w-5xl min-h-screen p-4 m-auto flex flex-col gap-4 text-white">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
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
</body>

</html>