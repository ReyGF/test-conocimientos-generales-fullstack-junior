<?php
$entityManager = $this->getDoctrine()->getManager();

$products = $entityManager->getRepository(Product::class)->findBy([
    'price' => 100,
]);