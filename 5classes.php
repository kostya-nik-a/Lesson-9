<?php 
<<< TASK
1. Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании.
Инкапсуляция - это механизм сбора всей информации об объекте, о его свойствах, функциях, характеристиках в одном месте (классе), для дальнейшего использования и обработки данных. Так же возможно защита информации об объекте, ограничение доступа одних компонентов программы к другим. 

2. Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?
- преимущества: упрощение написания кода, улучшает наглядность кода, защита данных от нежелательного доступа к ним
- минусы: сложность кода, возможно допущение ошибок или их невозможность вовремя обнаружить.
TASK

//3. Опишите 5 классов и создайте по 2 объекта каждого класса — Машина, Телевизор, Шариковая ручка, Утка, Товар. Классы должны содержать свойства и методы. Все в одном файле.

class ClassCars 
{
	public $markCar;
	public $modelCar;
	public $enginePowerCar;
	public $doorCar;
	public $volumeCar;
	public $colorCar;
	public $priceCar;

	public function getMark() {
		echo 'Марка машины: '.$this->markCar.'<br>';
	}

	public function getModel() {
		echo 'Модель машины: '.$this->modelCar.'<br>';
	}
	public function getDoor() {
		echo 'Количество дверей машины: '.$this->doorCar.'<br>';
	}

	public function getColor() {
		echo 'Цвет машины: '.$this->colorCar.'<br>';
	}
}

$objectCar1 = new ClassCars();
$objectCar2 = new ClassCars();

$objectCar1->markCar = "Honda";
$objectCar1->modelCar = "CR_V";

echo $objectCar1->getMark();
echo $objectCar1->getModel().'<br>';

$objectCar2->doorCar = "5";
$objectCar2->colorCar = "Синий";

echo $objectCar2->getDoor();
echo $objectCar2->getColor().'<br>';

class ClassTVs 
{
	public $modelTV;
	public $diagonalTV;
	public $typeScreenTV;
	public $screenResolutionCar;
	public $smartTV;
	public $connectorTV;
	public $priceTV;

	public function getPrice() {

	}
	
	public function getCharacteristics() {

	}

}

$objectTV1 = new ClassCars();
$objectTV2 = new ClassCars();

class ClassPens 
{
	public $modelPen;
	public $typePen;
	public $materialPen;
	public $colorPen;
	public $inkColorPen;
	public $lineThicknessPen;
	public $priceTV;

	public function getPrice() {

	}
	
	public function getCharacteristics() {

	}

}

$objectPen1 = new ClassCars();
$objectPen2 = new ClassCars();

class ClassDucks 
{
	public $classDuck;
	public $kindDuck;
	public $habitatDuck;
	public $reproductionDuck;

	public function getPrice() {

	}
	
	public function getHabitat() {

	}

}

$objectDuck1 = new ClassCars();
$objectDuck2 = new ClassCars();

class ClassProducts 
{
	public $modelPdoduct;
	public $typeProduct;
	public $materialProduct;
	public $categoryProduct;
	public $priceProduct;

	public function getPrice() {

	}
	
	public function getCharacteristics() {

	}

}

$objectProduct1 = new ClassCars();
$objectProduct2 = new ClassCars();

?>
