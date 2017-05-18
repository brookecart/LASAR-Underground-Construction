<?php
require "db_conn.php";
?>
<br>
<?php
$sql = "SELECT * FROM homepage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ContentID"]."<br>".
             "Order: " . $row["Piece_Order"]."<br>".
             "Header: " . $row["Headers"]."<br>".
             "Image Directory: " . $row["Image"]."<br>".
             "Text: " . $row["Text"]."<br>".
             "link to Page: " . $row["link to Page"]."<br>".
             "<hr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>