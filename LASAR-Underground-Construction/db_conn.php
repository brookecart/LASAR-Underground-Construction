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

/* --------------------------------- Additions ----------------------------- */

/* ---------- Add a Homepage row ---------- */
function addHPRow($Piece_Order, $Headers, $Image, $Text, $links) {
    global $conn;
    $sql = "INSERT INTO homepage (Piece_Order, Headers, Image, Text, links) VALUES ('$Piece_Order', '$Headers', '$Image', '$Text', '$links')";

    if ($conn->query($sql) === TRUE) {
        echo "New Row added to Homepage.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Add a Service ---------- */
function addService($ServiceOrder, $Service, $Service_Image, $General_Text, $General_Image) {
    global $conn;
    $sql = "INSERT INTO services (ServiceOrder, Service, Service_Image, General_Text, General_Image) VALUES ('$ServiceOrder', '$Service', '$Service_Image', '$General_Text', '$General_Image')";

    if ($conn->query($sql) === TRUE) {
        echo "New Service created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Add an about  ---------- */
function addAbout($AboutOrder, $AboutHeader, $AboutText, $NewImage) {
    global $conn;
    $sql = "INSERT INTO addabout (AboutOrder, AboutHeader, AboutText, NewImage) VALUES ('$AboutOrder', '$AboutHeader', '$AboutText', '$NewImage')";

    if ($conn->query($sql) === TRUE) {
        echo "New About created.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}



/* ---------------------------------- Edits ---------------------------------- */



/* ---------- Edit about ---------- */
function updateAbout($AboutOrder, $AboutHeader, $AboutText, $NewImage, $pid) {
    global $conn;
    $sql = "UPDATE addabout SET AboutOrder='$AboutOrder', AboutHeader='$AboutHeader', AboutText='$AboutText', NewImage='$NewImage' WHERE ContentID=$pid";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit footer ---------- */
function updateFooter($company, $Contact, $Locations, $pid) {
    global $conn;
    $sql = "UPDATE footeradditions SET company='$company', Contact='$Contact', Locations='$Locations' WHERE ContentID=$pid";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit homepage ---------- */
function updateHomepage($Piece_Order, $Headers, $Image, $Text, $links, $pid) {
    global $conn;
    $sql = "UPDATE homepage SET Piece_Order='$Piece_Order', Headers='$Headers', Image='$Image', Text='$Text', links='$links' WHERE ContentID=$pid";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit Mission State ---------- */
function updatePage($Statement, $pid) {
    global $conn;
    $sql = "UPDATE mission statement SET Statement='$Statement' WHERE ContentID=$pid";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit Services ---------- */
function updateServices($ServiceOrder, $Service, $Service_Image, $General_Text, $General_Image, $pid) {
    global $conn;
    $sql = "UPDATE services SET ServiceOrder='$ServiceOrder', Service='$Service', Service_Image='$Service_Image', General_Text='$General_Text', General_Image='$General_Image' WHERE ContentID=$pid";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
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
