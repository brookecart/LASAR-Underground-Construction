<?php
    require('navbar.php');
    if(isset($_GET['logout'])){
        doLogout();
    }
    if(isset($_POST['un'])){
        doLogin($_POST['un'],$_POST['pw']);
    }
?>
<?php ?>
<body id="login">

  <div class="row">
    <div class="col">
        <form method="post" action="login.php">
            <br>
            <input name="un" id="un" type="text" placeholder="username">
            <input name="pw" id="pw" type="password" placeholder="password">
            <input class="button" type="submit" value="Login">
        </form>
    </div>
</div>


<?php require('footer.php');
 $conn->close(); ?>
