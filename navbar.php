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
        function imgText($imgSrc, $imgSize, $lsrText) { //function to make an image with text next to it
            echo "<div class='row $imgSize lsrImgText'>".
                "<img src='$imgSrc' class='column large-8'></img>".
                "<p class='column'>$lsrText".
                "</div>";
        }
    // Example for usage: imgText("Images/IMG_1602.jpeg","Lorem Ipsum");
    // make sure it's in php
    ?>
 <div data-sticky-container class="lsr-nav" style="height: 72px;">
  <div class="title-bar sticky is-anchored is-at-top" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1">
    <div class="title-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
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
</div>
          </div>