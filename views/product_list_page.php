<?php
  include('../models/JSONmodel.php');
  parseJSONdata();
?>

<!DOCTYPE html>
<html>
  <!-- Keep styles, meta, etc in it's own file to keep it clean and organized -->
  <?php include_once '../views/includes/head.php'; ?>

  <body>

    <?php include_once '../includes/content.php'; ?>

    <!-- Same thing for scripts, but including them further down for page speed -->
    <?php include_once '../views/includes/scripts.php'; ?>
  </body>
</html>
