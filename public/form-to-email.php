<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if(isset($_POST['submit'])){
    $to = "hspencer1100@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $company = $_POST['company'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " from " . $company . " wrote the following:" . "\n\n" . $_POST['text'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", I will be in contact with you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>