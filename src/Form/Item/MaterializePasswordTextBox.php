<?php

namespace Nemundo\Materialize\Form\Item;

use Nemundo\Html\Form\Input\InputType;

class MaterializePasswordTextBox extends MaterializeTextBox
{

    public function getHtml()
    {

        $this->inputType = InputType::PASSWORD;
        return parent::getHtml();

    }

}