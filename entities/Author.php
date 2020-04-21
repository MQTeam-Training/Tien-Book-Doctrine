<?php

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="author")
 */
class Author
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
    protected $Name;
    /**
     * @ORM\Column(type="integer")
     */
    protected $age;
    /**
     * @ORM\Column(type="string")
     */
    protected $city;
    /**
     * @ORM\OneToMany(targetEntity="Book", mappedBy="author")
     */
    protected $writtenBooks = null;

    /**
     * @return null
     */
    public function getWrittenBooks()
    {
        return $this->writtenBooks;
    }

    /**
     * @param null $writtenBooks
     */
    public function setWrittenBooks($writtenBooks): void
    {
        $this->writtenBooks = $writtenBooks;
    }

    /**
     * Author constructor.
     * @param $Name
     * @param $age
     * @param $city
     */
    public function __construct($Name, $age, $city)
    {
        $this->Name = $Name;
        $this->age = $age;
        $this->city = $city;
        $this->writtenBooks = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
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
    public function getCity()
    {
        return $this->city;
    }

}