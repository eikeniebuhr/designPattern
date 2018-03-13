<?php
declare(strict_types=1);

use DesignPattern\Observer\Factory;

require __DIR__ . '/../vendor/autoload.php';

$factory = new Factory();

$bernd = $factory->createHungryPerson('Bernd');
$wilhelm = $factory->createHungryPerson('Thorben');

$restaurantPostsNotifier = $factory->createRestaurantPostsNotifier();
$restaurantPostsNotifier->addObserver($bernd);
$restaurantPostsNotifier->addObserver($wilhelm);

$restaurantPostsNotifier->addRestaurantPost(
    $factory->createNewRestaurantPost('Burgers for free!')
);
