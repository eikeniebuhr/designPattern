<?php
declare(strict_types=1);

namespace DesignPattern\State;

class LowVolume implements VolumeState
{
    /**
     * @param string $song
     */
    public function play(string $song): void
    {
        echo 'I am playing ' . $song . ' with a low volume!' . PHP_EOL;
    }
}
