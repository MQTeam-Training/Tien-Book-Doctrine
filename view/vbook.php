<?php
require_once "./bootstrap.php";
require_once "../entities/Book.php";
$productRepository = $entityManager->getRepository('Book');
$Books = $productRepository->findAll();

foreach ($Books as $Book) {
    echo sprintf("-%s\n", $Book->getSach());
}
?>
