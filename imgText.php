<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css">
    <script src="https://use.fontawesome.com/002d370eca.js"></script>
    <title></title>
</head>
<body>
   <?php 
        function imgText($imgSrc, $imgSize, $lsrText) { //function to make an image with text next to it
            echo "<div class='row $imgSize lsrImgText'>".
                "<img src='$imgSrc' class='column large-8'></img>".
                "<p class='column'>$lsrText".
                "</div>";
        }
    // Example for usage: imgText("Images/IMG_1602.jpeg","Lorem Ipsum");
    // make sure it's in php
    imgText("Images/IMG_1602.jpeg", "small-5", "Lorem Ipsum");
    ?>
</body>
</html>