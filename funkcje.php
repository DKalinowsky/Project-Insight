<?php
function zabezpieczenie($data)
{
    $data = trim($data); //usuwanie białych znaków z początku i końca ciągu
    $data = stripslashes($data); // usuwanie z ciągu znaku \
    $data = htmlspecialchars($data); //usuwanie z ciągu znaków specjalnych HTML
    return $data;
}
?>
<?php
class Osoba {
 public $login;
 public $haslo;
 public $imieNazwisko;
}
$osoba1 = new Osoba;
$osoba1->login = "jankowalski";
$osoba1->password = "janek007";
$osoba1->imieNazwisko = "Jan Kowalski";
$osoba2 = new Osoba;
$osoba2->login = "anianowak";
$osoba2->password = "ania008";
$osoba2->imieNazwisko = "Anna Nowak";
?>