<?php
declare(strict_types=1);

namespace DesignPattern\State;

class Factory
{
    /**
     * @param $state
     *
     * @return MusicPlayer
     */
    public function createMusicPlayer(VolumeState $state): MusicPlayer
    {
        return new MusicPlayer($state);
    }

    /**
     * @return LowVolume
     */
    public function createLowVolumeState(): LowVolume
    {
        return new LowVolume();
    }

    /**
     * @return MediumVolume
     */
    public function createMediumVolumeState(): MediumVolume
    {
        return new MediumVolume();
    }

    /**
     * @return HighVolume
     */
    public function createHighVolumeState(): HighVolume
    {
        return new HighVolume();
    }
}