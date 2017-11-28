<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="com_commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="com_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="com_commentaire", type="string", length=255)
     */
    private $comCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="com_reponse", type="string", length=255, nullable=true)
     */
    private $comReponse;

    /**
     * @var int
     *
     * @ORM\Column(name="com_art_id", type="integer")
     */
    private $comArtId;

    /**
     * @var int
     *
     * @ORM\Column(name="com_uti_id", type="integer")
     */
    private $comUtiId;


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
     * Set comCommentaire
     *
     * @param string $comCommentaire
     *
     * @return Commentaire
     */
    public function setComCommentaire($comCommentaire)
    {
        $this->comCommentaire = $comCommentaire;

        return $this;
    }

    /**
     * Get comCommentaire
     *
     * @return string
     */
    public function getComCommentaire()
    {
        return $this->comCommentaire;
    }

    /**
     * Set comReponse
     *
     * @param string $comReponse
     *
     * @return Commentaire
     */
    public function setComReponse($comReponse)
    {
        $this->comReponse = $comReponse;

        return $this;
    }

    /**
     * Get comReponse
     *
     * @return string
     */
    public function getComReponse()
    {
        return $this->comReponse;
    }

    /**
     * Set comArtId
     *
     * @param integer $comArtId
     *
     * @return Commentaire
     */
    public function setComArtId($comArtId)
    {
        $this->comArtId = $comArtId;

        return $this;
    }

    /**
     * Get comArtId
     *
     * @return int
     */
    public function getComArtId()
    {
        return $this->comArtId;
    }

    /**
     * Set comUtiId
     *
     * @param integer $comUtiId
     *
     * @return Commentaire
     */
    public function setComUtiId($comUtiId)
    {
        $this->comUtiId = $comUtiId;

        return $this;
    }

    /**
     * Get comUtiId
     *
     * @return int
     */
    public function getComUtiId()
    {
        return $this->comUtiId;
    }
}

