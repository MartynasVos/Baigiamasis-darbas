<?php
if (isset($_POST['volunteer-message'])) {
    if(isset($_POST['first_name']))
    $first_name = trim($_POST['first_name']);
    if(isset($_POST['last_name']))
    $last_name = trim($_POST['last_name']);
    if(isset($_POST['email']))
    $email = trim($_POST['email']);
    if(isset($_POST['message']))
    $message = trim($_POST['message']);

    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($message)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            include 'db.php';
            mysqli_query($mysqli, "INSERT INTO volunteers(first_name, last_name, email, message)
            VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[message]')");
        } 
    }
}

if (isset($_POST['subscribe'])) {
    if(isset($_POST['email']))
    $email = trim($_POST['email']);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        include 'db.php';
        mysqli_query($mysqli, "INSERT INTO subscribers(email)
        VALUES('$_POST[email]')");
    } 
}

if (isset($_POST['contact'])) {
    if(isset($_POST['first_name']))
    $first_name = trim($_POST['first_name']);
    if(isset($_POST['last_name']))
    $last_name = trim($_POST['last_name']);
    if(isset($_POST['email']))
    $email = trim($_POST['email']);
    if(isset($_POST['subject']))
    $subject = trim($_POST['subject']);
    if(isset($_POST['message']))
    $message = trim($_POST['message']);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        include 'db.php';
        mysqli_query($mysqli, "INSERT INTO contacts(first_name, last_name, email, subject, message)
        VALUES('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[subject]','$_POST[message]')");
    } 
}