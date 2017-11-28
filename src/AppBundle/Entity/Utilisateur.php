<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="uti_utilisateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
    /**111
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_nom", type="string", length=255)
     */
    private $utiNom;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_prenom", type="string", length=255)
     */
    private $utiPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_pseudo", type="string", length=255, unique=true)
     */
    private $utiPseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_mail", type="string", length=255, unique=true)
     */
    private $utiMail;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_motDePasse", type="string", length=255)
     */
    private $utiMotDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="uti_rang", type="string", length=255)
     */
    private $utiRang;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utiNom
     *
     * @param string $utiNom
     *
     * @return Utilisateur
     */
    public function setUtiNom($utiNom)
    {
        $this->utiNom = $utiNom;

        return $this;
    }

    /**
     * Get utiNom
     *
     * @return string
     */
    public function getUtiNom()
    {
        return $this->utiNom;
    }

    /**
     * Set utiPrenom
     *
     * @param string $utiPrenom
     *
     * @return Utilisateur
     */
    public function setUtiPrenom($utiPrenom)
    {
        $this->utiPrenom = $utiPrenom;

        return $this;
    }

    /**
     * Get utiPrenom
     *
     * @return string
     */
    public function getUtiPrenom()
    {
        return $this->utiPrenom;
    }

    /**
     * Set utiPseudo
     *
     * @param string $utiPseudo
     *
     * @return Utilisateur
     */
    public function setUtiPseudo($utiPseudo)
    {
        $this->utiPseudo = $utiPseudo;

        return $this;
    }

    /**
     * Get utiPseudo
     *
     * @return string
     */
    public function getUtiPseudo()
    {
        return $this->utiPseudo;
    }

    /**
     * Set utiMail
     *
     * @param string $utiMail
     *
     * @return Utilisateur
     */
    public function setUtiMail($utiMail)
    {
        $this->utiMail = $utiMail;

        return $this;
    }

    /**
     * Get utiMail
     *
     * @return string
     */
    public function getUtiMail()
    {
        return $this->utiMail;
    }

    /**
     * Set utiMotDePasse
     *
     * @param string $utiMotDePasse
     *
     * @return Utilisateur
     */
    public function setUtiMotDePasse($utiMotDePasse)
    {
        $this->utiMotDePasse = $utiMotDePasse;

        return $this;
    }

    /**
     * Get utiMotDePasse
     *
     * @return string
     */
    public function getUtiMotDePasse()
    {
        return $this->utiMotDePasse;
    }

    /**
     * Set utiRang
     *
     * @param string $utiRang
     *
     * @return Utilisateur
     */
    public function setUtiRang($utiRang)
    {
        $this->utiRang = $utiRang;

        return $this;
    }

    /**
     * Get utiRang
     *
     * @return string
     */
    public function getUtiRang()
    {
        return $this->utiRang;
    }
}

