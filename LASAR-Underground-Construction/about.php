<?php 
require('navbar.php');?>

    <div class="parallax-container" style="width: 100%; margin-top:-100px;">
        <div class="parallax">
            <img src="img/IMG_1564.jpeg" alt="Space">
        </div>
    </div>

    <div class="row center-align container">
        <h1 class="hide-on-small-only">About Our Company</h1>
        <h1 class="hide-on-med-and-up">About</h1>
    </div>

    <!--== ABOUT PAGE CONTENT ==-->

    <?php 
                $sql = "SELECT `ContentID`, `AboutOrder`, `AboutHeader`, `AboutText`, `NewImage` FROM `addabout` WHERE 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

    echo "
    <div class='row container'>
        <div class='col s12'>
            <div class='card white darken-1'>
                <div class='card-content black-text'>
                  <span class='card-title wow' style='font-size:2.5rem;'>" . $row['AboutHeader'] . "</span>
                    ";
                    if ($row['NewImage'] != "") {
                    echo "<div class='hide-on-med-and-down'><img src='img/".$row['NewImage']."' alt='Image".$row['ContentID']."' style='width:30rem; margin-right:20px;' align='left'></div>";
                    };
                    echo $row['AboutText']."

                </div>
            </div>
        </div>
    </div>
    <div style='padding: 20px;'></div>";
               }
                }    ?>
    

   <?php require('footer.php');?>
   <script>$(document).ready(function(){
      $('.parallax').parallax();
    $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
    });</script>
    <!--== END ABOUT PAGE CONTENT ==-->
