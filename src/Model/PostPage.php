<?php

declare(strict_types=1);

/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Model;

class PostPage
{
    private $id;
    private $category;
    private $title;
    private $description;
    private $publicationDate;

    /**
     * PostPage constructor.
     *
     * @param int $id
     * @param string $title
     * @param PostCategory $category
     *
     */
    public function __construct(int $id, string $title, PostCategory $category)
    {
        $this->id=$id;
        $this->title=$title;
        $this->category=$category;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return PostPage
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return PostPage
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getPublicationDate(): \DateTime
    {
        return $this->publicationDate;
    }

    /**
     * @param \DateTime $publicationDate
     *
     * @return PostPage
     */
    public function setPublicationDate(\DateTime $publicationDate): self
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * @param PostCategory $category
     *
     * @return PostPage
     */
    public function setCategory(PostCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return PostCategory
     */
    public function getCategory(): PostCategory
    {
        return $this->category;
    }
}
