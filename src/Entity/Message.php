<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $message;


    //JE LIE mon message A user
    /**
     * Les messages sont liées à un user
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="messages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    //JE LIE mon message A user
    /**
     * Les messages sont liées à un user
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="messages")
     * @ORM\JoinColumn(name="destinataire_id", referencedColumnName="id")
     */
    private $destinataire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;
 
 
    public function __construct()
    {
        $this->date = new \dateTime('now');
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    

    /**
     * Get les messages sont liées à un user
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set les messages sont liées à un user
     *
     * @return  self
     */ 
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get les messages sont liées à un user
     */ 
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set les messages sont liées à un user
     *
     * @return  self
     */ 
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return  \DateTime
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param  \DateTime  $date
     *
     * @return  self
     */ 
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }
}
