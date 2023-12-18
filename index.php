<?php
// Абстрактний клас шаблонного методу
abstract class AbstractClass {
    // Загальний алгоритм, що визначається у базовому класі
    public function templateMethod() {
        $this->baseOperation1();
        $this->requiredOperation1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperation2();
        $this->baseOperation3();
        $this->hook2();
    }

    // Загальні операції, що можуть бути використані у підкласах
    protected function baseOperation1() {
        echo "AbstractClass: Base operation 1<br>";
    }

    protected function baseOperation2() {
        echo "AbstractClass: Base operation 2<br>";
    }

    protected function baseOperation3() {
        echo "AbstractClass: Base operation 3<br>";
    }

    // Абстрактні операції, які повинні бути реалізовані у підкласах
    abstract protected function requiredOperation1();
    abstract protected function requiredOperation2();

    // "Хуки" — операції, які можуть бути (але не обов'язково) перевизначені у підкласах
    protected function hook1() {}
    protected function hook2() {}
}

// Конкретний клас, який розширює шаблонний метод
class ConcreteClass extends AbstractClass {
    // Реалізація обов'язкових операцій
    protected function requiredOperation1() {
        echo "ConcreteClass: Implementation of required operation 1<br>";
    }

    protected function requiredOperation2() {
        echo "ConcreteClass: Implementation of required operation 2<br>";
    }

    // Перевизначення "хуків"
    protected function hook1() {
        echo "ConcreteClass: Overridden hook 1<br>";
    }
}

// Використання шаблонного методу
$abstractClass = new ConcreteClass();
$abstractClass->templateMethod();
