<?php 
// the two functions required by the above code
function verifyEmail ($testString) { // checks for a well-formed email address - i.e. in format  someTextAndNumbers@someTextAndNumbers.2-4 characters
	return (eregi("^([[:alnum:]]|_|\.|-)+@([[:alnum:]]|\.|-)+(\.)([a-z]{2,6})$", $testString)); //returns 1 (TRUE) if email well-formatted
	}

/// for security, you should always write to a file in a folder that is above the root folder of youur site
function writeToFile ($email) {  // writes the email address and time to a flat file - creates the file if it doesn't already exist
	$dateNTime= date("F j Y H:i"); // gets the current date and time in 3 14 2009  3:30 pm format  see http://us2.php.net/date for date format info
	$form_data = $email . "\t" . $dateNTime . "\n"; //assembles the email,  a tab, the date and time, and a line break
	$myPointer = fopen(../../../"form_data/form_data_file.txt", "r+"); //open a file (creates one first if needed) // FOR DEMO ONLY - this is not secure - create the file manually and write with r+ not a
	fputs ($myPointer, $form_data); //writes to the file
	fclose($myPointer); //closes the file
}
?>