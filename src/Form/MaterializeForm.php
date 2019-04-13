<?php

namespace Nemundo\Materialize\Form;


use Nemundo\Com\FormBuilder\AbstractFormBuilder;
use Nemundo\Core\Language\LanguageCode;

class MaterializeForm extends AbstractFormBuilder
{

    /**
     * @var MaterializeSubmitButton
     */
    protected $submitButton;

    protected function loadContainer()
    {

        $this->submitButton = new MaterializeSubmitButton();
        $this->submitButton->label = 'Save';
        //[LanguageCode::]


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