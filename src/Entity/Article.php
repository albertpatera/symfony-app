<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reprezentuje záznamy databázové tabulky článků v redakčním systému.
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @package App\Entity
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $article_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url;

    /**
     * @ORM\Column(type="text")
     */
    private $title_image;


    /**
     * @ORM\Column(type="text")
     */
    private $date_created;



    public function getId(): ?int
    {
        return $this->id;
    }

   /* public function getId(): ?int
    {
        return $this->article_id;
    }*/

    public function setArticleId(int $article_id): self
    {
        $this->article_id = $article_id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTitleImage(): ?string
    {
        return $this->title_image;
    }

    public function setTitleImage(string $title_image): self
    {
        $this->title_image = $title_image;

        return $this;
    }

    public function getDateCreated() : ?string
    {
        return $this->date_created;
    }
    /*
    * @param mixed $date_created
     */
    public function setDateCreated($date_created): self
    {
        $this->date_created = $date_created;

        return $this;
    }
}
