<?php

namespace Nemundo\Materialize\Form\Item;


use Nemundo\Com\FormBuilder\Item\AbstractFileUpload;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Form\Input\TextInput;
use Nemundo\Html\Inline\Span;

class MaterializeFileUpload extends AbstractFileUpload
{

    public function getHtml()
    {

        $this->prepareHtml();

        $this->tagName = 'div';
        $this->addCssClass('file-field input-field');

        $div = new Div($this);
        $div->addCssClass('btn');

        $span = new Span($div);
        $span->content = $this->label;

        $div->addContainer($this->fileInput);


        $div = new Div($this);
        $div->addCssClass('file-path-wrapper');

        $input = new TextInput($div);
        $input->addCssClass('file-path validate');

        return parent::getHtml();

    }

}