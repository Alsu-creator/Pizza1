<?php

declare(strict_types=1);

namespace Pizza;

/**
 * Сырная пицца
 */
class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->sauce = 'Garlic sauce';
        $this->toppings = [
            'Mozzarella',
            'Parmesan',
            'Cheddar',
            'Blue cheese',
        ];
    }
}