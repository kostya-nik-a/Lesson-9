<?php 
/*<<< TASK
1. Распишите своё понимание инкапсуляции. Представьте, что вас спрашивают на собеседовании.
Инкапсуляция - это механизм сбора всей информации об объекте, о его свойствах, функциях, характеристиках в одном месте (классе), для дальнейшего использования и обработки данных. Так же возможно защита информации об объекте, ограничение доступа одних компонентов программы к другим. 

2. Сформулируйте своими словами в чём плюсы объектов, а в чём минусы?
- преимущества: упрощение написания кода, улучшает наглядность кода, защита данных от нежелательного доступа к ним
- минусы: сложность кода, возможно допущение ошибок или их невозможность вовремя обнаружить.
TASK
*/
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

	public function getMark() 
	{
		echo 'Марка машины: '.$this->markCar.'<br>';
	}

	public function getModel() 
	{
		echo 'Модель машины: '.$this->modelCar.'<br>';
	}

	public function getDoor() 
	{
		echo 'Количество дверей машины: '.$this->doorCar.'<br>';
	}

	public function getColor() 
	{
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
echo $objectCar2->getColor().'<br><hr>';


class ClassTVs 
{
	public $modelTV;
	public $diagonalTV;
	public $typeScreenTV;
	public $screenResolutionTV;
	public $smartTV;
	public $connectorTV;
	public $priceTV;

	public function getPrice() 
	{
		echo 'Стоимость телевизора: ' . $this->priceTV .'<br>';
	}
	
	public function getCharacteristics() 
	{
		echo "Основные характеристики телевизора: <br>";
		echo "Модель: " . $this->modelTV;
		echo "Тип экрана: " . $this->typeScreenTV;
		echo "Диагональ экрана: " . $this->diagonalTV;
		echo "Разрешение экрана: " . $this->screenResolutionTV. '<hr>';
	}

}

$objectTV1 = new ClassTVs();

$objectTV1->modelTV = "Sumsung LV32F390SIX" . '<br>';
$objectTV1->typeScreenTV = "LED" . '<br>';
$objectTV1->diagonalTV = "32 дюймов" . '<br>';
$objectTV1->screenResolutionTV = "1920х1080 (FullHD)" . '<br>';
$objectTV1->smartTV = "Да" . '<br>';
$objectTV1->priceTV = '25 000 руб.' . '<br>';

echo $objectTV1->getPrice();
echo $objectTV1->getCharacteristics();

$objectTV2 = new ClassTVs();

$objectTV2->modelTV = "LG OLED55E7N" . '<br>';
$objectTV2->typeScreenTV = "OLED" . '<br>';
$objectTV2->diagonalTV = "55 дюймов" . '<br>';
$objectTV2->screenResolutionTV = "3840x2160 (4К)" . '<br>';
$objectTV2->smartTV = "Да" . '<br>';
$objectTV2->priceTV = '220 000 руб.' . '<br>';

echo $objectTV2->getPrice();
echo $objectTV2->getCharacteristics();

class ClassPens 
{
	public $modelPen;
	public $typePen;
	public $materialPen;
	public $colorPen;
	public $inkColorPen;
	public $lineThicknessPen;
	public $pricePen;

	public function getPrice() 
	{
		echo 'Стоимость ручки: ' . $this->pricePen .'<br>';
	}
	
	public function getCharacteristics() 
	{
		echo "Основные характеристики ручки: <br>";
		echo "Модель: " . $this->modelPen .'<br>';
		echo "Тип: " . $this->typePen .'<br>';
		echo "Материал: " . $this->materialPen .'<br>';
		echo "Цвет: " . $this->colorPen .'<br>';
		echo "Цвет чернил: " . $this->inkColorPen .'<br>';
		echo "Диаметр пишущего наконечника: " . $this->lineThicknessPen . '<br><hr>';
	}

}

$objectPen1 = new ClassPens();

$objectPen1->modelPen = "Round Stick";
$objectPen1->typePen = "Шариковая";
$objectPen1->materialPen = "Пластик";
$objectPen1->colorPen = "Серый";
$objectPen1->inkColorPen = "Черный";
$objectPen1->lineThicknessPen = "0.4 мм";
$objectPen1->pricePen = "20 руб.";

echo $objectPen1->getPrice();
echo $objectPen1->getCharacteristics();


$objectPen2 = new ClassPens();

$objectPen2->modelPen = "Triplus";
$objectPen2->typePen = "Капиллярная";
$objectPen2->materialPen = "Пластик";
$objectPen2->colorPen = "Зеленый лайм";
$objectPen2->inkColorPen = "Зеленый лайм";
$objectPen2->lineThicknessPen = "0.3 мм";
$objectPen2->pricePen = "100 руб.";

echo $objectPen2->getPrice();
echo $objectPen2->getCharacteristics();


class ClassDucks 
{
	public $classDuck;
	public $kindDuck;
	public $habitatDuck;
	public $DescriptionDuck;
	public $reproductionDuck;

	public function getFamaly() 
	{
		echo 'Класс: ' . $this->classDuck .'<br>';
		echo 'Семейство: ' . $this->famalyDuck .'<br>';

	}

	public function getKind() 
	{
		echo 'Вид: ' . $this->kindDuck .'<br>';
	}

	public function getDescription() 
	{
		echo 'Описание: ' . $this->DescriptionDuck .'<br>';
	}

	public function getHabitat() 
	{
		echo 'Среда обитания: ' . $this->habitatDuck .'<br><hr>';
	}

}

$objectDuck1 = new ClassDucks();

$objectDuck1->kindDuck = "Кряква";
$objectDuck1->classDuck = "Птицы";
$objectDuck1->famalyDuck = "Утиные";
$objectDuck1->DescriptionDuck = "Довольно крупная, коренастая речная утка с большой головой и коротким хвостом. Длина 51—62 см, размах крыльев 80—100 см, крыло самцов 27,5—30,6 см, крыло самок 25,2—28,5 см, вес 0,75—1,5 кг. Клюв плоский, широкий с хорошо развитыми гребнями роговых пластинок по краям. Цвет клюва отличается у самцов и самок. У селезней в брачном пере он охристо-оливковый в основании и более охристый либо жёлтый на конце, имеет довольно широкий чёрный ноготок. У взрослых уток цвет клюва чаще всего варьирует от оливкового до тёмно-серого с оранжевыми краями, но может быть и полностью оранжевым. В основании клюва самки всегда присутствуют несколько мелких чёрных пятнышек";
$objectDuck1->habitatDuck = "Домашние утки — полезная домашняя птица, легко разводимая, очень вынослива.";
$objectDuck1->reproductionDuck = "Большинство птиц приступает к размножению начиная с годовалого возраста. В оседлых популяциях разбивка на пары происходит осенью, у остальных весной по прибытию к местам гнездовий";

$objectDuck1->getFamaly();
$objectDuck1->getKind();
$objectDuck1->getDescription();
$objectDuck1->getHabitat();

$objectDuck2 = new ClassDucks();

$objectDuck2->kindDuck = "Домашняя утка";
$objectDuck2->classDuck = "Птицы";
$objectDuck2->famalyDuck = "Утиные";
$objectDuck2->DescriptionDuck = "Из всех хорошо известных диких видов рода Anas только у селезня кряквы четыре средних хвостовых пера загнуты кверху. Так как то же наблюдается и у домашней утки, так как, далее, все известные в настоящее время породы домашних уток по анатомическим признакам ничем существенным не отличаются от кряквы и так как, наконец, все они очень легко скрещиваются между собою и дают плодовитое потомство, то мнение о происхождении всех пород домашних уток от одного дикого вида — именно от кряквы — должно быть признано более верным, чем предположение о происхождении их от нескольких диких видов.";
$objectDuck2->habitatDuck = "";
$objectDuck2->reproductionDuck = "Домашние утки — полезная домашняя птица, легко разводимая, очень вынослива.";

$objectDuck2->getFamaly();
$objectDuck2->getKind();
$objectDuck2->getDescription();
$objectDuck2->getHabitat();



class ClassProducts 
{
	public $modelPdoduct;
	public $typeProduct;
	public $materialProduct;
	public $categoryProduct;
	public $priceProduct;

	public function getPriceProducts() 
	{
		echo "Цена товара: ".$this->priceProduct . '<br>';

	}
	
	public function getTypeProducts() 
	{
		echo "Тип товара: ".$this->typeProduct . '<br>';
		echo "Категория товара: ".$this->categoryProduct . '<br>';
	}
	public function getCharacteristics() 
	{
		echo "Модель товара: ".$this->modelPdoduct . '<br>';
		echo "Материал товара: ".$this->materialProduct . '<br><hr>';
	}

}

$objectProduct1 = new ClassProducts();

$objectProduct1->priceProduct = "1 500 руб.";
$objectProduct1->typeProduct = "Молочная продукция";
$objectProduct1->categoryProduct = "Молоко";
$objectProduct1->modelPdoduct = "Простоквашино";
$objectProduct1->materialProduct = "Молоко";

$objectProduct1->getPriceProducts();
$objectProduct1->getTypeProducts();
$objectProduct1->getCharacteristics();

$objectProduct2 = new ClassProducts();

$objectProduct2->priceProduct = "3 200 руб.";
$objectProduct2->typeProduct = "Кондитерские изделия";
$objectProduct2->categoryProduct = "Шоколад";
$objectProduct2->modelPdoduct = "Nestle";
$objectProduct2->materialProduct = "Какао";

$objectProduct2->getPriceProducts();
$objectProduct2->getTypeProducts();
$objectProduct2->getCharacteristics();

?>
