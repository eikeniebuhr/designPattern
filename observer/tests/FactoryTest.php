<?php
declare(strict_types=1);

use DesignPattern\Observer\Factory;
use DesignPattern\Observer\HungryPerson;
use DesignPattern\Observer\NewRestaurantPost;
use DesignPattern\Observer\RestaurantPostsNotifier;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    const TEST_NAME = 'testName';
    const RESTAURANT_POST_EXAMPLE = 'New food';

    /**
     * @var HungryPerson
     */
    private $hungryPerson;

    /**
     * @var NewRestaurantPost
     */
    private $newRestaurantPost;

    /**
     * @var RestaurantPostsNotifier
     */
    private $restaurantPost;

    /**
     * @var Factory
     */
    private $factory;

    protected function setUp()
    {
        $this->hungryPerson = new HungryPerson(self::TEST_NAME);
        $this->newRestaurantPost = new NewRestaurantPost(self::RESTAURANT_POST_EXAMPLE);
        $this->restaurantPost = new RestaurantPostsNotifier();
        $this->factory = new Factory();
    }

    public function testIfFactoryCanCreateAHungryPerson()
    {
        $this->assertEquals(
            $this->factory->createHungryPerson(self::TEST_NAME),
            $this->hungryPerson
        );
    }

    public function testIfFactoryCanCreateANewRestaurantPost()
    {
        $this->assertEquals(
            $this->factory->createNewRestaurantPost(self::RESTAURANT_POST_EXAMPLE),
            $this->newRestaurantPost
        );
    }

    public function testIfFactoryCanCreateRestaurantPosts()
    {
        $this->assertEquals(
            $this->factory->createRestaurantPostsNotifier(),
            $this->restaurantPost
        );
    }
}