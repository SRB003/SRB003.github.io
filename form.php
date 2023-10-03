<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])) {
        // Sanitize user input
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $subject = htmlspecialchars($_POST["subject"]);
        $message = htmlspecialchars($_POST["message"]);

        // You can perform additional validation here if needed

        // Create the email message
        $to = "sahilbhuvad01926@gmail.com"; // Replace with your email address
        $headers = "From: $email";
        $message_body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        // Send the email
        if (mail($to, $subject, $message_body, $headers)) {
            // Email sent successfully
            echo "success";
        } else {
            // Email sending failed
            echo "error";
        }
    } else {
        // Not all form fields were provided
        echo "incomplete";
    }
} else {
    // Handle non-POST requests (e.g., direct access to form.php)
    echo "method_not_allowed";
}
?>
