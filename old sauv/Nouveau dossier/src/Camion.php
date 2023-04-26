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

class Camion
{
    private string $nom;
    private string $capacite;
    private string $type;

    /**
     * @param string $nom
     * @param string $capacite
     * @param string $type
     */
    public function __construct(string $nom, string $capacite, string $type)
    {
        $this->nom = $nom;
        $this->capacite = $capacite;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getCapacite(): string
    {
        return $this->capacite;
    }

    /**
     * @param string $capacite
     */
    public function setCapacite(string $capacite): void
    {
        $this->capacite = $capacite;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function addPoubelle($getPoubelleForMatricule)
    {

    }

}