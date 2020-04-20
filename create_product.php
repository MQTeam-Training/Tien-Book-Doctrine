<?php
// create_product.php <name>
require_once "bootstrap.php";
require_once "./entities/User.php";

$newUserName = $argv[1];
$newPassword = $argv[2];

$user = new User($newUserName,$newPassword);

$entityManager->persist($user);
$entityManager->flush();

echo "Created Product with ID " . $user->getId() . "\n";
