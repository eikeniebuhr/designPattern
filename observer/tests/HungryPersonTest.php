<?php
declare(strict_types=1);

use DesignPattern\Observer\HungryPerson;
use DesignPattern\Observer\NewRestaurantPost;
use PHPUnit\Framework\TestCase;

class HungryPersonTest extends TestCase
{
    /**
     * @var HungryPerson|PHPUnit_Framework_MockObject_MockObject
     */
    private $hungryPerson;

    /**
     * @var NewRestaurantPost|PHPUnit_Framework_MockObject_MockObject
     */
    private $newRestaurantPostMock;

    protected function setUp()
    {
        $this->newRestaurantPostMock = $this->createMock(NewRestaurantPost::class);
        $this->hungryPerson = new HungryPerson('testName');
    }

    public function testIfOnRestaurantPostIsOutputtingTheCorrectNotification()
    {
        $this->newRestaurantPostMock->expects($this->once())
            ->method('getMessage')
            ->willReturn('restaurantName');

        $this->expectOutputString('Hi testName! There is a new restaurant post: restaurantName'. PHP_EOL);
        $this->hungryPerson->thereIsANewRestaurantPost($this->newRestaurantPostMock);
    }
}