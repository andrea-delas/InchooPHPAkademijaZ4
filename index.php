
<?php
require "zaposlenik.php";

$popisZaposlenika = [];

while (true)
{

prikaziIzbornik();

$choice = trim(fgets(STDIN));


switch ($choice)
{

        case 1:
            {
                pregledZaposlenika($popisZaposlenika);

                break;
            }

        case 2:
            {
                echo "Upišite sve potrebne podatke: \n";
                $popisZaposlenika[] = unosNovogZaposlenika($popisZaposlenika);

                break;
            }
        case 3:
            {
                break;
            }
        case 4:
            {
                break;
            }
        case 5:
            {
                prikaziPodIzbornik();
                $choice = trim(fgets(STDIN));

            }
        default:
            {

            }
    }
}
function prikaziIzbornik()
{

    echo "************ Registar zaposlenika ******************\n";
    echo "1 - Pregled zaposlenika\n";
    echo "2 - Unos novog zaposlenika\n";
    echo "3 - Promjena podataka postojećem zaposleniku\n";
    echo "4 - Brisanje zaposlenika\n";
    echo "5 - Statistika\n";
    echo "************ Registar zaposlenika ******************\n";
    echo "Odaberite brojeve od 1 do 5:";
}
function unosNovogZaposlenika ()
{

    echo "Unesite ID zaposlenika: ";
    $id = trim(fgets(STDIN));

    echo "Unesite ime zaposlenika: ";
    $ime = trim(fgets(STDIN));

    echo "Unesite prezime zaposlenika: ";
    $prezime = trim(fgets(STDIN));

    echo "Unesite datum rođenja zaposlenika: ";
    $datumRodenja = trim(fgets(STDIN));

    echo "Unesite spol zaposlenika: ";
    $spol = trim(fgets(STDIN));

    echo "Unesite iznos mjesečnih primanja zaposlenika: ";
    $iznosMjesecnihPrimanja = trim(fgets(STDIN));

    $p[] = new Zaposlenik($id, $ime, $prezime, $datumRodenja, $spol, $iznosMjesecnihPrimanja);


}

function pregledZaposlenika($array)

{
    echo "*************************************************\n";
    for ($i = 0; $i < count($array); $i++) {
        echo "ID: " . $array[$i]->getId() . "\n";
        echo "IME: " . $array[$i]->getIme() . "\n";
        echo "PREZIME: " . $array[$i]->getPrezime() . "\n";
        echo "DATUM ROĐENJA: " . $array[$i]->getDatumRodenja() . "\n";
        echo "SPOL: " . $array[$i]->getSpol() . "\n";
        echo "MJESEČNA PRIMANJA: " . $array[$i]->getiznosMjesecnihPrimanja() . "\n";
        echo "*************************************************\n";
    }
}

function prikaziPodIzbornik()
{

    echo "************ Statistika zaposlenika ******************\n";
    echo "1 - Ukupna starost\n";
    echo "2 - Prosječna starost\n";
    echo "3 - Ukupna primanja\n";
    echo "4 - Prosječna primanja\n";
    echo "************ Statistika zaposlenika ******************\n";
    echo "Odaberite brojeve od 1 do 4:";

}


