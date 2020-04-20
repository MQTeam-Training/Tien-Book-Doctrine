<?php
// create_product.php <name>
require_once "bootstrap.php";
require_once "./entities/Book.php";

$newSach = $argv[1];
$newTacGia = $argv[2];
$newNXB = $argv[3];

$book = new Book($newSach, $newTacGia, $newNXB);

$entityManager->persist($book);
$entityManager->flush();

echo "Created Product with ID " . $book->getId() . "\n";
