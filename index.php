<?php

echo "<br>";
echo "<br> Задание 1 - 4 <br> --------------------<br>";
echo "<br>";

class Product {
  public $id;
  public $name;
  public $price;
  public $brand;

  public function __construct($id = null, $name = null, $price = null, $brand = null){
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->brand = $brand;
  }
  public function displayName(){
    echo $this->name;
  }
}

class ColorProduct extends Product{ // в наследнике можно задать цвет товара и есть метод вывода цвета
    public $color;

    public function __construct($id = null, $name = null, $price = null, $brand = null, $color = null){
      parent::__construct($id, $name, $price, $brand);
      $this->color = $color;

    }
    public function displayColor(){
      echo $this->color;
    }
}

$prod1 = new Product(1, 'Mouse', '10', 'Logitech');
$prod2 = new ColorProduct(2, 'Keyboard', '20', 'Microsoft', 'red');

echo "<br>";
$prod1->displayName();
echo "<br>";
$prod2->displayColor();


echo "<br>";
echo "<br> Задание 5 <br> --------------------<br>";
echo "<br>Что он выведет на каждом шаге? Почему?<br>";
class A {
     public function foo() {
          static $x = 0;
          echo ++$x;
      }
  }
  $a1 = new A();
  $a2 = new A();
  $a1->foo();
  $a2->foo();
  $a1->foo();
  $a2->foo();


echo "<br> Задание 6 <br> --------------------";
echo " <br>Немного изменим п.5:<br>";

class A1 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B1 extends A1 {
}
$a1 = new A1();
$b1 = new B1();
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo();

$a1->foo(); 
$b1->foo();

echo "<br>Объясните результаты в этом случае.<br>";
echo "<br>Ответ: static принадлежит классу а не экземплярам.<br>";
echo "<br>7. *Дан код:<br>";
class A2 {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B2 extends A2 {
}
$a1 = new A2;
$b1 = new B2;
$a1->foo(); 
$b1->foo(); 
$a1->foo(); 
$b1->foo(); 
echo "<br>Что он выведет на каждом шаге? Почему?<br>";
