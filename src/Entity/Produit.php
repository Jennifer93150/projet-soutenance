<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 * @ORM\Table(name="produit")
 * @Vich\Uploadable
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo;

    /**
     * @Vich\UploadableField(mapping="product_photos", fileNameProperty="photo")
     * @var File
     */
    private $photoFile;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

//JE LIE mon produit A user
    /**
     * Un produit a une catégorie
     * mappedBy=l'entité appelle le user 
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="produits")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Un produit a une catégorie
     * mappedBy=l'entité appelle les categories 
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="produits")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }
   
    /**
     * Get un produit a potentiellement plusieurs catégories
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set un produit a potentiellement plusieurs catégories
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

   


    /**
     * Get the value of photoFile
     *
     * @return  File
     */ 
    public function getPhotoFile()
    {
        return $this->photoFile;
    }

    /**
     * Set the value of photoFile
     *
     * @param  File  $photoFile
     *
     * @return  self
     */ 
    public function setPhotoFile(File $photoFile)
    {
        $this->photoFile = $photoFile;

        return $this;
    }
}
