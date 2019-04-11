<?php

namespace Nemundo\Materialize\FormItem;


use Nemundo\Com\FormBuilder\Item\AbstractTextBox;
use Nemundo\Html\Form\Formatting\Label;

class MaterializeTextBox extends AbstractTextBox
{

    public function getHtml()
    {

        $this->prepareHtml();

        $this->tagName = 'div';
        $this->addCssClass('input-field');
        //$this->textInput->addCssClass('form-control');

        $label = new Label();
        $label->content = $this->label;
        $label->for = $this->name;

        /*if ($this->showErrorMessage) {

            $bold = new Bold();
            $bold->addCssClass('form-control-label');
            $bold->content = $this->errorMessage;

            $label->content .= ' ' . $bold->getHtml();
            $this->addCssClass('has-danger');
            $this->textInput->addCssClass('form-control-danger');
        }*/


        $this->addContainer($this->textInput);
        $this->addContainer($label);


        /*<div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>*/

        return parent::getHtml();

    }


}