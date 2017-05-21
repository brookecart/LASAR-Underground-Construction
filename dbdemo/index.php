<?php require('db_conn.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DB Demos</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
  <?php require('modules/nav.php'); ?>
  
  <div class="row">
    <div class="large-12 columns">
    <?php
        if (isset($_GET['pg'])) { //check if specific content is requested
            $page = $_GET['pg'];
            
        } else { //assume homepage
            $page = 1;
        }
        $sql = "SELECT ContentID, HTML FROM content WHERE ContentID=$page";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo $row["HTML"];
            }
        } else {
            echo "Failed to load content.";
        }
    ?>
    </div>
</div>
   
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>   
</body>
</html>
<?php $conn->close(); ?>