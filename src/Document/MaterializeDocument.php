<?php

namespace Nemundo\Materialize\Document;


use Nemundo\Html\Document\HtmlDocument;

class MaterializeDocument extends HtmlDocument
{

    public function getHtml()
    {

        $this->addCssUrl('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
        $this->addJsUrl('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');

        return parent::getHtml();
    }


}