<?php
declare(strict_types=1);

namespace DesignPattern\State;

class HighVolume implements VolumeState
{
    /**
     * @param string $song
     */
    public function play(string $song): void
    {
        echo 'I am playing ' . $song . ' with a high volume!' . PHP_EOL;
    }
}
