<?php
declare(strict_types=1);

use DesignPattern\State\Factory;

require __DIR__ . '/../vendor/autoload.php';

$factory = new Factory();

$musicPlayer = $factory->createMusicPlayer(
    $factory->createLowVolumeState()
);
$musicPlayer->play('annoying-song.mp3');

$musicPlayer->setVolumeState(
    $factory->createMediumVolumeState()
);
$musicPlayer->play('song.mp3');

$musicPlayer->setVolumeState(
    $factory->createHighVolumeState()
);
$musicPlayer->play('great-song.mp3');