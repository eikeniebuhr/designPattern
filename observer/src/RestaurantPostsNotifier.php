<?php
declare(strict_types=1);

namespace DesignPattern\Observer;

class RestaurantPostsNotifier implements Observable
{
    /**
     * @var array
     */
    protected $observers = [];

    /**
     * @param Observer $observer
     */
    public function addObserver(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param NewRestaurantPost $newRestaurantPost
     */
    public function addRestaurantPost(NewRestaurantPost $newRestaurantPost): void
    {
        $this->tellObservers($newRestaurantPost);
    }

    /**
     * @param NewRestaurantPost $newRestaurantPost
     */
    private function tellObservers(NewRestaurantPost $newRestaurantPost): void
    {
        /** @var Observer $observer */
        foreach ($this->observers as $observer) {
            $observer->thereIsANewRestaurantPost($newRestaurantPost);
        }
    }
}