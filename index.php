<?php
//include_once 'includes/user.php';
include_once 'user_session.php';
$userSession = new UserSession();
//$user = new User();
if(isset($_SESSION['user'])){
    //echo "hay sesion";
    //$user->setUser($userSession->getCurrentUser());
    include_once 'home.php';
}else if(isset($_POST['username']) && isset($_POST['password'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    if($userForm == "admin" and $passForm == "admin"){
        $userSession->setCurrentUser($userForm);
        include_once 'home.php';
    }
    else{
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }
    
}else{
    //echo "login";
    include_once 'login.php';
}
?>