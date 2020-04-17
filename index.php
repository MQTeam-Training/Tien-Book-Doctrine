<?php
require_once "bootstrap.php";
require_once "entities/Product.php";
//$productRepository = $entityManager->getRepository('Product');
//$products = $productRepository->findAll();
//
//foreach ($products as $product) {
//    echo sprintf("-%s\n", $product->getName());
//}


$id = 1;
$newName = "tientran";

$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$product->setName($newName);

$entityManager->flush();

$id = 1;
$product = $entityManager->find('Product', $id);

if ($product === null) {
    echo "No product found.\n";
    exit(1);
}

echo sprintf("-%s\n", $product->getName());
