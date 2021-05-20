
<?php
  session_start();
  if(!isset($_SESSION["user"])) {
    header("Location:login.php");
    exit;
  }
?>

<?php include "layout/header.php"; ?>

<?php include "layout/main.php"; ?>

<?php include "layout/footer.php"; ?>
