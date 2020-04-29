<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
//use Doctrine\DBAL\Logging\EchoSQLLogger;
require_once "vendor/autoload.php";
use Doctrine\DBAL\DriverManager;

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/entities"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
// database configuration parameters
//$config->setSQLLogger(new EchoSQLLogger());
$conn = array(
    'driver' => 'pdo_mysql',
    'user' => 'tientv',
    'password' => 'Tien@2020',
    'host' => 'ec2-13-229-102-87.ap-southeast-1.compute.amazonaws.com',
    'port' => '5506',
    'dbname' => 'tientran_book',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
$conn1 = DriverManager::getConnection($conn);