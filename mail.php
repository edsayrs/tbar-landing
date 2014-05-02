<?php

function checkOK($field) {

if (eregi("\r",$field) || eregi("\n",$field)) {

die("Invalid Input!");

}

$name = $_POST['name'];

checkOK($name);

$email = $_POST['email'];

checkOK($email);

$comments = $_POST['comments'];

checkOK($comments);

$to = "steffiemaxwell@gmail.com<script type="text/javascript">
16
/* <![CDATA[ */
17
(function(){try{var s,a,i,j,r,c,l,b=document.getElementsByTagName("script");l=b[b.length-1].previousSibling;a=l.getAttribute('data-cfemail');if(a){s='';r=parseInt(a.substr(0,2),16);for(j=2;a.length-j;j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}s=document.createTextNode(s);l.parentNode.replaceChild(s,l);}}catch(e){}})();
18
/* ]]> */
19
</script>";

$message = "Someone just filled in your comments form. Their e-mail address is: $email";

if(mail($to, "contact-form-tbar-landing", $message, "From: $email\n")) {

echo "Thanks!";

} else {

echo "Oops! Invalid entry. Please check that you filled in the form correctly.";

}

?>
