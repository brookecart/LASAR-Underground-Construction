<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="cone.png" />
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>LASAR</title>
     <script>$(document).ready(function(){
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown({
            hover: false
        });
    });</script>
</head>
   <body>
         <?php 
            function imgText($boxSize, $imgSrc, $imgSize, $lsrText, $txtSize) { //function to make an image with text next to it
                echo "<div class='row $boxSize lsrImgText'>".
                    "<img src='$imgSrc' class='column $imgSize'></img>".
                    "<p class='column $txtSize'>$lsrText</p>".
                    "</div>";
            } 
        ?>

        <ul id="dropdown1" class="dropdown-content green darken-2">
      <li><a href="Projects.php">AT&#38;T</a></li>
      <li><a href="#!">PG&#38;E</a></li>
      <li><a href="#!">Comcast</a></li>
        </ul>

    <nav>
        <div class="nav-wrapper green darken-3 z-depth-1">
        
      <a href="index.php" class="brand-logo hide-on-med-and-down">LASAR Underground Construction Inc.</a>
      <a href="index.php" class="brand-logo hide-on-large-only">LASAR</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>

        <li><a href="about.php">About us</a></li>
        <li><a href="Contacts.php">Contact</a></li>
        <li><a href="application.php">Employment</a></li>
        </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="about.php">About us</a></li>
                <li><a href="Contacts.php">Contact</a></li>
                <li><a href="application.php">Employment</a></li>
            </ul>
    </div>
  </nav>
