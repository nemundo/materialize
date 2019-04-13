<?php

namespace Nemundo\Materialize\Form;


use Nemundo\Html\Form\Button\SubmitButton;

class MaterializeSubmitButton extends SubmitButton
{


    public function getHtml()
    {

        $this->addCssClass('btn waves-effect waves-light');
        $this->addCssClass('orange');


        return parent::getHtml();
    }

}