<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <title>LASAR</title>
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
          <nav>
    <div class="nav-wrapper">
        
      <a href="index.php" class="brand-logo">LASAR Underground Construction Inc.</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
          <div class="navwappa">
        <li><a href="application.php">Apply now!</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="Contacts.php">Contact</a></li>
        <li class="projects">
            <a href="Projects.php" class="dropbuttonfam">Projects</a>
            <div class="projectfrank">
                <a href="#">AT&#38;T</a>
                <a href="#">PG&#38;E</a>
                <a href="#">Comcast</a>
            </div>
            </li>
            
          </div>
          
        </ul>
    </div>
  </nav>
