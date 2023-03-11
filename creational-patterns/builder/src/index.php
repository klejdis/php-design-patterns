<?php
require_once __DIR__.'/../vendor/autoload.php';


$qb = new QueryBuilder();
$qb->select('users', ['name', 'email', 'password'])
    ->where('age', '18', '>')
    ->limit(10, 20);

print $qb->getSQL();

