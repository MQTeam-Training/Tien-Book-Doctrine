<?php
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
    protected $user;
    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    // .. (other code)
    public function getId()
    {
        return $this->id;
    }

    public function getUser()
    {
        return $this->user;

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
}