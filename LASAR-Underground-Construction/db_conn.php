<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lasar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/* ---------- DB functions ---------- */

/* ----------      */

/* ---------- Add a Homepage row ---------- */
function addPage($HTML, $Keywords, $Description, $Title, $Nav_Name) {
    global $conn;
    $sql = "INSERT INTO homepage (Piece_Order, Headers, Image, Text, links) VALUES ('$Piece_Order', '$Headers', '$Image', '$Text', '$links')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New Row added to Homepage.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Add a Service ---------- */
function addPage($HTML, $Keywords, $Description, $Title, $Nav_Name) {
    global $conn;
    $sql = "INSERT INTO services (ServiceOrder, Service, Service_Image, General_Text, General_Image) VALUES ('$ServiceOrder', '$Service', '$Service_Image', '$General_Text', '$General_Image')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New Service created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit a page ---------- */ 
function updatePage($HTML, $Keywords, $Description, $Title, $Nav_Name, $pid) {
    global $conn;
    $sql = "UPDATE content SET HTML='$HTML', Keywords='$Keywords', Description='$Description', Title='$Title', Nav_Name='$Nav_Name' WHERE ContentID=$pid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit Mission Statement ---------- */ 
function updateMission($HTML, $Keywords, $Description, $Title, $Nav_Name, $pid) {
    global $conn;
    $sql = "UPDATE content SET HTML='$HTML', Keywords='$Keywords', Description='$Description', Title='$Title', Nav_Name='$Nav_Name' WHERE ContentID=$pid";
    
    if ($conn->query($sql) === TRUE) {
        echo "Mission Statement updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete a page ---------- */
function deletePage($ContentID) {
    global $conn;
    $sql = "DELETE FROM content WHERE ContentID=$ContentID LIMIT 1";
    
    if ($conn->query($sql) === TRUE) {
        echo "Page deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Login ---------- */

function doLogin($un,$pw){
    $adminun = "lasar";
    $adminpw = "passw0rd";
    if( $un == $adminun && $pw == $adminpw){
        $_SESSION['isadmin'] = 1;
        header('Location: db_list.php');
        //echo "Login Success";
    } else {
        $_SESSION['isadmin'] = 0;
        header('Location: login.php');
        //echo "Login Fail";
    }
}
function doLogout() {
    $_SESSION['isadmin'] = 0;
}

?>