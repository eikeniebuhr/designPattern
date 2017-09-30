<?php
declare(strict_types=1);

use DesignPattern\State\MusicPlayer;
use DesignPattern\State\VolumeState;
use PHPUnit\Framework\TestCase;

class MusicPlayerTest extends TestCase
{
    /**
     * @var MusicPlayer
     */
    private $musicPlayer;

    /**
     * @var VolumeState|PHPUnit_Framework_MockObject_MockObject
     */
    private $volumeStateMock;

    protected function setUp()
    {
        $this->volumeStateMock = $this->createMock(VolumeState::class);
        $this->musicPlayer = new MusicPlayer($this->volumeStateMock);
    }

    public function testIfAVolumeStateCanBeSet()
    {
        $this->musicPlayer->setVolumeState($this->volumeStateMock);

        $this->assertAttributeSame(
            $this->volumeStateMock,
            'volumeState',
            $this->musicPlayer
        );
    }

    public function testIfSongWillBePlayedWithTheCurrentVolume()
    {
        $this->volumeStateMock->expects($this->once())
            ->method('play')
            ->with('awesomeSong');

        $this->musicPlayer->setVolumeState($this->volumeStateMock);
        $this->musicPlayer->play('awesomeSong');
    }
}