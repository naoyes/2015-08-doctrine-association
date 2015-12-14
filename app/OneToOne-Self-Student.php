<?php

require_once __DIR__.'/bootstrap.php';

/** @var OneToOne\SelfReferencing\Student $student */
$student = $entityManager
    ->getRepository('OneToOne\SelfReferencing\Student')
    ->find(1)
;

$student->getMentor();
