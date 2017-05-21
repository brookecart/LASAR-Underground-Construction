<?php 
require('navbar.php');?>
    <!--== BODY HTML CONTENT ==-->
        <div class="parallax-container" style="width: 100%">
          <div class="parallax">
            <img src="img/IMG_1503.jpeg" alt="Space" style="display:block">
          </div>
        </div>
<div class="container">
    <div class="row center-align col">
        <h1 class="hide-on-small-only">LASAR Underground Construction</h1>
        <h1 class="hide-on-med-and-up">LASAR</h1>
    </div>
    
    <div class="row">
        <div class="s12 col">
        <?php 
                $sql = "SELECT `Statement` FROM `mission` WHERE 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) { 
                        
                    echo "<p class='flow-text'>" . $row["Statement"] . "</p>";    
                        
                    }
                } 
            ?>
        </div>
    </div>
</div>
    
    <div style="padding-top: 70px; padding-bottom: 70px;" class=" container">

        <?php 
                $sql = "SELECT `ContentID`, `Piece_Order`, `Headers`, `Image`, `text`, `links` FROM `homepage` WHERE 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="row">
                            <div class="s12 col">
                                <h4> <?php echo $row["Headers"]; ?> </h4>
                            </div>

                            <div class='flow-text'>
                                <img style='width:38rem; margin-right:15px;' src='img/<?php echo $row["Image"]; ?> ' alt='Image <?php echo $row["ContentID"]; ?> ' align='left'>
                                <p> 
                                    <?php echo $row["text"]; ?>
                                </p>
                            </div>
                        </div>
                        <div style='padding: 20px;'></div>
            <?php
                    } 
                }
            ?>
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
    
   <!-- == END BODY HTML CONTENT ==-->
