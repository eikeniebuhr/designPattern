<?php
declare(strict_types=1);

use DesignPattern\Observer\NewRestaurantPost;
use PHPUnit\Framework\TestCase;

class NewRestaurantPostTest extends TestCase
{
    /**
     * @var NewRestaurantPost|PHPUnit_Framework_MockObject_MockObject
     */
    private $newRestaurantPost;

    protected function setUp()
    {
        $this->newRestaurantPost = new NewRestaurantPost('testName');
    }

    public function testGettingTheName()
    {
        $this->assertSame(
            'testName',
            $this->newRestaurantPost->getMessage()
        );
    }
}
