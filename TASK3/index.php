<?php

// Интерфейс для всех перевозчиков
interface ShippingStrategy {
    // метод, который должен быть у каждого перевозчика
    public function calculate($weight);
}

// Перевозчик 1
class Carrier1 implements ShippingStrategy {
    public function calculate($weight) {
        if ($weight <= 10) {
            return 100;
        } else {
            return 1000;
        }
    }
}

// Перевозчик 2
class Carrier2 implements ShippingStrategy {
    public function calculate($weight) {
        return $weight * 100;
    }
}

// Класс-калькулятор, который использует стратегию
class ShippingCalculator {
    private $strategy;

    public function __construct($strategy) {
        $this->strategy = $strategy;
    }

    public function getCost($weight) {
        return $this->strategy->calculate($weight);
    }
}

// ---------- Пример использования ----------
// Создаём объекты перевозчиков
$carrier1 = new Carrier1();
$calculator1 = new ShippingCalculator($carrier1);

$carrier2 = new Carrier2();
$calculator2 = new ShippingCalculator($carrier2);

// Выводим результаты
echo 'Carrier1, 5kg: ' . $calculator1->getCost(5) . "\n";
echo 'Carrier1, 12kg: ' . $calculator1->getCost(12) . "\n";
echo 'Carrier2, 5kg: ' . $calculator2->getCost(5) . "\n";
echo 'Carrier2, 12kg: ' . $calculator2->getCost(12) . "\n";