<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];



    
    $to = "sahilbhuvad01926@gmail.com"; 
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Subject: $sub\n";
    $messageBody .= "Message:\n$message\n";

    
     if (mail($to, $subject, $messageBody)) {
        
        echo '<script>';
        echo 'alert("Thank you! Your submission has been received!");';
        echo 'window.history.back();';
        echo '</script>';
    } else {
       
        echo '<script>';
        echo 'alert("Oops! Something went wrong while submitting the form.");';
        echo 'window.history.back();';
        echo '</script>';
    }
}
?>
