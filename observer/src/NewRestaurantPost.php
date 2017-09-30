<?php
declare(strict_types=1);

namespace DesignPattern\Observer;

class NewRestaurantPost
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->name;
    }
}