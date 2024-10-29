<div>
  <?php
  session_start();

  session_destroy();

  header("location: /patelot-bproo-php/13_sessions.php");
  ?>
</div>