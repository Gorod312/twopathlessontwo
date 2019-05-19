<?php

namespace app\models;
class Items extends Product
{
    public function __construct($name, $cost,$quontity)
    {
        parent::__construct($name, $cost,$quontity);
        $this->sell();
        $this->renderItems();

    }

}
