<?php
if(isset($_POST["email"])) {
    $headers = "From: maxyeh@gmail.com";
    $email_subject = "Thank You for Signing Up for Our Email List!";
    
    function failed($error) {
        echo "We are sorry, but there was some error while submitting your form. ";
        echo "The errors that are found are below. <br /><br />";
        echo $error. "<br /><br />";
        echo "Please find the errors, fix them, and resubmit the form. Thank you!. <br /><br />";
        die();
    }
    
    if(!isset($_POST["email"])) {
        failed("We are sorry, but there seems to be no email submitted");
    }
    
    $email_to = $_POST["email"];
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
    if(!preg_match($email_exp, $email_to)) {
        $error_message = "The email address appears to not be valid. <br />";
    }
    
    if(strlen($error_message > 0)) {
        failed($error_message);
    }
    
    $email_message = "Testing email form currently. Will be happy if this thing works. Arigato Gozayamas. \n \n Hi.";
    
    mail($email_to, $email_subject, $email_message, )
}

?>