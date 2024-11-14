
<?php
include_once 'includes/header.php';
if($user->checkLoginStatus()){
    if(!$user->checkUserRole(300)){
        header("Location: home.php");
        exit();
    }
}
?>

