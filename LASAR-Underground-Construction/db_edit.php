<?php
    require('db_conn.php');

   /* if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: login.php');
    } */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Demos</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <?php require('navbar.php'); ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_list.php" method="post">
          <?php
            if (isset($_GET['pid'])) {
                $ContentID = $_GET['pid'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM homepage WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <label for="Piece_Order">Piece_Order</label>
           <input name="Piece_Order" id="Piece_Order" type="int" required value="<?php echo $row['Piece_Order'];?>">

           <label for="Headers">Headers</label>
           <input name="Headers" id="Headers" type="text" required value="<?php echo $row['Headers'];?>">

           <label for="Image">Image</label>
           <input name="Image" id="Image" type="text" required value="<?php echo $row['Image'];?>">

           <label for="text">text</label>
           <input name="text" id="text" type="text" required value="<?php echo $row['text'];?>">

           <label for="links">HTML</label>
           <textarea name="links" id="links" cols="30" rows="20" required><?php echo $row['links'];?></textarea>

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }

            $sql = "SELECT * FROM addabout WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <label for="AboutOrder">AboutOrder</label>
           <input name="AboutOrder" id="AboutOrder" type="int" required value="<?php echo $row['AboutOrder'];?>">

           <label for="AboutHeader">AboutHeader</label>
           <input name="AboutHeader" id="AboutHeader" type="text" required value="<?php echo $row['AboutHeader'];?>">

           <label for="AboutText">AboutText</label>
           <input name="AboutText" id="AboutText" type="text" required value="<?php echo $row['AboutText'];?>">

           <label for="NewImage">NewImage</label>
           <input name="NewImage" id="NewImage" type="text" required value="<?php echo $row['NewImage'];?>">

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }

            $sql = "SELECT * FROM footeradditions WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <label for="Company">Company</label>
           <input name="Company" id="Company" type="text" required value="<?php echo $row['Company'];?>">

           <label for="Contact">Contact</label>
           <input name="Contact" id="Contact" type="text" required value="<?php echo $row['Contact'];?>">

           <label for="Locations">Locations</label>
           <input name="Locations" id="Locations" type="text" required value="<?php echo $row['Locations'];?>">

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
            }

            $sql = "SELECT * FROM mission statement WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <label for="Statement">Statement</label>
           <input name="Statement" id="Statement" type="text" required value="<?php echo $row['Statement'];?>">

           <input type="submit"> <input type="reset">
           <?php }
            } else {
                echo "Failed to load content.";
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
           ?>
        </form>
    </div>
</div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
<?php $conn->close(); ?>
