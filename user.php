<?php
$title = "User ". $_GET["username"];
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
<?php
// print_r($_GET);'


if(!trim($_GET["username"])|| !trim($_GET["message"])){
$username =trim($_GET["username"]);
echo "Enter all the data";
}else if(strlen($_GET["username"])<=1){
    echo "Enter relevant name";
}else{
    echo "<h3>User data:</h3>";
    foreach($_GET as $item => $value){
      echo  "<p>$item : <b>$value</b></p>";}
}
?>
</div>
<?php
require_once "./blocks/footer.php";

?>

