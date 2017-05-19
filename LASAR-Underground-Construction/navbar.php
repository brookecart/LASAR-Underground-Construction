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
</head>
   <body>
         <?php 
            function imgText($divId, $serV, $naMe, $imgSrc, $lsrText) {
                //function to make an image with text next to it
                echo '<li>
              <div id="' . $divId . '" class="collapsible-header service service-' . $serV . ' ' . active("solar") . '"><i class="material-icons"></i><h2 class="serviceTxt left-align">' . $naMe . '</h2></div>
              <div class="collapsible-body">
                  <div class="row" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <div class="col m7">
                          <img src=' . $imgSrc . ' alt="hi" style="max-width:100%;">
                      </div>
                      <div class="col m5">
                          <p>' . $lsrText . '</p>
                      </div>
                  </div>
              </div>
            </li>';
            } 
        ?>
        <ul id="dropdown1" class="dropdown-content green darken-2">
          <li><a class="white-text" href="Services.php?var=wiring#wiring">Wiring</a></li>
          <li><a class="white-text" href="Services.php?var=solar#solar">Solar</a></li>
          <li><a class="white-text" href="Services.php?var=other#other">Other</a></li>
        </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><div class="userView">
                  <a href="index.php"><span class="black-text name">LASAR Underground</span></a>
                </div></li>
               <li><a href="Services.php">Services</a></li>
               <li><a href="about.php">About us</a></li>
               <li><a href="Contacts.php">Contact</a></li>
               <li><a href="application.php">Employment</a></li>
            </ul>
    <nav style="line-height: 60px;">
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
