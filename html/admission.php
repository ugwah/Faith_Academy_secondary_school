<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "fa.owerri@ifcww.org"; // 🔴 CHANGE TO SCHOOL EMAIL
    $subject = "New Online Admission Application - Faith Academy";

    $message = "
    NEW ADMISSION APPLICATION

    Student Name: " . $_POST['student_name'] . "
    Date of Birth: " . $_POST['dob'] . "
    Gender: " . $_POST['gender'] . "
    Class Applying For: " . $_POST['class'] . "

    Parent/Guardian Name: " . $_POST['parent_name'] . "
    Phone Number: " . $_POST['phone'] . "
    Email Address: " . $_POST['email'] . "
    Home Address: " . $_POST['address'] . "

    Previous School: " . $_POST['previous_school'] . "

    Additional Information:
    " . $_POST['message'];

    $headers = "From: Faith Academy Website <noreply@faithacademy.com>";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: success.html");
    } else {
        echo "Error sending application. Please try again.";
    }
}
?>
