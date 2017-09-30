<?php
declare(strict_types=1);

namespace DesignPattern\State;

class MediumVolume implements VolumeState
{
    /**
     * @param string $song
     */
    public function play(string $song): void
    {
        echo 'I am playing ' . $song . ' with a medium volume!' . PHP_EOL;
    }
}
