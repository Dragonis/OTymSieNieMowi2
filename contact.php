<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
$field_name = $_POST['of_name'];
$field_surname = $_POST['of_surname'];
$field_universitet = $_POST['of_universitet'];
$field_adress = $_POST['of_adress'];
$field_phone = $_POST['of_phone'];
$field_email = $_POST['of_email'];
$field_message = $_POST['of_message'];
$field_czyBiernyUdzial = $_POST['of_czyBiernyUdzial'];
$field_czyCzynnyUdzial = $_POST['of_czyCzynnyUdzial'];
$field_Konferencja = $_POST['of_Konferencja'];
$field_Szkolenie = $_POST['of_Szkolenie'];
$field_Integracja = $_POST['of_integracja'];
$field_WieczorIntegracyjny04 = $_POST['of_WieczorIntegracyjny04'];
$field_WieczorIntegracyjny05 = $_POST['of_WieczoIntegracyjny05'];
$field_Asystent = $_POST['of_Asystent'];
$field_SystemFM = $_POST['of_SystemFM'];
$field_SpeechOfText = $_POST['of_SpeechOfText'];
$field_PetlaIndukcyjna = $_POST['of_PetlaIndukcyjna'];
$field_TlumaczMigowy = $_POST['of_TlumaczMigowy'];
$field_Certyfikat = $_POST['of_Certyfikat'];

$mail_to = 'konferencja.ss@gmail.com';
$subject = 'Wiadomość od uczestnika '.$field_name . ' ' . $field_surname;

$body_message = 'Od: '.$field_name.' '. $field_surname."\n";
$body_message .= 'Uczelnia: '.$field_universitet."\n";
$body_message .= 'Adres: '.$field_adress."\n";
$body_message .= 'Telefon: '.$field_phone."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Czy bierny udzial: '.$field_czyBiernyUdzial."\n";
$body_message .= 'Czy czynny udzial: '.$field_czyCzynnyUdzial."\n";
$body_message .= 'Konferencja: '.$field_Konferencja."\n";
$body_message .= 'Szkolenie: '.$field_Szkolenie."\n";
$body_message .= 'Integracja: '.$field_Integracja."\n";
$body_message .= 'WieczorIntegracyjny04: '.$field_WieczorIntegracyjny04."\n";
$body_message .= 'WieczorIntegracyjny05: '.$field_WieczorIntegracyjny05."\n";
$body_message .= 'Asystent: '.$field_Asystent."\n";
$body_message .= 'SystemFM: '.$field_SystemFM."\n";
$body_message .= 'SpeechOfText: '.$field_SpeechOfText."\n";
$body_message .= 'PetlaIndukcyjna: '.$field_PetlaIndukcyjna."\n";
$body_message .= 'Tlumacz migowy: '.$field_TlumaczMigowy."\n";
$body_message .= 'Certyfikat: '.$field_Certyfikat."\n";
//$body_message .= 'Temat przemówienia: '.$field_message;
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