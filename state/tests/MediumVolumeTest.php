<?php
declare(strict_types=1);

use DesignPattern\State\MediumVolume;
use PHPUnit\Framework\TestCase;

class MediumVolumeTest extends TestCase
{
    /**
     * @var MediumVolume
     */
    private $mediumVolume;

    protected function setUp()
    {
        $this->mediumVolume = new MediumVolume();
    }

    public function testIfSongWillBePlayed()
    {
        $this->expectOutputString('I am playing awesome-song with a medium volume!' . PHP_EOL);
        $this->mediumVolume->play(
            'awesome-song'
        );
    }
}