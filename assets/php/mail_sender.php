<?php

// raccolta dati dal form
$data = $_POST['data'];
$ora = $_POST['ora'];
$persone = $_POST['persone'];
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$telefomo = $_POST['telefono'];
$richieste = $_POST['richieste'];

// correzione caratteri speciali messaggio
$message = stripslashes(html_entity_decode("Nome: ".$nome." ".$cognome."\n".'Data: '.$data."\n".'Ora: '.$ora."\n".'N. Persone: '.$persone."\n".'E-mail: '.$email."\n".'Telefono: '.$telefono."\n\n".'Richieste: '."\n".$richieste, ENT_QUOTES, 'UTF-8'));

// dati mail a trulli
//$to = 'info@trullodellerose.it';
$to = 'verdeandrea@gmail.com';
$subject = 'Prenotazione La Crostaceria (invio da sito)';
$headers .= 'From:'.$nome.' '.$cognome.' <'.$email.'>'."\r\n".'X-Mailer: php';
 

// invio mail a trulli
if (mail($to, $subject, $message, $headers)) { 
	echo 'ok';
} else {
	echo 'no';
}
// invio mail a cliente
$a = $_POST['email'];


$oggetto = 'La Crostaceria -  Conferma invio prenotazione';
$messaggio = utf8_decode(stripslashes(html_entity_decode('Grazie '.$nome.' '.$cognome.'.'."\n".'Abbiamo ricevuto la tua richiesta di prenotazione. Risponderemo il prima possibile.'."\n\n".'A presto.', ENT_NOQUOTES, 'UTF-8'))."\n\n\n".'Riportiamo sotto le informazioni contenuto nel messaggio che ci hai inviato:'."\n\n".$message);
$intestazione = 'From: La Crostaceria <'.$to.'>'."\r\n".'X-Mailer: php';
		

mail($a, $oggetto, $messaggio, $intestazione);
?>