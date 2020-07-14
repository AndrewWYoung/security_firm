<?php

    if(isset($_POST['submit'])) {
        $visitor_name    = $_POST['name'];
        $visitor_email   = $_POST['email'];
        $visitor_message = $_POST['message'];

        $to              = "hello@andrewyoung.dev";
        $email_subject   = "New Form Submission";
        $headers         = "From: $visitor_email";
        $email_body      = "You have received an email from: ".$visitor_name.".\n\n".$visitor_message;

        mail($to, $email_subject, $email_body, $headers);
        header("Location: index.html");
    }

?>