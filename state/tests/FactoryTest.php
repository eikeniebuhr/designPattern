<?php
declare(strict_types=1);

use DesignPattern\State\Factory;
use DesignPattern\State\HighVolume;
use DesignPattern\State\LowVolume;
use DesignPattern\State\MediumVolume;
use DesignPattern\State\MusicPlayer;
use DesignPattern\State\VolumeState;
use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
{
    /**
     * @var Factory
     */
    private $factory;

    /**
     * @var VolumeState|PHPUnit_Framework_MockObject_Invocation_Object
     */
    private $stateMock;

    protected function setUp()
    {
        $this->stateMock = $this->createMock(VolumeState::class);
        $this->factory = new Factory();
    }

    public function testIfFactoryCanCreateMusicPlayer()
    {
        $this->assertEquals(
            $this->factory->createMusicPlayer($this->stateMock),
            new MusicPlayer(
                $this->stateMock
            )
        );
    }

    public function testIfFactoryCanCreateALowVolumeState()
    {
        $this->assertEquals(
            $this->factory->createLowVolumeState(),
            new LowVolume()
        );
    }
    public function testIfFactoryCanCreateAMediumVolumeState()
    {
        $this->assertEquals(
            $this->factory->createMediumVolumeState(),
            new MediumVolume()
        );
    }
    public function testIfFactoryCanCreateAHighVolumeState()
    {
        $this->assertEquals(
            $this->factory->createHighVolumeState(),
            new HighVolume()
        );
    }
}