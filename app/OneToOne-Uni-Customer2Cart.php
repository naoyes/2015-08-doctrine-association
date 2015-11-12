<?php

require_once __DIR__.'/bootstrap.php';

/** @var OneToOne\Unidirectional\Customer2Cart\Customer $customer */
$customer = $entityManager
    ->getRepository('OneToOne\Unidirectional\Customer2Cart\Customer')
    ->find(1)
;

$cart = $customer->getCart();
