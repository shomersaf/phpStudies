<?php
//ATTENTION: the best place for start sessions code is HERE!!!!!
//cookie works on whole the domain pages, session works at ONLY the page where the next command is written
session_start();
$title = "Cookies And Sessions";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
<?php

echo '<h2>Sessions</h2>';
//setting variable in session
$_SESSION["user_name"] = "Antuanetta";
//deleting user name in session
//unset($_SESSION["user_name"]);
//deleting whole the session
//session_destroy();
if($_SESSION["user_name"] == "Antuanetta"){
    echo '<h3> Session created for User '.$_SESSION["user_name"].' - authorized till the end of the session.</h3>';
}else{
    echo '<h3> No user session.</h3>';
}
echo '<hr />';
echo '<h2>Cookies</h2>';
$user_name ="Alex";
//time is in seconds
$sec = 180;
//setting cookie
setcookie("user_name",$user_name, time()+$sec);
// print_r($_COOKIE);
if($_COOKIE['user_name']=="" ){
   
    echo '<h3>User unauthorized</h3>';
}
else {
    echo '<h3> User '.$_COOKIE['user_name'].' is authorized for '.$sec.' sesonds.</h3>';
} 

//deleting cookie
//setcookie("user_name",$user_name, time()-$sec);



?>

</div>

<?php
require_once "./blocks/footer.php";
?>
