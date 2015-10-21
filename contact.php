<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
//$field_message = $_POST['cf_message'];

$mail_to = 'wojtek.sasiela@gmail.com';
$subject = 'Wiadomość od uczestnika '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
//$body_message .= 'Message: '.$field_message;
$body_message .= 'Wiadomość: Chciałbym/ałabym dołączyć do Waszej konferencji. Pozdrawiam :)';


$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);
//$mail_status = mail("wojtek.sasiela@gmail.com", "temat wiadomosci", "tresc wiadomosci");

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Dziekujemy za wiadomosc. Skontaktujemy sie wkrotce.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Nie udalo sie wyslać wiadomości. prosze wyslij recznie na konferencja.ss@gmail.com');
		window.location = 'index.html';
	</script>
<?php
}
error_reporting(E_ALL);
ini_set('display_errors', 1); 
?>