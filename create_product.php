<?php
// create_product.php <name>
require_once "bootstrap.php";
require_once "./entities/User.php";

$newUserName = "tientran";
$newPassword = "1992";

$user = new User();
$user->setUser($newUserName);
$user->setPass($newPassword);

$entityManager->persist($user);
$entityManager->flush();

echo "Created Product with ID " . $user->getId() . "\n";
