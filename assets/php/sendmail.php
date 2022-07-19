<?php

	$name = @trim(stripslashes($_POST['name'])); 
	$email = @trim(stripslashes($_POST['email']));  
	$subject = @trim(stripslashes($_POST['subject']));  
	$message = @trim(stripslashes($_POST['message'])); 

	$email_from = $email;
	$email_to = 'abhipraechoudhury@gmail.com'; //replace with your email

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

	$headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
	
    $mail_status = mail($email_to, $subject, $body, $headers);

    if ($mail_status) { ?>
        <script language="javascript" type="text/javascript">
            // Print a message
            alert('Thank you for the message. We will contact you shortly.');
            // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
            window.location = 'http://abhipraechoudhury.esy.es';
        </script>
    <?php
    }
    else { ?>
        <script language="javascript" type="text/javascript">
            // Print a message
            alert('Message failed. Please, send an email to abhipraechoudhury@gmail.com');
            // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
            window.location = 'http://abhipraechoudhury.esy.es';
        </script>
    <?php
    }
?>