<?php

class Zaposlenik
{
    protected $id;
    protected $ime;
    protected $prezime;
    protected $datumRodenja;
    protected $spol;
    protected $iznosMjesecnihPrimanja;
    protected static $popisSvihZaposlenika = array();

    function __construct($id, $ime, $prezime, $datumRodenja, $spol, $iznosMjesecnihPrimanja)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->datumRodenja = $datumRodenja;
        $this->spol = $spol;
        $this->iznosMjesecnihPrimanja = $iznosMjesecnihPrimanja;
        return Zaposlenik::$popisSvihZaposlenika[]= $this;

    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * @param mixed $ime
     */
    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    /**
     * @return mixed
     */
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * @param mixed $prezime
     */
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }

    /**
     * @return mixed
     */
    public function getDatumRodenja()
    {
        return $this->datumRodenja;
    }

    /**
     * @param mixed $datumRodenja
     */
    public function setDatumRodenja($datumRodenja)
    {
        $this->datumRodenja = $datumRodenja;
    }

    /**
     * @return mixed
     */
    public function getSpol()
    {
        return $this->spol;
    }

    /**
     * @param mixed $spol
     */
    public function setSpol($spol)
    {
        $this->spol = $spol;
    }

    /**
     * @return mixed
     */
    public function getIznosMjesecnihPrimanja()
    {
        return $this->iznosMjesecnihPrimanja;
    }

    /**
     * @param mixed $iznosMjesecnihPrimanja
     */
    public function setIznosMjesecnihPrimanja($iznosMjesecnihPrimanja)
    {
        $this->iznosMjesecnihPrimanja = $iznosMjesecnihPrimanja;
    }

}


while( true ) {

    prikaziIzbornik();

    $choice = trim(fgets(STDIN));

    if ($choice == 5) {

        break;
    }


    switch ($choice) {

        case 1:
            {


                break;
            }
        case 2:
            {
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
                break;
            }
        default:
            {
                echo;
            }
    }
}
function prikaziIzbornik() {

echo "************ Registar zaposlenika ******************\n";
echo "1 - Pregled zaposlenika\n";
echo "2 - Unos novog zaposlenika\n";
echo "3 - Promjena podataka postojećem zaposleniku\n";
echo "4 - Brisanje zaposlenika\n";
echo "5 - Statistika\n";
echo "************ Registar zaposlenika ******************\n";
echo "Odaberite brojeve od 1 do 5:";
}