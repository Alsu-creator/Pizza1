<?php

declare(strict_types=1);

namespace Pizza;

/**
 * Абстрактный класс пиццы
 */
abstract class Pizza
{
    /** @var string Название пиццы */
    protected string $name;

    /** @var string Соус пиццы */
    protected string $sauce;

    /** @var array<int, string> Топпинги пиццы */
    protected array $toppings = [];

    /**
     * Подготовка пиццы
     */
    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}" . PHP_EOL;
        echo "Добавлен соус {$this->sauce}" . PHP_EOL;
        echo "Добавлены топики: " . implode(', ', $this->toppings) . PHP_EOL;
    }

    /**
     * Нарезка пиццы
     */
    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }

    /**
     * Получить название пиццы
     *
     * @return string Название пиццы
     */
    public function getName(): string
    {
        return $this->name;
    }
}