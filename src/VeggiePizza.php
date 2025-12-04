<?php

declare(strict_types=1);

namespace Pizza;

/**
 * Вегетарианская пицца
 */
class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Vegetarian Pizza';
        $this->sauce = 'Pesto';
        $this->toppings = [
            'Tomatoes',
            'Bell pepper',
            'Onion',
            'Mushrooms',
            'Olives',
        ];
    }
}