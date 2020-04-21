<?php
use Doctrine\ORM\Mapping as ORM;
require_once "Book.php";
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
    protected $user;
    /**
     * @ORM\Column(type="string")
     */
    protected $password;
    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;

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
    public function setUser($user)
    {
        $this->user = $user;

    }
    public function setPass($password)
    {
        $this->password =$password;

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
    }

}