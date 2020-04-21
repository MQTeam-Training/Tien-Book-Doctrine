<?php
// create_product.php <name>
require_once "bootstrap.php";
require_once "./entities/Author.php";

$newName = $argv[1];
$newAge = $argv[2];
$newCity = $argv[3];

$author = new Author($newName, $newAge, $newCity);

$entityManager->persist($author);
$entityManager->flush();

echo "Created Product with ID " . $author->getId() . "\n";