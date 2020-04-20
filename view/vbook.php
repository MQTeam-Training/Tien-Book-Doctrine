<?php
require_once "./bootstrap.php";
require_once "./entities/Book.php";
$bookRepository = $entityManager->getRepository('Book');
$Books = $bookRepository->findAll();

foreach ($Books as $Book) {
    echo sprintf("-%s\n", $Book->getSach());
}
?>
