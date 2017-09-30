<?php
declare(strict_types=1);

use DesignPattern\State\HighVolume;
use PHPUnit\Framework\TestCase;

class HighVolumeTest extends TestCase
{
    /**
     * @var HighVolume
     */
    private $highVolume;

    protected function setUp()
    {
        $this->highVolume = new HighVolume();
    }

    public function testIfSongWillBePlayed()
    {
        $this->expectOutputString('I am playing awesome-song with a high volume!' . PHP_EOL);
        $this->highVolume->play(
            'awesome-song'
        );
    }
}