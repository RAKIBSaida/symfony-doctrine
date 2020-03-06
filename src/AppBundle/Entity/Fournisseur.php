<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fournisseur
 *
 * @ORM\Table(name="Fournisseur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FournisseurRepository")
 */
class Fournisseur
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
     * @ORM\Column(name="name_fournisseur", type="string", length=25)
     */
    private $nameFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="mail_custumer", type="string", length=255)
     */
    private $mailCustumer;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_fournisseur", type="string", length=15)
     */
    private $phoneFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_fournisseur", type="string", length=255)
     */
    private $adressFournisseur;
 /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="fournisseur")
     */
    private $products_fournisseur;


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
     * Set nameFournisseur
     *
     * @param string $nameFournisseur
     *
     * @return Fournisseur
     */
    public function setNameFournisseur($nameFournisseur)
    {
        $this->nameFournisseur = $nameFournisseur;

        return $this;
    }

    /**
     * Get nameFournisseur
     *
     * @return string
     */
    public function getNameFournisseur()
    {
        return $this->nameFournisseur;
    }

    /**
     * Set mailCustumer
     *
     * @param string $mailCustumer
     *
     * @return Fournisseur
     */
    public function setMailCustumer($mailCustumer)
    {
        $this->mailCustumer = $mailCustumer;

        return $this;
    }

    /**
     * Get mailCustumer
     *
     * @return string
     */
    public function getMailFournisseur()
    {
        return $this->mailFournisseur;
    }

    /**
     * Set phoneFournisseur
     *
     * @param string $phoneFournisseur
     *
     * @return Fournisseur
     */
    public function setPhoneFournisseur($phoneFournisseur)
    {
        $this->phoneFournisseur = $phoneFournisseur;

        return $this;
    }

    /**
     * Get phoneFournisseur
     *
     * @return string
     */
    public function getPhoneFournisseur()
    {
        return $this->phoneFournisseur;
    }

    /**
     * Set adressFournisseur
     *
     * @param string $adressFournisseur
     *
     * @return Fournisseur
     */
    public function setAdressFournisseur($adressFournisseur)
    {
        $this->adressFournisseur = $adressFournisseur;

        return $this;
    }

    /**
     * Get adressFournisseur
     *
     * @return string
     */
    public function getAdressFournisseur()
    {
        return $this->adressFournisseur;
    }
}

