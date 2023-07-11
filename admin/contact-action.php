<?php

include('../conn_db.php');
//require "../classes/contact.class.php";
//$contact = new Contact();

if (isset($_POST['contact-submit'])) {
    
    // Datas from form
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $subject = $_POST['contact-subject'];
    $message = $_POST['contact-message'];
    $currenttime = date('Y-m-d H:i:s');
    $query = "INSERT INTO contact (name,email,subject,message,date,status)
        VALUES ('$name','$email','$subject','$message','$currenttime','1');";

    $result = $mysqli->query($query);

//    $contact->setContactName($name);
//    $contact->setContactEmail($email);
//    $contact->setContactSubject($subject);
//    $contact->setContactMessage($message);

    // $contact->addContactInformation();
    // exit;
    if ($result) {
        header("Location: ../contact.php?msg=contacted");
    }else{
        header("Location: ../contact.php");
    }
}
?>