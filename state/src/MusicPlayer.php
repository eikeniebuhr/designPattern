<?php
declare(strict_types=1);

namespace DesignPattern\State;

class MusicPlayer
{
    /**
     * @var VolumeState
     */
    protected $volumeState;

    /**
     * @param VolumeState $state
     */
    public function __construct(VolumeState $state)
    {
        $this->volumeState = $state;
    }

    /**
     * @param VolumeState $volumeState
     */
    public function setVolumeState(VolumeState $volumeState): void
    {
        $this->volumeState = $volumeState;
    }

    /**
     * @param string $song
     */
    public function play(string $song): void
    {
        $this->volumeState->play($song);
    }
}
