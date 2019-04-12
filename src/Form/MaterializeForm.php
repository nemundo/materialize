<?php

namespace Nemundo\Materialize\Form;


use Nemundo\Com\FormBuilder\AbstractFormBuilder;

class MaterializeForm extends AbstractFormBuilder
{

    /**
     * @var MaterializeSubmitButton
     */
    protected $submitButton;

    protected function loadContainer()
    {

        $this->submitButton = new MaterializeSubmitButton();


        parent::loadContainer();
    }


    public function getHtml()
    {

        $this->addContainer($this->submitButton);

        return parent::getHtml();
    }

    protected function onSubmit()
    {
    }


}