<div>
  <?php
  session_start();

  if (isset($_SESSION["isLogin"])) {
    if (isset($_SESSION["name"])) {
      echo "<div class='text-white font-bold text-2xl'>Bienvenu ", $_SESSION["name"], "</div>";
      echo "<a href='logout.php'>deconnexion<a>";
    } else {
      echo "<div class='text-white font-bold'>Desolé vous n'avez pas donné votre nom!</div>";
    }
  } else {
    echo "<div class='text-white font-bold'>Bienvenu visiteur...</div>";
  } ?>
</div>