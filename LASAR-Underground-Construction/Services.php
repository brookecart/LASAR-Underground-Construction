<?php
if(isset($_GET['var'])){
    $active = $_GET['var'];
}

function active($var){
    global $active;
    if($var == $active) {
        echo "active";
    }
}

require('navbar.php');
?>
<br>
    <div class="row col m6 container">
       <h1 style="font-size:90px;">Services</h1>
        <ul class="collapsible green darken-3 col m12"  style="padding:0;" data-collapsible="accordion" >
            <?php imgText("wiring", "1", "Wiring", "Img/IMG_1602.jpeg", "Lorem ipsum"); ?>
            <?php imgText("solar", "2", "Solar", "Img/IMG_1602.jpeg", "Lorem ipsum"); ?>
            <?php imgText("other", "3", "Other", "Img/IMG_1602.jpeg", "Lorem ipsum"); ?>
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
