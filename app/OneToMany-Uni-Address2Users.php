<?php

require_once __DIR__.'/bootstrap.php';

/** @var OneToMany\Unidirectional\User $user */
$user = $entityManager
    ->getRepository('OneToMany\Unidirectional\User')
    ->find(1)
;

$address = $user->getAddress();
