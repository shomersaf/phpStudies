<?php
session_start();

$title = "Contacts";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
<div class="text-success"><?=$_SESSION['successfull_mail']?></div>
<form action="./check_contacts.php" method="post">

<input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="name:">
<div class="text-danger"><?php
            if (!empty($_SESSION['error_username'])) {
               echo $_SESSION['error_username'];}    ?></div>
<input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="email:">
<div class="text-danger"><?php
            if (!empty($_SESSION['error_email'])) {
               echo $_SESSION['error_email'];}    ?></div>
<input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="subject:">
<div class="text-danger"><?php
            if (!empty($_SESSION['error_subject'])) {
               echo $_SESSION['error_subject'];}    ?></div>
<textarea name="message" placeholder="message:"><?=$_SESSION['message']?></textarea>
<div class="text-danger"><?php
            if (!empty($_SESSION['error_message'])) {
               echo $_SESSION['error_message'];}    ?></div>
<button type="submit" class="btn btn-success send">Send</button>
</form>

</div>

<?php
require_once "./blocks/footer.php";
?>
