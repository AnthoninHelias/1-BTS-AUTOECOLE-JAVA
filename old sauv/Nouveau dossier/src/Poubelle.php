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

class Poubelle
{
    private  string $matricule;
    private int $capacite;
    private string $type;
    private object $immeuble;

    /**
     * @param string $matricule
     * @param int $capacite
     * @param string $type
     * @param object $immeuble
     */
    public function __construct(object $immeuble,string $matricule, int $capacite, string $type)
    {
        $this->immeuble = $immeuble;
        $this->matricule = $matricule;
        $this->capacite = $capacite;
        $this->type = $type;

    }

    /**
     * @return object
     */
    public function getImmeuble(): object
    {
        return $this->immeuble;
    }

    /**
     * @param object $immeuble
     */
    public function setImmeuble(object $immeuble): void
    {
        $this->immeuble = $immeuble;
    }

    /**
     * @return string
     */
    public function getMatricule(): string
    {
        return $this->matricule;
    }

    /**
     * @param string $matricule
     */
    public function setMatricule(string $matricule): void
    {
        $this->matricule = $matricule;
    }

    /**
     * @return int
     */
    public function getCapacite(): int
    {
        return $this->capacite;
    }

    /**
     * @param int $capacite
     */
    public function setCapacite(int $capacite): void
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



}