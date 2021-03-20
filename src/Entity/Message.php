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
     * @ORM\ManyToOne(targetEntity="App\Entity\Message", inversedBy="users")
     * @ORM\JoinColumn(name="user1_id", referencedColumnName="id")
     */
    private $user1;


    //JE LIE mon message A user
    /**
     * Les messages sont liées à un user
     * @ORM\ManyToOne(targetEntity="App\Entity\Message", inversedBy="users")
     * @ORM\JoinColumn(name="user2_id", referencedColumnName="id")
     */
    private $user2;



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
     * Get the value of user1
     */ 
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * Set the value of user1
     *
     * @return  self
     */ 
    public function setUser1($user1)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get the value of user2
     */ 
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set the value of user2
     *
     * @return  self
     */ 
    public function setUser2($user2)
    {
        $this->user2 = $user2;

        return $this;
    }
}
