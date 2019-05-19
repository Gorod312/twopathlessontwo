<?php

namespace app\models;

class WeightItems extends Product
{
    public function __construct($name, $cost,$quontity)
    {
        parent::__construct($name, $cost,$quontity);
        $this->sell();
        $this->renderItems();

    }

}