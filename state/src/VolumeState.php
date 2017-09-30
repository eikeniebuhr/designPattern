<?php
declare(strict_types=1);

namespace DesignPattern\State;

interface VolumeState
{
    /**
     * @param string $song
     */
    public function play(string $song): void;
}
