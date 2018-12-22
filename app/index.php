<?php
if(!isset($_SESSION["lang"])) {
  session_start();
}
$trans="lang/";
if(isset($_GET["lang"])){
  if($_GET["lang"]=="en"){
    $trans.="en.php";
  }
  else {
    $trans.="fr.php";
  }
}
else {
    $trans.="fr.php";
}
$_SESSION["lang"]=$trans;
include($_SESSION["lang"]);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>qTag</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

  </head>
  <body>
        <?php include "fo/header.php"?>
          <?php
          if (isset($_GET["page"]) && "" != $_GET["page"]) {
            if (file_exists("fo/" . $_GET["page"] . ".php")) {
            include "fo/" . $_GET["page"] . ".php";
            } else {
                $_GET["page"]="404";
                include("fo/404.php");
                
            }
		      }
          else {
            include "fo/home.php";
          }
          ?>

        <?php include "fo/footer.php" ?>
    <script src="assets/js/bundle.min.js"></script>
  </body>
</html>
