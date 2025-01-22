<?php

function sendMail($params = array())
{
	require_once(dirname(__FILE__).DIRECTORY_SEPARATOR."includes/PHPMailerAutoload.php");
	
	$mail = new PHPMailer;
	$mail->setFrom($_REQUEST['email']);
	$mail->AddReplyTo($_REQUEST['email']);
	$mail->addAddress('charity@alisthealthcoaching.com', 'McLean'); // Your email here
	// Eneter your lead capure email id above.
		// For adding second email
	//$mail->addAddress('responsivelandingpagedesign@gmail.com',  'Mousumi');

	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->FromName = $_REQUEST['first_name'];
	$mail->Subject = 'Client Enquiry';

	$row_part = '';
	
	foreach($params as $key=>$value)
	{
		if($key == 'mode' || $key == 'SUBMIT')
		{
			continue;
		}

		$key_arr = array();

		$key_arr = explode('_', $key);

		$row_part .= "<tr>
                <td>
                    ".ucfirst($key_arr[0])." ".ucfirst($key_arr[1]).": 
                </td>
                <td>
                	".$value."                	
                </td>
            </tr>
            ";
	}

	
	$mail->Body = "
	<html>
    	<head>
        	<title>HTML Template</title>
    	</head>
    	<body>
        	<table>
            ".$row_part."
        	</table>
    	</body>
	</html>";
	;

	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
		exit;
	} else {
	    return true;
	}
}
?>