<?php
/*
 * Ce fichier fait partie du php-tp-oop-poubelle-correction.
 *
 * (c) redbull
 *
 * Pour les informations complètes sur les droits d'auteur et la licence,
 * veuillez consulter le fichier LICENSE qui a été distribué avec ce code source.
 */

namespace Poubelle;

class Immeuble
{
    private string $adresse;
    private string $codePostal;

    /**
     * @param string $adresse
     * @param string $departement
     */
    public function __construct(string $adresse, string $codePostal)
    {
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * @param string $codePostal
     */
    public function setCodePostal(string $codePostal): void
    {
        $this->codePostal = $codePostal;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    public function addPoubelle(Poubelle $param)
    {

    }

    public function getPoubelleForMatricule(string $string)
    {

    }
   public function getNbPoubelle()
   {/*
       $poubelle=0;
       foreach (Poubelle::class){
           $poubelle=$poubelle+1;
       }
       return $poubelle;*/
   }
   public function getPoubelle()
   {
        return Poubelle::class;
   }

    /**
     * @return string
     */



}