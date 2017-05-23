<?php
    require('navbar.php');
    if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: login.php');
    }
    ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_list.php" method="post">
          <?php
    switch ($_GET["Page"]) {
        case "Homepage":
                    if (isset($_GET["ContentID"])) {
                        $ContentID = $_GET['ContentID'];

                    } else {
                        echo "No record set";
                    }
                    $sql = "SELECT * FROM homepage WHERE ContentID=$ContentID LIMIT 1";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) { ?>

                   <h1>Homepage Row</h1>
                   <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

                   <!--<label for="Piece_Order">Piece_Order</label>-->
                   <input name="Piece_Order" id="Piece_Order" type="hidden" required value="<?php// echo $row['Piece_Order'];?> 1 ">

                   <label for="Headers">Headers</label>
                   <input name="Headers" id="Headers" type="text" required value="<?php echo $row['Headers'];?>">

                   <label for="Image">Image</label>
                   <input name="Image" id="Image" type="text" value="<?php echo $row['Image'];?>">

                   <label for="text">Text</label>
                    <textarea name="text" id="text" type="text" required> <?php echo $row['text'];?></textarea>
                    

                   <label for="links">link</label>
                   <input name="links" id="links" type="text" value="<?php echo $row['links'];?>">

                   <input type="submit"> <input type="reset">
                   <?php }
                    } else {
                        echo "Failed to load content.";
                    }
            break;
        
///////////////////////////////////////////////////////////////////////////
        case "AddAbout":
            if (isset($_GET["ContentID"])) {
                $ContentID = $_GET['ContentID'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM addabout WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <!--<label for="AboutOrder">AboutOrder</label> <br>-->
           <input name="AboutOrder" id="AboutOrder" type="hidden" required value="<?php //echo $row['AboutOrder'];?>1"> <br> <br>

           <label for="AboutHeader">AboutHeader</label>
           <input name="AboutHeader" id="AboutHeader" type="text" required value="<?php echo $row['AboutHeader'];?>">

           <label for="AboutText">AboutText</label>
           <textarea name="AboutText" id="AboutText" rows="5"><?php echo $row['AboutText'];?></textarea>

           <label for="NewImage">NewImage</label>
           <input name="NewImage" id="NewImage" type="text" value="<?php echo $row['NewImage'];?>">

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }
        break;
//////////////////////////////////////////////////////////////////////////
        case "Footer":
            if (isset($_GET["ContentID"])) {
                $ContentID = $_GET['ContentID'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM footeradditions WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

            
           <label for="Company">Companies (make sure to add &#60;br&#62; Between each company name)</label>
           <input name="Company" id="Company" type="text" required value="<?php echo $row['Company'];?>">

           <label for="Contact">Contacts (make sure to add &#60;br&#62; Between each Contact method)</label>
           <input name="Contact" id="Contact" type="text" required value="<?php echo $row['Contact'];?>">

           <label for="Locations">Locations (make sure to add &#60;br&#62; Between each Location)</label>
           <input name="Locations" id="Locations" type="text" required value="<?php echo $row['Locations'];?>">
            
           <label for="Copyright">Copyright</label>
           <input name="Copyright" id="Copyright" type="text" required value="<?php echo $row['Locations'];?>">

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }
        break;
//////////////////////////////////////////////////////////////////////////
        case "Mission":
            $sql = "SELECT `Statement` FROM `mission` LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <label for="Statement">Statement</label>
            <textarea name="Statement" id="Statement" required>
            <?php echo $row['Statement'];?>
            </textarea>

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }
        break;
/////////////////////////////////////////////////////////////////////////
        case "Services":
            if (isset($_GET["ContentID"])) {
                $ContentID = $_GET['ContentID'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM services WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >
            
           <label for="Service">Service</label>
           <input name="Service" id="Service" type="text" required value="<?php echo $row['Service'];?>">

           <label for="Service_Image">Service_Image</label>
           <input name="Service_Image" id="Service_Image" type="text" required value="<?php echo $row['Service_Image'];?>">

           <label for="General_Text">General_Text</label>
           <input name="General_Text" id="General_Text" type="text" required value="<?php echo $row['General_Text'];?>">

           <label for="General_Image">General_Image</label>
           <input name="General_Image" id="General_Image" type="text" required value="<?php echo $row['General_Image'];?>">

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }
        break;
        default:
            echo "Error";
        }
           ?>
        </form>
    </div>
</div>
<?php require('footer.php');
        $conn->close(); ?>
