<?php
$manager = new MongoDb\Driver\Manager("mongodb://localhost:27017");

$query = new MongoDB\Driver\Query(array('miasto'=> "Warszawa"));

$cursor = $manager->executeQuery('kina.helios', $query);

print_r($cursor->toArray());