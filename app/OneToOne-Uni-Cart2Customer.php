<?php

require_once __DIR__.'/bootstrap.php';

/** @var OneToOne\Unidirectional\Cart2Customer\Cart $cart */
$cart = $entityManager
    ->getRepository('OneToOne\Unidirectional\Cart2Customer\Cart')
    ->find(1)
;

$customer = $cart->getCustomer();
