<?php

namespace App\Entity;

use App\Repository\MessagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessagesRepository::class)
 */
class Messages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sender_from;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sender_to;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;  

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sender_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $updated_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSenderFrom(): ?string
    {
        return $this->sender_from;
    }

    public function setSenderFrom(string $sender_from): self
    {
        $this->sender_from = $sender_from;

        return $this;
    }

    public function getSenderTo(): ?string
    {
        return $this->sender_to;
    }

    public function setSenderTo(string $sender_to): self
    {
        $this->sender_to = $sender_to;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt( $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt( $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getSenderId(): ?string
    {
        return $this->sender_id;
    }

    public function setSenderId(string $sender_id): self
    {
        $this->sender_id = $sender_id;

        return $this;
    }
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'sender_to' => $this->getSenderTo(),
            'sender_from' => $this->getSenderFrom(),
            'content' => $this->getContent(),
            'sender_id' => $this->getSenderId(),
            'created_at' => $this->getCreatedAt(),
            'updated_at' => $this->getUpdatedAt(),
        ];
    }
}
