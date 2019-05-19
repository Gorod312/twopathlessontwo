<?php

use app\engine\Autoload;
use app\models\{NumberItems, Items, WeightItems};

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);


$items = new Items('танк',200,3);
$number= new NumberItems('танк цифровой',200,3);
$weight= new WeightItems('танк весовой',200,2.5);


$items->renderBuy();


//метод подсчета финальной стоимости