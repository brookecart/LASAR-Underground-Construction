<div class="page-footer" style="background-color: #2E7D32;">
    <div class="row container">
        <div class="l3 s12 col ">
            <h5 class="white-text"> LASAR Underground Construction</h5>
            <p class="white-text">Designed and developed by CART Group 6</p>
        </div>
        <?php 
            $sql = "SELECT `ContentID`, `Company`, `Contact`, `Locations`, `Copyright` FROM `footeradditions` WHERE 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) { ?>
               
        <div class="l3 s12 col hide-on-med-and-down">
            <p class="white-text">We proudly service some of the leading companies in the Fresno Area.</p>
            <p class="white-text">
                <?php echo $row["Company"]; ?>
            </p>
            <!--<ul>
                <li class="white-text">AT&amp;T Communications</li>
                <li class="white-text">City of Clovis</li>
                <li class="white-text">City of Fresno</li>
                <li class="white-text">Fresno Flood Control District</li>
                <li class="white-text">Valley Controls, Inc</li>
            </ul> -->
        </div>
        
        <div class="l3 s12 col">
            <p class="white-text">
                <?php echo $row["Contact"]; ?>
            </p>
            <!--
            <p class="white-text">EMAIL undergroundemail@email.com</p>
            <p class="white-text">PHONE 559.291.0124</p>
            <p class="white-text">FAX 559.291.0624</p>
            </ul> -->
        </div>
            
        <div class="l3 s12 col">
            <h5 class="white-text">Locations</h5>
            <p class="white-text">
                <?php echo $row["Locations"]; ?>
            </p>
            <!--
            <p class="white-text">2545 N. Sunnyside Ave.</p>
            -->
        </div>

        <div class="l6 s12 col hide-on-small-only">
        <img src="img/seals.png">
        </div>

   <div class="l6 s12 col hide-on-med-and-up">
        <img src="img/seals-half.png">
        </div>
        
    </div>
    <div class="footer-copyright">
            <div class="container">
            <?php echo $row["Copyright"]; ?>
            </div>
          </div>
    <?php } 
                    } 
                ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script src="js/app.js"></script>
    <script>$(document).ready(function(){
        $(".button-collapse").sideNav();
        $(".dropdown-button").dropdown({
            hover: false
        });
    });</script>
    </body>
</html>