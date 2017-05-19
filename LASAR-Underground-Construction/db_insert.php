<?php
    require('db_conn.php');

   /* if ($_SESSION['isadmin'] == 1){ */
        if (isset($_POST['Title'])){ 
            addHPRow($_POST['Piece_Order'], $_POST['Headers'], $_POST['Image'], $_POST['Text'], $_POST['links']);
        } /*
    } else {
        header('Location: login.php');
    } */
?>
<?php require('navbar.php');

$ContentID = "SELECT ContentID FROM homepage";
$sql = "SELECT * FROM homepage WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_insert.php" method="post">
           <label for="Title">Title</label>
           <input name="Title" id="Title" type="text" required>

           <label for="Nav_Name">Navigation Name</label>
           <input name="Nav_Name" id="Nav_Name" type="text" required>

           <label for="Keywords">Keywords</label>
           <input name="Keywords" id="Keywords" type="text" required>

           <label for="Description">Description</label>
           <input name="Description" id="Description" type="text" required>

           <label for="HTML">HTML</label>
           <textarea name="HTML" id="HTML" cols="30" rows="20" required></textarea>

           <input type="submit"> <input type="reset">
        </form>
    </div>
</div>
       <?php
        }    
        } ?>
<?php        
$sql = "SELECT * FROM addabout WHERE ContentID=$ContentID LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>

  <div class="row">
    <div class="large-12 columns">
        <form action="db_insert.php" method="post">
           <label for="Title">Title</label>
           <input name="Title" id="Title" type="text" required>

           <label for="Nav_Name">Navigation Name</label>
           <input name="Nav_Name" id="Nav_Name" type="text" required>

           <label for="Keywords">Keywords</label>
           <input name="Keywords" id="Keywords" type="text" required>

           <label for="Description">Description</label>
           <input name="Description" id="Description" type="text" required>

           <label for="HTML">HTML</label>
           <textarea name="HTML" id="HTML" cols="30" rows="20" required></textarea>

           <input type="submit"> <input type="reset">
        </form>
    </div>
</div>
        <?php
        }    
        } ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
<?php $conn->close(); ?>