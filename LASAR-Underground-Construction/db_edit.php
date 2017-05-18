<?php
    require('db_conn.php');
    if ($_SESSION['isadmin'] == 1){
    } else {
        header('Location: login.php');
    }

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
  <?php require('modules/nav.php'); ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_list.php" method="post">
          <?php
            if (isset($_GET['pid'])) {
                $ContentID = $_GET['pid'];

            } else {
                echo "No record set";
            }
            $sql = "SELECT * FROM content WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>


           <input type="hidden" name="ContentID" value="<?php echo $row['ContentID'];?>" >

           <label for="Title">Title</label>
           <input name="Title" id="Title" type="text" required value="<?php echo $row['Title'];?>">

           <label for="Nav_Name">Navigation Name</label>
           <input name="Nav_Name" id="Nav_Name" type="text" required value="<?php echo $row['Nav_Name'];?>">

           <label for="Keywords">Keywords</label>
           <input name="Keywords" id="Keywords" type="text" required value="<?php echo $row['Keywords'];?>">

           <label for="Description">Description</label>
           <input name="Description" id="Description" type="text" required value="<?php echo $row['Description'];?>">

           <label for="HTML">HTML</label>
           <textarea name="HTML" id="HTML" cols="30" rows="20" required><?php echo $row['HTML'];?></textarea>

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
