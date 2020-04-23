<?php
use Doctrine\ORM\EntityManager;

require_once "./bootstrap.php";
require_once "./entities/Book.php";
require_once "./entities/Author.php";
require_once "./entities/User.php";
$em = $this->getDoctrine()->getEntityManager();

$user = $em->getRepository('entities\Book')->find($_GET[id]);

$em->remove($user);
$em->flush();
?>