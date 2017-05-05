<?php
    $rawJSON = stripslashes($_POST['input']);
    $data = json_decode($rawJSON, true);
    $subject = 'Denk Development Customer Email';
    $to = 'development@timodenk.com';
    $from = $data['Email-Address'];

    $content = '';
    $count = 0;
    // add all sent data to the contact string
    foreach ($data as $key => $value) {
    	$content .= $key . ': ';
    	
    	if (!is_array($value)) {
    		// no array
    		$content .= $value;
    	} else {
    		// array
    		for ($i=0; $i < count($value); $i++) { 
    			if ($i !== 0) $content .= '; ';
    			$content .= $value[$i];
    		}
    	}
    	$content .=  "\r\n";

        if (!empty($value)) {
            $count++;
        }
    }

    // no data passed
    if ($count < 1) {
        echo 'No data passed...';
        exit();
    }

    $headers =  'MIME-Version: 1.0' . "\r\n" .
	            'Content-type: text/plain; charset=utf-8' . "\r\n" .
	            'Content-Transfer-Encoding: quoted-printable' . "\r\n" .
	            'From: mail@timodenk.com' . "\r\n" .
	            'Reply-To: ' . $from . "\r\n" .
	            'X-Mailer: PHP/' . phpversion();
    
    echo mail($to, $subject, $content, $headers);
?>
