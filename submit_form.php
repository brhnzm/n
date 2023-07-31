<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];

    // Email details
    $to = "borhannezami@gmail.com"; // Replace with your email address
    $subject = "Form Submission";
    $message = "Name: " . $name . "\nNumber: " . $number . "\nEmail: " . $email;

    // Send the email
    $headers = "From: mail2borhan@gmail.com"; // Replace with a valid sender email address
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

