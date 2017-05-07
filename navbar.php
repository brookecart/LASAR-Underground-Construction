<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LASAR Underground</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" type="image/x-icon" href="cone.png" />
    <link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">  
  </head>
      <body class="lsr-body" style="background-color: #B6A19E">
       <div class="large-3 columns">
        <a href="index.php">
        <!--<img rc="images/logo.png">-->
            </a>
    </div>     
    <?php 
        function imgText($imgSrc, $imgSize, $lsrText, $txtSize) { //function to make an image with text next to it
            echo "<div class='row lsrPart'>".
                    "<div class='column $imgSize'>".
                        "<img src='$imgSrc' class=''></img>".
                    "</div>".
                    "<div class='column $txtSize'>".
                        "<p>$lsrText</p>".
                    "</div>".
                "</div>";
        }
    // Example for usage: imgText("Images/IMG_1602.jpeg","Lorem Ipsum");
    // make sure it's in php
    ?>
 <div class="top-bar">
  <div class="top-bar-left">
    <ul class="dropdown menu" data-dropdown-menu>
      <li class="menu-text">Site Title</li>
      <li>
        <a href="accomplishments.php">Accomplishments</a>
        <ul class="menu vertical">
          <li><a href="catspace.php">AREA1</a></li>
          <li><a href="catacc.php">AREA2</a></li>
          <li><a href="catcloth.php">AREA3</a></li>
        </ul>
      </li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
      </div>
    <div class="top-bar-right">
     <ul class="menu">
      <li>
        <a href="application.php">Apply</a>
      </li>
    </ul>
    </div>
  </div>