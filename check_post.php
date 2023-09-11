<?php
$title = "Check Post";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
<?php
// print_r($_POST);'

$_POST["password"] = md5(trim($_POST["password"]));
if(!trim($_POST["username"]) || !trim($_POST["email"]) || !trim($_POST["password"]) || !trim($_POST["message"])){
$username =trim($_POST["username"]);
echo "Enter all the data";
}else if(strlen($_POST["username"])<=1){
    echo "Enter relevant name";
}else{
    // echo "<h3>User data:</h3>";
    // foreach($_POST as $item => $value){
    //   echo  "<p>$item : <b>$value</b></p>";}
    header('Location: ./contacts.php');
exit;
}
?>
</div>
<?php
require_once "./blocks/footer.php";

?>

