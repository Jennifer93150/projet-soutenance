<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * Une categorie a potentiellement plusieurs produits
     * target c entité produit, mappedBy l'entité categorie appelle les produits
     * @ORM\OneToMany(targetEntity="App\Entity\Produit", mappedBy="categorie")
     */
    private $produits;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
        
    }
   

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get une categorie a potentiellement plusieurs produits
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set une categorie a potentiellement plusieurs produits
     *
     * @return  self
     */
    public function setProduits($produits)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
}
