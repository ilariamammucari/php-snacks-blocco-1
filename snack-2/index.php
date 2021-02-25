<?php 
// ! Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
// !    1. name sia più lungo di 3 caratteri,
// !    2. mail contenga un punto e una chiocciola
// !    3. age sia un numero.
// !   Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.

$nome = $_GET['nome'];
$mail = $_GET['mail'];
$eta = $_GET['eta'];

$accesso = 'Inserisci un nome con più di 3 lettere';
if ( strlen($nome) > 3 ){
    $accesso = 'Inserisci un\'email corretta. Che contenga un "@" e un punto "."';
    if ( strpos($mail, '@') && strpos($mail, '.') ){
        $accesso = 'Inserisci la tua età';
        if ( is_numeric($eta) ) {
            $accesso = 'Accesso riuscito';
        }
    }
}
echo $accesso;
?>