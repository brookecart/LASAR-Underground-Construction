<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            function imgText($boxSize, $imgSrc, $imgSize, $lsrText, $txtSize) {
                //function to make an image with text next to it
                echo "<div class='$boxSize lsrImgText'>".
                    "<img src='$imgSrc' class='col $imgSize'></img>".
                    "<p class='col $txtSize'>$lsrText</p>".
                    "</div>";
            } 
        ?>

        <ul id="dropdown1" class="dropdown-content green darken-2">
          <li><a class="white-text" href="Services.php?var=wiring#wiring">Wiring</a></li>
          <li><a class="white-text" href="Services.php?var=solar#solar">Solar</a></li>
          <li><a class="white-text" href="Services.php?var=other#other">Other</a></li>
        </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><div class="userView">
                  <div class="background">
                    <img src="img/100_1405.jpeg">
                  </div>
                  <a><span class="white-text name">LASAR Underground</span></a>
                </div></li>
               <li><a href="Services.php">Services</a></li>
               <li><a href="about.php">About us</a></li>
               <li><a href="Contacts.php">Contact</a></li>
               <li><a href="application.php">Employment</a></li>
            </ul>
    <nav>
        <div class="nav-wrapper green darken-3">
      <a href="index.php" class="brand-logo hide-on-med-and-down">LASAR Underground Construction</a>
      <a href="index.php" class="brand-logo hide-on-large-only">LASAR</a>
     <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">

        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>

        <li><a href="about.php">About us</a></li>
        <li><a href="Contacts.php">Contact</a></li>
        <li><a href="application.php">Employment</a></li>
        </ul>
    </div>
  </nav>
