<?php
if(isset($_POST)){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

//send email
    mail("igor.djuric011@gmail.com", "This is an email from:" .$email, $message);
}
?>