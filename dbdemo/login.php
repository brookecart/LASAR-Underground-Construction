<?php 
    require('db_conn.php');
    if(isset($_GET['logout'])){
        doLogout();
    }
    if(isset($_POST['un'])){
        doLogin($_POST['un'],$_POST['pw']);
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
<body id="login">
  <?php require('modules/nav.php'); ?>
  
  <div class="row">
    <div class="large-4 small-centered columns">
        <form method="post" action="login.php">
            <br>
            <input name="un" type="text" placeholder="username">
            <input name="pw" type="password" placeholder="password">
            <input class="button" type="submit"  value="Login">
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