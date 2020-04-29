<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="book")
 */
class Book
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $description;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $publishedDate;
    /**
     * @ORM\ManyToOne(targetEntity="Author")
     */
    protected $author;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    protected $user;

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $publishedDate
     */
    public function setPublishedDate($publishedDate): void
    {
        $this->publishedDate =$publishedDate;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Book constructor.
     * @param $name
     * @param $description
     * @param $publishedDate
     * @param $author
     * @param $user
     */
    public function __construct($name, $description, $publishedDate, $author,$user)
    {
        $this->name = $name;
        $this->description = $description;
        $this->publishedDate = $publishedDate;
        $this->author = $author;
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @return mixed
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }


}