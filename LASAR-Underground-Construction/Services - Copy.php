<?php
// service links
if(isset($_GET['var'])){
    $active = $_GET['var'];
}

function active($var){
    global $active;
    if($var == $active) {
        echo "active";
    }
}
// database
require "db_conn.php";

$sql = "SELECT * FROM services";
$result = $conn->query($sql);
echo "<br> <br> Services  <br>";
/* if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ContentID: " .$row["ContentID"]."<br>".
            "ServiceOrder:".$row["ServiceOrder"]."<br>".
            "Service:".$row["Service"]."<br>".
            "Service Image:".$row["Service Image"]."<br>".
            "General Text:".$row["General Text"]."<br>".
            "General Image:".$row["General Image"]."<br>".
            "<hr>";
    }
} else {
    echo " 0 results";
} */
$row = $result->fetch_assoc();
$row["ContentID"];

require('navbar.php');
?>
<br>
    <div class="row col m6 container">
       <h1 style="font-size:90px;">Services</h1>
        <ul class="collapsible green darken-3 col m10"  style="padding:0;" data-collapsible="accordion" >
            <li>
              <div id="wiring" class="collapsible-header service service-1 <?php active('wiring'); ?>"><i class="material-icons"></i><h1 class="serviceTxt left-align">Wiring</h1></div>
              <div class="collapsible-body">
                  <span>
                    <div class="z-depth-5" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <?php  imgText("","Img/IMG_1602.jpeg", "m7", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",""); ?>
                    </div>
                  </span>
              </div>
            </li>
            <li>
              <div id="solar" class="collapsible-header service service-2 <?php active('solar'); ?>"><i class="material-icons"></i><h2 class="serviceTxt left-align">Solar</h2></div>
              <div class="collapsible-body">
                  <span>
                     <div class="z-depth-5" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <?php  imgText("","Img/IMG_1602.jpeg", "m7", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",""); ?>
                    </div>
                  </span>
              </div>
            </li>
            <li>
              <div id="other" class="collapsible-header service service-3 <?php active('other'); ?>"><i class="material-icons"></i><h2 class="serviceTxt left-align">Other</h2></div>
              <div class="collapsible-body">
                  <span>
                      <div class="z-depth-5" style="background-color:white; padding-top:15px; padding-bottom:15px;">
                      <?php  imgText("","Img/IMG_1602.jpeg", "m7", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",""); ?>
                    </div>
                  </span>
              </div>
            </li>
        </ul>
    </div>

<?php require('footer.php');?>
