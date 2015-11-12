<?php

use Doctrine\ORM\EntityManager;

class FixturePersister
{
    private $entityManager;
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function run($target)
    {
        $loader = new \Nelmio\Alice\Fixtures\Loader();

        $objects = $loader->load(__DIR__."/../fixture/${target}.yml");

        $persister = new \Nelmio\Alice\Persister\Doctrine($this->entityManager);
        $persister->persist($objects);
    }
}
