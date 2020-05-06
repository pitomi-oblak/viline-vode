<?php

$name_error = $email_error = $message_error = "";
$name = $email = $message = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required. &nbsp";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name_error = "Only letters and white space allowed. &nbsp";
        }
    }

    if (empty($_POST["email"])) {
        $email_error = "Email is required.";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format.";
        }
    }

    if (empty($_POST["message"])) {
        $message_error = "Massage field shouldn't be empty.";
    } else {
        $message = test_input($_POST["message"]);
    }

    if ($name_error == '' and $email_error == '' and $message_error == '' ){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
            $message_body .=  "$key: $value\n";
        }

//        $fullMessage = 'Name: ' . $name ;
//        $fullMessage .= 'Email: ' . $email;
//        $fullMessage .= $message;
        $to = 'amina.tukic90@gmail.com,amina.tukic@bild-studio.net';
        $subject = 'Viline Vode - Website Contact Request';
        if (mail($to, $subject, $message_body)){
            $success = "Message sent, thank you for contacting us!";
            $name = $email = $message = '';
//            header("Location: http://vilinevode.local.bildhosting.me");
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}