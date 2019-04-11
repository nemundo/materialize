<?php

namespace Nemundo\Materialize\Form;


use Nemundo\Html\Form\AbstractSubmitForm;

class MaterializeForm extends AbstractSubmitForm
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

        return parent::getHtml(); // TODO: Change the autogenerated stub
    }

    protected function onSubmit()
    {
    }


}