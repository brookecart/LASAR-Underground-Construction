<?php
    require('navbar.php');
    if ($_SESSION['isadmin'] == 1){
        
        if (isset($_GET["Page"])) {
            
        }

        
    } else {
        header('Location: login.php');
    }
?>
<?php  ?>

<?php
    switch ($_GET["Page"]) {
            /////////////////// HOMEPAGE
        case "Homepage":   
?>
          <div class="row">
            <div class="large-12 columns">
                <form action="db_list.php" method="post">
                    
                   <!-- <label for="Piece_Order">Order Rank</label> -->
                   <input name="Piece_Order" id="Piece_Order" type="hidden" value="1" required>

                   <label for="Headers">Header</label>
                   <input name="Headers" id="Headers" type="text" required>

                   <label for="Image">Image Directory</label>
                   <input name="Image" id="Image" type="text" required>

                   <label for="text">Field Text</label>
                   <input name="text" id="text" type="text" required>

                   <label for="links">Link to page (Example: index.php) </label>
                   <input name="links" id="links" type="text">
                    
                   <input name="secret1" id="secret1" type="hidden" value="yes">

                   <input type="submit"> <input type="reset">
                </form>
            </div>
        </div>
    <?php break; 
        /////////////////////// SERVICES?>
    <?php case "Services":   
?>
          <div class="row">
            <div class="large-12 columns">
                <form action="db_list.php" method="post">
                    
                   <label for="Service">Service</label>
                   <input name="Service" id="Service" type="text" required>

                   <label for="Service_Image">Big Image Directory</label>
                   <input name="Service_Image" id="Service_Image" type="text" required>

                   <label for="General_Text">Text</label>
                   <input name="General_Text" id="General_Text" type="text" required>

                   <label for="General_Image">Inside Image Directory</label>
                   <input name="General_Image" id="General_Image" type="text" required>
                    
                    <input name="secret2" id="secret2" type="hidden" value="yes">

                   <input type="submit"> <input type="reset">
                </form>
            </div>
        </div>
    <?php break; 
        //////////////////////// ABOUT PAGE?>
    <?php case "AddAbout":   
?>
          <div class="row">
            <div class="large-12 columns">
                <form action="db_list.php" method="post">
                   <!--<label for="AboutOrder">Order Rank</label>-->
                   <input name="AboutOrder" id="AboutOrder" type="hidden" value="1" required>

                   <label for="AboutHeader">Header</label>
                   <input name="AboutHeader" id="AboutHeader" type="text" required>

                   <label for="AboutText">Text</label>
                   <textarea name="AboutText" id="AboutText" rows="5" required> </textarea>

                   <label for="NewImage">Image Directory</label>
                   <input name="NewImage" id="NewImage" type="text" required>
                    
                    <input name="secret3" id="secret3" type="hidden" value="yes">

                   <input type="submit"> <input type="reset">
                </form>
            </div>
        </div>
    <?php break; 
           } ?> 

<?php require('footer.php');
        $conn->close(); ?>