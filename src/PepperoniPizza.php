<?php

declare(strict_types=1);

namespace Pizza;

/**
 * Пицца Пепперони
 */
class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Pepperoni'; // Используем английские названия
        $this->sauce = 'Tomato sauce';
        $this->toppings = [
            'Pepperoni',
            'Mozzarella',
            'Oregano',
        ];
    }
}