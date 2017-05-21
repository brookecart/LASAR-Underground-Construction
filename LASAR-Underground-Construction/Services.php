<?php


if(isset($_GET['var'])){
    $active = $_GET['var'];
}

function active($var){
    global $active;
    if($var == $active) { 
        echo 'active';
    }
}
require('navbar.php');
?>

<div class="parallax-container" style="width: 100%">
    <div class="parallax">
        <img src="img/IMG_1564.jpeg" alt="Space" style="display:block">
    </div>
</div>

<div class="row center-align container">
    <h1>Services</h1>
</div>

    <div class="row col m6 container">
        <ul class="collapsible green darken-3 col m12"  style="padding:0;" data-collapsible="accordion" >
            <?php 
                $sql = "SELECT `ContentID`, `Service`, `Service_Image`, `General_Text`, `General_Image` FROM `services` WHERE 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        imgText($row["Service"],$row["Service_Image"], $row["Service"], $row["General_Image"], $row["General_Text"], $row["ContentID"], $row["Service"]);
                    } 
                }
            ?>
        </ul>
    </div>

<?php require('footer.php');?>
   <script>$(document).ready(function(){
      $('.parallax').parallax();
    $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
    });</script>
