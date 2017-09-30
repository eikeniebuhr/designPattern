<?php
declare(strict_types=1);

namespace DesignPattern\Observer;

class Factory
{
    /**
     * @param $name
     *
     * @return HungryPerson
     */
    public function createHungryPerson($name): HungryPerson
    {
        return new HungryPerson($name);
    }

    /**
     * @param $name
     *
     * @return NewRestaurantPost
     */
    public function createNewRestaurantPost($name): NewRestaurantPost
    {
        return new NewRestaurantPost($name);
    }

    /**
     * @return RestaurantPostsNotifier
     */
    public function createRestaurantPostsNotifier(): RestaurantPostsNotifier
    {
        return new RestaurantPostsNotifier();
    }
}