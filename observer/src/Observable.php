<?php
declare(strict_types=1);

namespace DesignPattern\Observer;

interface Observable
{
    public function addObserver(Observer $observer): void;
}