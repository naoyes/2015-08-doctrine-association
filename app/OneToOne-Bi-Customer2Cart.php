<?php

require_once __DIR__.'/bootstrap.php';

/** @var OneToOne\Bidirectional\Customer2Cart\Customer $customer */
$customer = $entityManager
    ->getRepository('OneToOne\Bidirectional\Customer2Cart\Customer')
    ->find(1)
;

$cart = $customer->getCart();
$cart->getCustomer();
