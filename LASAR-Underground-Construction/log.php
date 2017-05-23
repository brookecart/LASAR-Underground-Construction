<?php 
/* ---------- Login ---------- */
function doLogin($un,$pw){
    $adminun = "LASAR";
    $adminpw = "LSR28CO";
    if( $un == $adminun && $pw == $adminpw){
        $_SESSION['isadmin'] = 1;
        header('Location: db_list.php');
        echo "Login Success";
    } else {
        $_SESSION['isadmin'] = 0;
        header('Location: login.php');
        echo "Login Fail";
    }
    
}
function doLogout() {
    $_SESSION['isadmin'] = 0;
}
?>