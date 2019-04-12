<?php

namespace Nemundo\Materialize\FormItem;


use Nemundo\Html\Form\InputType;

class MaterializePasswordTextBox extends MaterializeTextBox
{

    public function getHtml()
    {
        $this->inputType = InputType::PASSWORD;
        return parent::getHtml();
    }

}