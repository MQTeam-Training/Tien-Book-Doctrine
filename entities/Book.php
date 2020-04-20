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
    protected $Sach;
    /**
     * @ORM\Column(type="string")
     */
    protected $TacGia;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $NXB;

    /**
     * Book constructor.
     * @param $Sach
     * @param $TacGia
     * @param $NXB
     */
    public function __construct($Sach, $TacGia, $NXB)
    {
        $this->Sach = $Sach;
        $this->TacGia = $TacGia;
        $this->NXB = $NXB;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSach()
    {
        return $this->Sach;
    }

    /**
     * @param mixed $Sach
     */
    public function setSach($Sach): void
    {
        $this->Sach = $Sach;
    }

    /**
     * @return mixed
     */
    public function getTacGia()
    {
        return $this->TacGia;
    }

    /**
     * @param mixed $TacGia
     */
    public function setTacGia($TacGia): void
    {
        $this->TacGia = $TacGia;
    }

    /**
     * @return mixed
     */
    public function getNXB()
    {
        return $this->NXB;
    }

    /**
     * @param mixed $NXB
     */
    public function setNXB($NXB): void
    {
        $this->NXB = $NXB(('d-m-Y H:i:s'));
    }

}