<?php

if( isset($_POST['sumbit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumner = $_POST['phonenumner'];
    $fromemail = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $mailTo = 'subhenduswainbanty1999@gmail.com';

    $subject = 'A New Mesage Received From' $firstname;

    $htmlContent = '<h2> Email Request Received</h2>
    <p> <b> Client Name :</b> '.$firstname ."" . $lastname.'</p>
    <p> <b> Phone Number :</b> '.$phonenumber.'</p>
    <p> <b> From Email :</b> '.$email.'</p>
    <p> <b> Gender :</b> '.$gender.'</p>
    <p> <b> Address :</b> '.$address.'</p>';

    $headers = "From: " .$firstname. "<" .$fromemail. ">";
    $headers = "MIME-Version: 1.0\r\n";
    $headersm = "Content-Type: text/html; charset=UTF-8\r\n";

    $result = ($mailTo,$subject,$htmlContent,$headers)

    if($result){
        $success ="The Message Was Sent Successfully";
    }else {
        $failed = "Error: Message Was Not Sent";
    }
}
?>