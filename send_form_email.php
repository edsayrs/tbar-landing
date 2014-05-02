<!DOCTYPE php>
<!--I used http://www.123contactform.com/simple-php-contact-form.html as a reference-->
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST"> 
    <input type="hidden" name="action" value="submit"> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    {  
    $email=$_REQUEST['email']; 
    if (($email=="")) 
        { 
        echo "All fields are required, please try again."; 
        } 
    else{         
        $from="From: <$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("steffiemaxwell@gmail.com", $subject, $from); 
        echo "Thank you."
        } 
    }   
?> 