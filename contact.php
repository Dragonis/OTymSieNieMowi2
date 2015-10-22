<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to = 'konferencja.ss@gmail.com';
$subject = 'Wiadomość od uczestnika '.$field_name;

$body_message = 'Od: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Temat przemówienia: '.$field_message;
//$body_message .= 'Wiadomość: Chciałbym/ałabym dołączyć do Waszej konferencji. Pozdrawiam :)';


//$headers = 'From: '.$field_email."\r\n";
//$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message);
//$mail_status = mail($mail_to, $subject, $body_message, $headers);
//$mail_status = mail("wojtek.sasiela@gmail.com", "temat wiadomosci", "tresc wiadomosci");


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Dziękujemy za wiadomość. Skontaktujemy się wkrótce.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Nie udało się wysłać wiadomości. prosze wyślij ją ręcznie na adres konferencja.ss@gmail.com');
		window.location = 'index.html';
	</script>
<?php
}
error_reporting(E_ALL);
ini_set('display_errors', 1); 
?>