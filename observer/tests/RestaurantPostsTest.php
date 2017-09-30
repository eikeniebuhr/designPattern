<?php
declare(strict_types=1);

use DesignPattern\Observer\HungryPerson;
use DesignPattern\Observer\NewRestaurantPost;
use DesignPattern\Observer\RestaurantPostsNotifier;
use PHPUnit\Framework\TestCase;

class RestaurantPostsTest extends TestCase
{
    /**
     * @var RestaurantPostsNotifier
     */
    private $restaurantPostsNotifier;

    /**
     * @var NewRestaurantPost|PHPUnit_Framework_MockObject_MockObject
     */
    private $newRestaurantPostMock;

    /**
     * @var HungryPerson|PHPUnit_Framework_MockObject_MockObject
     */
    private $observerMock;

    protected function setUp()
    {
        $this->observerMock = $this->createMock(HungryPerson::class);
        $this->newRestaurantPostMock = $this->createMock(NewRestaurantPost::class);
        $this->restaurantPostsNotifier = new RestaurantPostsNotifier();
    }

    public function testIfNotifyingTheObserversWorksByAddingARestaurant()
    {
        $this->observerMock->expects($this->once())
            ->method('thereIsANewRestaurantPost');

        $this->restaurantPostsNotifier->addObserver($this->observerMock);
        $this->restaurantPostsNotifier->addRestaurantPost($this->newRestaurantPostMock);
    }
}
