<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Art_article
 *
 * @ORM\Table(name="art_article")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Art_articleRepository")
 */
class Art_article
{
    /**
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
     * @ORM\Column(name="art_titre", type="string", length=255)
     */
    private $artTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="art_contenu", type="string", length=255)
     */
    private $artContenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="art_date", type="datetime")
     */
    private $artDate;

    /**
     * @var int
     *
     * @ORM\Column(name="art_type_id", type="integer")
     */
    private $artTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="art_uti_id", type="integer")
     */
    private $artUtiId;


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
     * Set artTitre
     *
     * @param string $artTitre
     *
     * @return Art_article
     */
    public function setArtTitre($artTitre)
    {
        $this->artTitre = $artTitre;

        return $this;
    }

    /**
     * Get artTitre
     *
     * @return string
     */
    public function getArtTitre()
    {
        return $this->artTitre;
    }

    /**
     * Set artContenu
     *
     * @param string $artContenu
     *
     * @return Art_article
     */
    public function setArtContenu($artContenu)
    {
        $this->artContenu = $artContenu;

        return $this;
    }

    /**
     * Get artContenu
     *
     * @return string
     */
    public function getArtContenu()
    {
        return $this->artContenu;
    }

    /**
     * Set artDate
     *
     * @param \DateTime $artDate
     *
     * @return Art_article
     */
    public function setArtDate($artDate)
    {
        $this->artDate = $artDate;

        return $this;
    }

    /**
     * Get artDate
     *
     * @return \DateTime
     */
    public function getArtDate()
    {
        return $this->artDate;
    }

    /**
     * Set artTypeId
     *
     * @param integer $artTypeId
     *
     * @return Art_article
     */
    public function setArtTypeId($artTypeId)
    {
        $this->artTypeId = $artTypeId;

        return $this;
    }

    /**
     * Get artTypeId
     *
     * @return int
     */
    public function getArtTypeId()
    {
        return $this->artTypeId;
    }

    /**
     * Set artUtiId
     *
     * @param integer $artUtiId
     *
     * @return Art_article
     */
    public function setArtUtiId($artUtiId)
    {
        $this->artUtiId = $artUtiId;

        return $this;
    }

    /**
     * Get artUtiId
     *
     * @return int
     */
    public function getArtUtiId()
    {
        return $this->artUtiId;
    }
}

