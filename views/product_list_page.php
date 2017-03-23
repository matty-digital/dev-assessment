<?php
  include('../models/JSONmodel.php');
  $data = getJSONdata();
?>

<!DOCTYPE html>
<html>
  <?php include_once '../views/includes/head.php'; ?>

  <body>

    <?php include_once '../views/includes/content.php'; ?>

    <!-- Same thing for scripts, but including them further down for page speed -->
    <?php include_once '../views/includes/scripts.php'; ?>
  </body>
</html>
