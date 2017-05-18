<?php
require "db_conn.php";
?>
<br>
<?php
$sql = "SELECT * FROM content";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ContentID"]."<br>".
             "HTML: " . $row["HTML"]."<br>".
             "Keywords: " . $row["Keywords"]."<br>".
             "Description: " . $row["Description"]."<br>".
             "Title: " . $row["Title"]."<br>".
             "Navigation: " . $row["Nav_Name"]."<br>".
             "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
