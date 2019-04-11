<?php

namespace Nemundo\Materialize\Form;


use Nemundo\Html\Form\Button\SubmitButton;

class MaterializeSubmitButton extends SubmitButton
{


    public function getHtml()
    {

        $this->addCssClass('btn waves-effect waves-light');

        return parent::getHtml();
    }


    /*
<button class="btn waves-effect waves-light" type="submit" name="action">Submit
<i class="Materialize-icons right">send</i>
</button>*/

}