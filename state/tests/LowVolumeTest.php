<?php
declare(strict_types=1);

use DesignPattern\State\LowVolume;
use PHPUnit\Framework\TestCase;

class LowVolumeTest extends TestCase
{
    /**
     * @var LowVolume
     */
    private $lowVolume;

    protected function setUp()
    {
        $this->lowVolume = new LowVolume();
    }

    public function testIfSongWillBePlayed()
    {
        $this->expectOutputString('I am playing awesome-song with a low volume!' . PHP_EOL);
        $this->lowVolume->play(
            'awesome-song'
        );
    }
}