<?php

require_once __DIR__.'/../bootstrap.php';
require_once __DIR__.'/FixturePersister.php';

if (1 < count($argv)) {
    $basename = basename($argv[0], '.php');
    $persister = new FixturePersister($entityManager);
    $persister->run($basename);

    exit;
}
