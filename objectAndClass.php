<?php


class Car
{
    public $color = 'red';
    public $size = 'big';
    public $sizeWheel = 24;

    public function changeSize($size)
    {
        $this->size = $size;

    }
}

$car = new Car();
$secondCar = new Car();

$car->changeSize('small');
echo "$car->size<br>";

echo "$secondCar->color<br>";
echo '<br>';

class TV
{

    public $color = 'black';
    public $amountChannels = 52;
    public $screenSize = 42;
    public static $quantityTV = 10;

    public function __construct()
    {
        self::$quantityTV--;
    }

}

$firstTV = new TV();
$secondTV = new TV();
echo TV::$quantityTV;
echo '<br>';
echo '<br>';

class BallPen
{
    private $weight = 0.1;
    private $inkColor = 'blue';
    private $material = 'plastic';

    public function info()
    {
        echo "$this->weight<br>";
        echo "$this->inkColor<br>";
        echo "$this->material<br>";
    }
}

$firstBallPen = new BallPen();
$secondBallPen = new BallPen();

$secondBallPen->info();
echo '<br>';

class Duck
{

    private static $quantityLive = 2;
    public $status = 'fine';
    public $name = 'Boris';

    public function duckLive()
    {
        self::$quantityLive--;
        if (self::$quantityLive < 1) {
            echo "Duck $this->name is die<br>";
        } else {
            echo "Duck $this->name is $this->status<br>";
        }
    }


}

$firstDuck = new Duck();
$firstDuck->duckLive();


$secondDuck = new Duck();
$secondDuck->name = 'Alexander';
$secondDuck->duckLive();
echo '<br>';

class Product
{
    public $name;
    public $cost;

    public function addProduct($name, $cost)
    {
        echo "$this->name $name";
        echo " $this->cost $cost rub";
    }

}

$firstProduct = new Product();
$firstProduct->addProduct('bread',100);
echo '<br>';



$secondProduct = new Product();
$secondProduct->addProduct('butter',50);


class News{
    public $textNews;
    public $numberNews = 0;
    public function newNews(){
        $this->numberNews++;

        echo "Article №$this->numberNews";
        echo'<br>';
        echo "$this->textNews";
        echo'<br>';
        echo'<br>';
    }

}
$firstNews = new News();
echo "<h1>News</h1>";
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
   nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
    in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
     occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
      id est laborum.';
$firstNews->textNews = $text;
$firstNews->newNews();
$firstNews->newNews();
$firstNews->newNews();
$firstNews->newNews();
$firstNews->newNews();
$firstNews->newNews();

