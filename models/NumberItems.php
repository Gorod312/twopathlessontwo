<?php
namespace app\models;

class NumberItems extends Product
{
    public function __construct($name, $cost,$quontity)
    {
        parent::__construct($name, $cost,$quontity);
        $this->cost=$cost/2;
        $this->sell();
        $this->renderItems();

    }
}