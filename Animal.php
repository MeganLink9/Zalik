<?php
class Animal{
    private $name;
    private $color;
    private $breed;
    private $age;
    private $sleeped;
    public $food;
    public $location;

    public function __construct( $name, $color, $breed, $age, $sleeped, $food, $location){
        $this->name  = $name;
        $this->color = $color;
        $this->breed = $breed;
        $this->age   = $age;
        $this->sleeped = $sleeped;
        $this->food = $food;
        $this->location = $location;
    }

    function makeNoise(){
        echo " імя - ".$this->name.", забарвлення - ".$this->color.", порода - ".$this->breed.", зараз тварина - ".$this->age. ", вік - ".$this->sleeped;
    }

    function eat(){
        echo "зараз їсть <br>";
    }

    function veterner(){
        echo "декілька тварин було призначена їжа".$this->food." та локація ".$this->location;
    }
}



/* Dog, Cat, Horse перевизначають методи makeNoise, eat */
/* Класи для методу makeNoise*/
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

/* Класи для методу eat*/
class Cater extends Animal{
    public function cateat(){
        echo "Цей кіт ";
    }
}

class Doger extends Animal{
    public function dogeat(){
        echo "Ця собака ";
    }
}

class Horser extends Animal{
    public function horseeat(){
        echo "Цей кінь ";
    }
}

/* Клас ветеренар  */
class Veterinarian extends Animal{
    public function treatAnimal(){
        echo "На приймі було";
    }
}

/* Масиви  */
$randName = array("Айлі","Ічі","Джон","Фауст","Аркон","Карма","Фокс","Скейч","Лайт","Чері","Найт","Кельт","Ланга");
$randColor = array("Чорне", "Плямисте", "Біле", "Коричневе", "Сіре");
$randCatBreed = array("Сіамська", "Сибірська", "Персидська", "Норвезька лісова", "Уральський рекс", "Японський бобтейл", "Корат");
$randDogBreed = array("Акіта-іну", "Бордер-коллі", "Кеесхонд", "Німецька вівчарка", "Фокстер'єр", "Такса", "ердельтер'єра");
$randHorseBreed = array("Аппалуза", "Гонтер", "Боснійський", "Бранденбурзький", "Тракененський", "Фіорд", "Ютландський");
$randSleeped = array("Спить","Не спить");
$randFood = array("Мясо","Сіно");
$randLocation = array("Дім","Вулиця");




/* Рандом для класів Cat, Dog, Horse*/
for ($i = 0; $i <= 0; $i++) {
    $rName = mt_rand(0, count($randName) - 1);
    $rColor = mt_rand(0, count($randColor) - 1);
    $rBreed = mt_rand(0, count($randCatBreed) - 1);
    $rSleeped = mt_rand(0, count($randSleeped) - 1);

    $cat = new Cat($randName[$rName], $randColor[$rColor], $randCatBreed[$rBreed], $randSleeped[$rSleeped], rand(1 ,15));
    $cat->catmakeNoise();
    $cat->makeNoise();

    echo"<br>";
}

for ($i = 0; $i <= 0; $i++) {
    $rName = mt_rand(0, count($randName) - 1);
    $rColor = mt_rand(0, count($randColor) - 1);
    $rBreed = mt_rand(0, count($randDogBreed) - 1);
    $rSleeped = mt_rand(0, count($randSleeped) - 1);

    $dog = new Dog($randName[$rName], $randColor[$rColor], $randDogBreed[$rBreed], $randSleeped[$rSleeped], rand(1 ,15));
    $dog->dogMakeNoise();
    $dog->makeNoise();

    echo"<br>";
}


for ($i = 0; $i <= 0; $i++) {
    $rName = mt_rand(0, count($randName) - 1);
    $rColor = mt_rand(0, count($randColor) - 1);
    $rBreed = mt_rand(0, count($randHorseBreed) - 1);
    $rSleeped = mt_rand(0, count($randSleeped) - 1);

    $horse = new Horse($randName[$rName], $randColor[$rColor],  $randHorseBreed[$rBreed], $randSleeped[$rSleeped], rand(1 ,25));
    $horse->horseMakeNoise();
    $horse->makeNoise();

    echo"<br><br>";
}

$cater = new Cater();
$cater->catEat();
$cater->eat();

$doger = new Doger();
$doger->dogEat();
$doger->eat();

$horser = new Horser();
$horser->horseEat();
$horser->eat();


/* Рандом для клас Veterinarian */
for ($i = 0; $i <= 0; $i++) {
    $rFood = mt_rand(0, count($randFood) - 1);
    $rLocation = mt_rand(0, count($randLocation) - 1);

    $veterinarian = new Veterinarian($randFood[$rFood], $randLocation[$rLocation], rand(1 ,25));
    $veterinarian->veterinarianVeterner();
    $veterinarian->veterner();

    echo"<br><br>";
}


?>

