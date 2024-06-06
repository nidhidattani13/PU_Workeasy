<?php

$message = '';


if (isset($_POST["submit"])) {
    $message = '
		<h3 align="center">Enquiry For Book A Tour</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			<tr>
				<td width="30%">Name</td>
				<td width="70%">' . $_POST["name"] . '</td>
			</tr>
			<tr>
				<td width="30%">Email</td>
				<td width="70%">' . $_POST["email"] . '</td>
			</tr>
			<tr>
				<td width="30%">Number</td>
				<td width="70%">' . $_POST["phone"] . '</td>
			</tr>
			<tr>
				<td width="30%">Subject</td>
				<td width="70%">' . $_POST["subject"] . '</td>
			</tr>
			<tr>
				<td width="30%">Message</td>
				<td width="70%">' . $_POST["message"] . '</td>
			</tr>
		</table>
	';

    require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                                //Sets Mailer to send message using SMTP


// ADD YOUR DETAILS HERE
    $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '465';                                //Sets the default SMTP server port
    $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'workeasy.enquiry.send@gmail.com';                    //Sets SMTP username
    $mail->Password = 'kvujkjlsbfwmamoq';                    //Sets SMTP password
    $mail->SMTPSecure = 'ssl';                            //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = 'shreel.faldu110427@marwadiuniversity.ac.in';                    //Sets the From email address for the message
    $mail->FromName = 'Work Easy';                //Sets the From name of the message
    $mail->AddAddress('dattaninidhi37@gmail.com', 'PU');        //Adds a "To" address
// ADD YOUR DETAILS HERE
    
    $mail->WordWrap = 50;                            //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);                            //Sets message type to HTML
    // $mail->AddAttachment($path);                    //Adds an attachment from a path on the filesystem
    $mail->Subject = 'Enquiry';                //Sets the Subject of the message
    $mail->Body = $message;                            //An HTML or plain text message body
    if ($mail->Send())                                //Send an Email. Return true on success or false on error
    {
        $message = '<div class="alert alert-success">Enquiry Successfully Submitted</div>';
        header("Location: thank.php");
        // unlink($path);
    } else {
        $message = '<div class="alert alert-danger">There is an Error</div>';
    }
}  