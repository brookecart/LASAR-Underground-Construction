<?php
    require('navbar.php');
     if ($_SESSION['isadmin'] == 1){
        ///////////////////////////////////////// Delete Functions
                if (isset($_GET["Dselect"])) {
                    switch ($_GET["Dselect"]) {
                        case "Homepage":
                           deleteHPRow($_GET['del']);
                        break;
                        
                        case "About":
                           deleteAbout($_GET['del']);
                        break;
                        
                        case "Services":
                           deleteService($_GET['del']);
                        break;
                        default:
                            echo "nothing deleted";
                    }
                }
        //////////////////////////////////////// Update functions
                if (isset($_POST['Headers'])){
                    updateHomepage($_POST['Piece_Order'], $_POST['Headers'], $_POST['Image'], $_POST['text'], $_POST['links'], $_POST['ContentID']);
                }

                if (isset($_POST['Service'])){
                    updateServices($_POST['Service'], $_POST['Service_Image'], $_POST['General_Text'], $_POST['General_Image'], $_POST['ContentID']);
                }

                if (isset($_POST['Copyright'])){
                    updateFooter($_POST['Company'], $_POST['Contact'], $_POST['Locations'], $_POST['Copyright'], $_POST['ContentID']);
                }

                if (isset($_POST['AboutHeader'])){
                    updateAbout($_POST['AboutOrder'], $_POST['AboutHeader'], $_POST['AboutText'], $_POST['NewImage'], $_POST['ContentID']);
                }
                if (isset($_POST['Statement'])){
                    updateMission($_POST['Statement']);
                }
         /////////////////////////////////////// Adding Functions
                if (isset($_POST['secret1'])){ 
                    addHPRow($_POST['Piece_Order'], $_POST['Headers'], $_POST['Image'], $_POST['text'], $_POST['links']);
                }

                if (isset($_POST['secret2'])){ 
                    addService($_POST['Service'], $_POST['Service_Image'], $_POST['General_Text'], $_POST['General_Image']);
                }

                if (isset($_POST['secret3'])){ 
                    addAbout($_POST['AboutOrder'], $_POST['AboutHeader'], $_POST['AboutText'], $_POST['NewImage']);
                }

    
    };

  ?>
<div class="container row">
    <div class="col">
    <h2>Homepage</h2>
    <?php
        $sql = "SELECT Statement FROM mission";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='db_edit.php?Page=Mission'>Mission Statement</a><br><br>";
            }
        } else {
            echo "Error: No Mission statement.<br><br>";
        }
    //////
        $sql = "SELECT ContentID, Headers FROM homepage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='db_edit.php?ContentID=".$row['ContentID']."&Page=Homepage'>".$row['Headers']."</a> | <a style='color:red;' href='?del=".$row['ContentID']."&Dselect=Homepage'>(delete)</a><br>";
            }
        } else {
            echo "No Homepage Rows Added.";
        }
        echo "<a href='db_insert.php?Page=Homepage' class='button'>Add a Homepage Row</a> <br> <br>";
//////////////////////////////////////////////////////////////        
        
       echo "<h2>Services page</h2>";
        
        $sql = "SELECT ContentID, Service FROM services";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='db_edit.php?ContentID=".$row['ContentID']."&Page=Services'>".$row['Service']."</a> | <a style='color:red;' href='?del=".$row['ContentID']."&Dselect=Services'>(delete)</a><br>";
            }
        } else {
            echo "No Services Rows Added.";
        }
        echo "<a href='db_insert.php?Page=Services' class='button'>Add a Service</a> <br> <br>";
///////////////////////////////////////////////////////////////        
        echo "<h2>About page</h2>";
        
        $sql = "SELECT ContentID, AboutHeader FROM addabout";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<a href='db_edit.php?ContentID=".$row['ContentID']."&Page=AddAbout'>".$row['AboutHeader']."</a> | <a style='color:red;' href='?del=".$row['ContentID']."&Dselect=About'>(delete)</a><br>";
            }
        } else {
            echo "No About Rows Added.";
        }
        echo "<a href='db_insert.php?Page=AddAbout' class='button'>Add an About Row</a> <br> <br>";
    /////////////////////////////////////////////////////////
        echo "<h3>Footer</h3>";
        $sql = "SELECT * FROM `footeradditions` WHERE 1";
        $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo "<a href='db_edit.php?ContentID=".$row['ContentID']."&Page=Footer'>Change Footer</a>";
                }
            } else {
                echo "Error: No Footer Found";
            }
        ?>
    <br><br><br>
    <a href="login.php?logout" class="button alert">Logout</a> <br> <br>
    </div>
    
    <div class="col s6" style="margin-left:5rem;">
        <h3>Special Instructions</h3>
        <ul class="service-text">
            <li>Do not use an ' in any writing area</li> <br>
            <li>When you add a page it will say there is an error, unless the new addition doesn't show up it's lying to you. There is in fact no real problem.</li>
        </ul>
    </div>
</div>
<?php require('footer.php');
        $conn->close(); ?>
