<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MenuRepository")
 */
class Menu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_parent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $redirect_to_url;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $redirect_to;

    /**
     * @ORM\Column(type="text")
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdParent(): ?int
    {
        return $this->id_parent;
    }

    public function setIdParent(?int $id_parent): self
    {
        $this->id_parent = $id_parent;

        return $this;
    }

    public function getRedirectToUrl(): ?string
    {
        return $this->redirect_to_url;
    }

    public function setRedirectToUrl(?string $redirect_to_url): self
    {
        $this->redirect_to_url = $redirect_to_url;

        return $this;
    }

    public function getRedirectTo(): ?string
    {
        return $this->redirect_to;
    }

    public function setRedirectTo(?string $redirect_to): self
    {
        $this->redirect_to = $redirect_to;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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
}
