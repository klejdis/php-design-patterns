<?php
require_once __DIR__.'/../vendor/autoload.php';


$folder1 = new Folder('Folder 1');
$folder1->add(new File('File 1'));
$folder1->add(new File('File 2'));

echo "Folder: ". $folder1->getName().PHP_EOL;

foreach ($folder1->getChildren() as $child) {
    echo "File: ". $child->getName().PHP_EOL;
}