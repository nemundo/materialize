<?php

namespace Nemundo\Materialize\Form\Item;


use Nemundo\Com\FormBuilder\Item\AbstractTextBox;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Formatting\Bold;

class MaterializeTextBox extends AbstractTextBox
{

    public function getHtml()
    {

        $this->prepareHtml();

        $this->tagName = 'div';
        $this->addCssClass('input-field');

        $label = new Label();
        $label->content = $this->label;
        $label->for = $this->name;

        if ($this->showErrorMessage) {
            $bold = new Bold();
            $bold->content = $this->errorMessage;
            $label->content .= ' ' . $bold->getHtml();
        }

        $this->addContainer($this->textInput);
        $this->addContainer($label);

        return parent::getHtml();

    }


}