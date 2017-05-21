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
            require('db_conn.php');
            function imgText($divId, $imgName, $naMe, $imgSrc, $lsrText, $alt, $current) {
                //function to make an image with text next to it
                echo '<li>
              <div id="' . $divId . '" class="collapsible-header service '; active($current);
                echo '"                                                               style="background-image:url(img/'.$imgName.');                                background-position:left;">                                                     <i class="material-icons"></i><h2 class="serviceTxt left-align">' . $naMe . '</h2></div>
              <div class="collapsible-body">
                  <div class="row" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <div class="col service-text">
                          <img src="img/'. $imgSrc . '" alt="Image'.$alt.'" style="width:30rem; margin-right:20px;" align="left"> 
                          ' . $lsrText . '
                      </div>
                  </div>
              </div>
            </li>';
            } 
        ?>
        <ul id="dropdown1" class="dropdown-content green darken-2">
            <?php 
                $sql = "SELECT `ContentID`, `Service`, `Service_Image`, `General_Text`, `General_Image` FROM `services` WHERE 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<li><a class='white-text' href='Services.php?var=".$row['Service']."#".$row['Service']."'>".$row['Service']."</a></li>";
                    }
                } 
            /*
            ?>
          <li><a class="white-text" href="Services.php?var=wiring#wiring">Wiring</a></li>
          <li><a class="white-text" href="Services.php?var=Solar#Solar">Solar</a></li>
          <li><a class="white-text" href="Services.php?var=other#other">Other</a></li> <?php */ ?>
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
