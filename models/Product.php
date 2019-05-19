<?php


namespace app\models;


abstract class Product
{
    public $name;
    public $cost;
    public $quontity;
    public $allSell;
    static $allbuy=0;


    /**
     * Product constructor.
     * @param $name - имя товара
     * @param $cost - стоимость товара
     * @param $quontity - количество товара
     * @param $allsell - стоимость продаж общая
     */
    public function __construct($name, $cost, $quontity)
    {
        $this->name = $name;
        $this->cost = $cost;
        $this->quontity = $quontity;
    }
    public function sell(){
        $this->allSell=$this->cost*$this->quontity;
        $this->buyAll();
    }

    public function buyAll(){
        $this::$allbuy+=$this->allSell;
    }
    public function renderBuy(){
        echo "общая прибыль с продаж составляет = ".$this::$allbuy."<br>";
        echo "<hr><br>";
    }

    public function renderItems(){
        echo "Товар-".$this->name."<br>";
        echo "в количестве-".$this->quontity."<br>";
        echo "по цене-".$this->cost."<br>";
        echo "был продан за общую сумму-".$this->cost." X ".$this->quontity." = ".$this->allSell."<br>";
        echo "<hr><br>";
    }

}