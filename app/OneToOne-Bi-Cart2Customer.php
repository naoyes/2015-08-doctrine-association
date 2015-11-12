<?php

require_once __DIR__.'/bootstrap.php';

/** @var OneToOne\Bidirectional\Cart2Customer\Cart $cart */
$cart = $entityManager
    ->getRepository('OneToOne\Bidirectional\Cart2Customer\Cart')
    ->find(1)
;

$customer = $cart->getCustomer();
$customer->getCart();
