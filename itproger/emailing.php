<?php
$title = "Emailing";
require_once "./blocks/header.php";
require_once "./blocks/main.php";?>
<div class="container">
<p>The code here is for PHP mailing. But It will work only real unix hosting server</p>
<?php 
$message ="The code here is for PHP mailing. But It will work only real unix hosting server";
$from ="from@from.com";
$to ="to@to.com";
$subject ="my subject";
$subject ="=?utf-8?B?".base64_encode($subject)."?=";
$headers="From: $from\r\nReply-to:  $from\r\nContent-type:text/plain; charset=urf-8\r\n";
mail($to, $subject, $message, $headers);
?>
</div>

<?php
require_once "./blocks/footer.php";
?>
