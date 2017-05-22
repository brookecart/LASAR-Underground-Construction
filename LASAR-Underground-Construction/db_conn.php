<?php
session_start();
$servername = "localhost";
$username = "cartweba_student";
$password = "O1sSKzrs75bc";
$dbname = "cartweba_pp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
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
function addService($Service, $Service_Image, $General_Text, $General_Image) {
    global $conn;
    $sql = "INSERT INTO services (Service, Service_Image, General_Text, General_Image) VALUES ('$Service', '$Service_Image', '$General_Text', '$General_Image')";

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
function updateAbout($AboutOrder, $AboutHeader, $AboutText, $NewImage, $ContentID) {
    global $conn;
    $sql = "UPDATE addabout SET AboutOrder='$AboutOrder', AboutHeader='$AboutHeader', AboutText='$AboutText', NewImage='$NewImage' WHERE ContentID=$ContentID";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit footer ---------- */
function updateFooter($Company, $Contact, $Locations, $Copyright, $ContentID) {
    global $conn;
    $sql = "UPDATE footeradditions SET Company='$Company', Contact='$Contact', Locations='$Locations', Copyright='$Copyright' WHERE ContentID=$ContentID";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit homepage ---------- */
function updateHomepage($Piece_Order, $Headers, $Image, $text, $links, $ContentID) {
    global $conn;
    $sql = "UPDATE homepage SET Piece_Order='$Piece_Order', Headers='$Headers', Image='$Image', text='$text', links='$links' WHERE ContentID=$ContentID";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit Mission State ---------- */
function updateMission($Statement) {
    global $conn;
    $sql = "UPDATE mission statement SET Statement='$Statement'";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Edit Services ---------- */
function updateServices($Service, $Service_Image, $General_Text, $General_Image, $ContentID) {
    global $conn;
    $sql = "UPDATE services SET Service='$Service', Service_Image='$Service_Image', General_Text='$General_Text', General_Image='$General_Image' WHERE ContentID=$ContentID";

    if ($conn->query($sql) === TRUE) {
        echo "Page updated.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}
    /* ---------------------------------- Deletions ---------------------------------- */
/* ---------- Delete a Homepage Row ---------- */
function deleteHPRow($ContentID) {
    global $conn; 
    $sql = "DELETE FROM homepage WHERE ContentID=$ContentID LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo "Row deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete an About Row ---------- */
function deleteAbout($ContentID) {
    global $conn; 
    $sql = "DELETE FROM addabout WHERE ContentID=$ContentID LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo "Row deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Delete a Service ---------- */
function deleteService($ContentID) {
    global $conn; 
    $sql = "DELETE FROM services WHERE ContentID=$ContentID LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        echo "Row deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
;}

/* ---------- Login ---------- */
function doLogin($un,$pw){
    $adminun = "LASAR";
    $adminpw = "LSR28CO";
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