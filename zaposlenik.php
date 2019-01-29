<?php

class Zaposlenik
{
    protected $id;
    protected $ime;
    protected $prezime;
    protected $datumRodenja;
    protected $spol;
    protected $iznosMjesecnihPrimanja;

    public function __construct($id, $ime, $prezime, $datumRodenja, $spol, $iznosMjesecnihPrimanja)
    {
        $this->id = $id;
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->datumRodenja = $datumRodenja;
        $this->spol = $spol;
        $this->iznosMjesecnihPrimanja = $iznosMjesecnihPrimanja;


    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;

        if (preg_match('/^[1-9][0-9]*$/', $id)) {

            echo "Broj je ispravan";
        } else {

            echo " Molimo unesite ispravan broj";
        }
    }
    public function getIme()
    {
        return $this->ime;
    }
    public function setIme($ime)
    {
        $this->ime = $ime;
    }
    public function getPrezime()
    {
        return $this->prezime;
    }
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }
    public function getDatumRodenja()
    {
        return $this->datumRodenja;
    }
    public function setDatumRodenja($datumRodenja)
    {
        $this->datumRodenja = $datumRodenja;
    }
    public function getSpol()
    {
        return $this->spol;
    }
    public function setSpol($spol)
    {
        $this->spol = $spol;
    }
    public function getIznosMjesecnihPrimanja()
    {
        return $this->iznosMjesecnihPrimanja;
    }
    public function setIznosMjesecnihPrimanja($iznosMjesecnihPrimanja)
    {
        $this->iznosMjesecnihPrimanja = $iznosMjesecnihPrimanja;
    }
}
