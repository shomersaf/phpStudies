<?php
$title = "Home";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
<h3>Post form</h3>
<form action="./check_post.php" method="post">
<input type="text" name="username" placeholder="name:">
<input type="email" name="email" placeholder="email:">
<input type="password" name="password" placeholder="password:">
<textarea name="message" placeholder="message:"></textarea>
<input type="submit" class="btn btn-success send" value = "Send">
</form>
<h3>Get form</h3>
<form action="./user.php" method="get">
<input type="text" name="username" placeholder="name:">
<textarea name="message" placeholder="message:"></textarea>
<input type="submit" class="btn btn-success send" value = "Send">
</form>
</div>
<?php
require_once "./blocks/footer.php";
?>
