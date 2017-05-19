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
            <li>
              <div id="wiring" class="collapsible-header service service-1 <?php active('wiring'); ?>"><i class="material-icons"></i>
                  <h1 class="serviceTxt left-align">Wiring</h1>
                </div>
              <div class="collapsible-body">
                  <?php imgText("Img/IMG_1602.jpeg", "Lorem ipsum"); ?>
              </div>
            </li>
            <li>
              <div id="solar" class="collapsible-header service service-2 <?php active('solar'); ?>"><i class="material-icons"></i><h2 class="serviceTxt left-align">Solar</h2></div>
              <div class="collapsible-body">
                  <?php imgText("Img/IMG_1602.jpeg", "Lorem ipsum"); ?>
              </div>
            </li>
            <li>
              <div id="other" class="collapsible-header service service-3 <?php active('other'); ?>"><i class="material-icons"></i><h2 class="serviceTxt left-align">Other</h2></div>
              <div class="collapsible-body">
                  <?php imgText("Img/IMG_1602.jpeg", "Lorem ipsum"); ?>
              </div>
            </li>
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
