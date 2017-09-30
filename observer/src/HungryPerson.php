<?php
declare(strict_types=1);

namespace DesignPattern\Observer;

class HungryPerson implements Observer
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param NewRestaurantPost $newRestaurantPost
     */
    public function thereIsANewRestaurantPost(NewRestaurantPost $newRestaurantPost): void
    {
        echo 'Hi ' . $this->name . '! There is a new restaurant post: '. $newRestaurantPost->getMessage() . PHP_EOL;
    }
}