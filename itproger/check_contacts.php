
<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);
unset($_SESSION['error_username']);
unset($_SESSION['error_email']);
unset($_SESSION['error_subject']);
unset($_SESSION['error_message']);

function redirect(){
    header('Location:./contacts.php');
    exit;
}
$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username']=$username;
$_SESSION['email']=$email;
$_SESSION['subject']=$subject;
$_SESSION['message']=$message;

// print_r($_SESSION);
if(strlen($username)<=1){
    $_SESSION['error_username'] ="Enter relevant user name";
    redirect();
}

else if(strlen($email)<5 || strpos($email,"@")==false){
    $_SESSION['error_username'] ="Enter relevant email";  
    redirect();
}

else if(strlen($subject)<5){
    $_SESSION['error_subject'] ="Enter relevant topic not less than 5 chars"; 
    redirect();
}

else if(strlen($subject)<5){
    $_SESSION['error_subject'] ="Enter relevant topic not less than 5 chars"; 
    redirect();
}

else{
    $to ="stacey@stacey.co.il";
    $subject ="=?utf-8?B?".base64_encode($subject)."?=";
    $headers="From: $email\r\nReply-to:  $email\r\nContent-type:text/plain; charset=urf-8\r\n";
    mail($to, $subject, $message, $headers);
    $_SESSION['successfull_mail'] ="Email successfully send!";
    redirect();
}
?>


