<?php


// Change this with your blog name and email address
$the_blogname   = 'Estudio Contable MTA';
$the_myemail 	= 'info@estudiocontablemta.com.ar';


if(isset($_POST['email'])){
        error_reporting(0);	
        $errorC = false;

        $the_email 		= $_POST['email'];
        $the_name 		= $_POST['yourname'];
        $the_message    = $_POST['message'];

        $the_phone 		= $_POST['phone'];
        $the_fax 	   	= $_POST['fax'];
        $the_company 	= $_POST['company'];
        $the_website 	= $_POST['website'];

        # want to add aditional fields? just add them to the form in template_contact.php,
        # you dont have to edit this file

        //added fields that are not set explicit like the once above are combined and added before the actual message
        $already_used = array('email','yourname','message','phone','fax','company','website','myblogname','tempcode','temp_url','ajax');
        $attach = '';

        foreach ($_POST as $key => $field)
        {
                if(!in_array($key,$already_used))
                {
                        $attach.= $key.": ".$field."<br /> \n";
                }
        }
        $attach.= "<br /> \n";

        if(!checkmymail($the_email))
        {
                $errorC = true;
                $the_emailclass = "error";
        }else{
                $the_emailclass = "valid";
                }

        if($the_message == "")
        {
                $errorC = true;
                $the_messageclass = "error";
        }else{
                $the_messageclass = "valid";
                }

        if($errorC == false)
        { 	
                $to      =  $the_myemail;
                $subject = "Nuevo mensaje de " . $the_blogname;
                $header  = 'MIME-Version: 1.0' . "\r\n";
                $header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $header .= 'From:'. $the_email  . " \r\n";

                $message1 = nl2br($the_message);

                if(!empty($the_name)) 		$the_name 		= "Nombre:  	$the_name <br/>";
                if(!empty($the_company)) 	$the_company 	= "Company: $the_company <br/>";
                if(!empty($the_phone)) 		$the_phone 		= "Phone:   $the_phone <br/>";
                if(!empty($the_fax)) 		$the_fax 		= "Fax:  	$the_fax <br/>";
                if(!empty($the_website)) 	$the_website 	= "Website: $the_website <br/>";

                $message = "
                Tiene un nuevo mensaje de la web! <br/>
                $the_name
                $the_company
                $the_phone
                $the_website

                $attach <br />

                Message: $message1 <br />";



                if(@mail($to,$subject,$message,$header)) $send = true; else $send = false;

                if(isset($_POST['ajax'])){

                if ($send)
                echo '<h3>Su mensaje ha sido enviado!</h3><div class="confirm">
                                <p class="textconfirm">Gracias por contactarnos.<br/>Le responderemos a la brevedad.</p>
                            </div>';
                else
                echo '<h3>Oops!</h3><div class="confirm">
                                <p class="texterror">hubo un error, por favor prueba de nuevo.</p>
                            </div>'; 

                }
        }
		
}
	
	
function checkmymail($mailadresse){
	$email_flag=preg_match("!^\w[\w|\.|\-]+@\w[\w|\.|\-]+\.[a-zA-Z]{2,4}$!",$mailadresse);
	return $email_flag;
}

?>