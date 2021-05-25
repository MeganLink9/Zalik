<?php

class Animal{
    private $name;
    private $color;
    private $breed;
    private $age;


    private $food;
    private $location;
    private $treatment;//?


    public function __construct( $name, $color, $breed, $age){
        $this->name  = $name;
        $this->color = $color;
        $this->breed = $breed;
        $this->age   = $age;
    }

    public function __construct_2($food, $location, $treatment){
        $this->food = $food;
        $this->location = $location;
        $this->treatment = $treatment;
    }

    public function makeNoise(){
        echo " імя - ".$this->name.", забарвлення - ".$this->color.", порода - ".$this->breed.", вік - ".$this->age;
    }
}





/* Dog, Cat, Horse перевизначають методи makeNoise, eat */
class Cat extends Animal{
    public function catmakeNoise(){
        echo "Це кіт ";
    }
}

class Dog extends Animal{
    public function dogmakeNoise(){
        echo "Це собака ";
    }
}

class Horse extends Animal{
    public function horseMakeNoise(){
        echo "Це кінь ";
    }
}





/* Масиви з іменами, кольорами та породами */
$randName = array("Айлі","Ічі","Джон","Чауст","Аркон","Карма","Фокс","Скейч","Лайт","Чері","Найт","Кельт","Ланга");
$randColor = array("Чорне", "Плямисте", "Біле", "Коричневе", "Сіре");
$randCatBreed = array("Сіамська", "Сибірська", "Персидська", "Норвезька лісова", "Уральський рекс", "Японський бобтейл", "Корат");
$randDogBreed = array("Акіта-іну", "Бордер-коллі", "Кеесхонд", "Німецька вівчарка", "Фокстер'єр", "Такса", "ердельтер'єра");
$randHorseBreed = array("Аппалуза", "Гонтер", "Боснійський", "Бранденбурзький", "Тракененський", "Фіорд", "Ютландський");


/* Рандом для класів Cat, Dog, Horse*/
for ($i = 0; $i <= 0; $i++) {
    $rName = mt_rand(0, count($randName) - 1);
    $rColor = mt_rand(0, count($randColor) - 1);
    $rBreed = mt_rand(0, count($randCatBreed) - 1);

    $cat = new Cat($randName[$rName], $randColor[$rColor], $randCatBreed[$rBreed], rand(1 ,15));
    $cat->catmakeNoise();
    $cat->makeNoise();

    echo"<br>";
}

for ($i = 0; $i <= 0; $i++) {
    $rName = mt_rand(0, count($randName) - 1);
    $rColor = mt_rand(0, count($randColor) - 1);
    $rBreed = mt_rand(0, count($randDogBreed) - 1);

    $dog = new Dog($randName[$rName], $randColor[$rColor], $randDogBreed[$rBreed], rand(1 ,15));
    $dog->dogMakeNoise();
    $dog->makeNoise();

    echo"<br>";
}


for ($i = 0; $i <= 0; $i++) {
    $rName = mt_rand(0, count($randName) - 1);
    $rColor = mt_rand(0, count($randColor) - 1);
    $rBreed = mt_rand(0, count($randHorseBreed) - 1);

    $horse = new Horse($randName[$rName], $randColor[$rColor], $randHorseBreed[$rBreed], rand(1 ,25));
    $horse->horseMakeNoise();
    $horse->makeNoise();

    echo"<br>";
}



?>
