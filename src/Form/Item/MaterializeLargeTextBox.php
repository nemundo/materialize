<?php

namespace Nemundo\Materialize\Form\Item;


use Nemundo\Com\FormBuilder\Item\AbstractLargeTextBox;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Formatting\Bold;

class MaterializeLargeTextBox extends AbstractLargeTextBox
{

    public function getHtml()
    {

        $this->prepareHtml();

        $this->tagName = 'div';
        $this->addCssClass('input-field');

        $this->textarea->addCssClass('materialize-textarea');

        $label = new Label();
        $label->content = $this->label;
        $label->for = $this->name;

        if ($this->showErrorMessage) {
            $bold = new Bold();
            $bold->content = $this->errorMessage;
            $label->content .= ' ' . $bold->getHtml();
        }

        $this->addContainer($this->textarea);
        $this->addContainer($label);

        return parent::getHtml();


    }

}