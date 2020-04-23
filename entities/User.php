<?php
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
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
    protected $username;
    /**
     * @ORM\Column(type="string")
     */
    protected $password;
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;

    }

    /**
     * @return mixed
     */
    public function getIdBook()
    {
        return $this->id_book;
    }

    /**
     * @param mixed $id_book
     */
    public function setIdBook($id_book)
    {
        $this->id_book = $id_book;

    }
    public function getPass()
    {
        return $this->password;
    }
    public function setUsername($username)
    {
        $this->username = $username;

    }
    public function setPass($password)
    {
        $this->password =$password;

    }

    /**
     * Boook class
     * user tên truong khai bao bên Book
     * @ORM\OneToMany(targetEntity="Book", mappedBy="user")
     */
    protected $userthebook = null;

    /**
     * @return null
     */
    public function getUserthebook()
    {
        return $this->userthebook;
    }

    /**
     * @param null $userthebook
     */
    public function setUserthebook($userthebook): void
    {
        $this->userthebook = $userthebook;
    }

    /**
     * User constructor.
     * @param $user
     * @param $password
     */
    public function __construct($user, $password)
    {
        $this->setUser($user);
        $this->setPass($password);
        $this->userthebook = new ArrayCollection();
    }

}