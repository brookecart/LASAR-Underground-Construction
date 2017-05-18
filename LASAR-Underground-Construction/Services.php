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
            <li>
              <div id="wiring" class="collapsible-header service service-1 <?php active('wiring'); ?>"><i class="material-icons"></i><h1 class="serviceTxt left-align">Wiring</h1></div>
              <div class="collapsible-body">
                  <div class="row" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <div class="col m7">
                          <img src="Img/IMG_1602.jpeg" alt="hi" style="max-width:100%;">
                      </div>
                      <div class="col m5">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                  </div>
              </div>
            </li>
            <li>
              <div id="solar" class="collapsible-header service service-2 <?php active('solar'); ?>"><i class="material-icons"></i><h2 class="serviceTxt left-align">Solar</h2></div>
              <div class="collapsible-body">
                  <div class="row" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <div class="col m7">
                          <img src="Img/IMG_1602.jpeg" alt="hi" style="max-width:100%;">
                      </div>
                      <div class="col m5">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                  </div>

              </div>
            </li>
            <li>
              <div id="other" class="collapsible-header service service-3 <?php active('other'); ?>"><i class="material-icons"></i><h2 class="serviceTxt left-align">Other</h2></div>
              <div class="collapsible-body">
                  <div class="row" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <div class="col m7">
                          <img src="Img/IMG_1602.jpeg" alt="hi" style="max-width:100%;">
                      </div>
                      <div class="col m5">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                  </div>

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
