<?php
require_once "./bootstrap.php";
require_once "./entities/Book.php";
require_once "./entities/Author.php";
require_once "./entities/User.php";
$authorRepository = $entityManager->getRepository('Author');
$id_user=$authorRepository->find(2);
$test=$id_user->getWrittenBooks();
foreach ($test as $Book) {
    echo $Book->getName();
}
?>