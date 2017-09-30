<?php
declare(strict_types=1);

namespace DesignPattern\Observer;

interface Observer
{
    public function thereIsANewRestaurantPost(NewRestaurantPost $newRestaurantPost): void;
}