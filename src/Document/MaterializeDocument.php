<?php

namespace Nemundo\Materialize\Document;


use Nemundo\Com\Package\PackageTrait;
use Nemundo\Html\Document\HtmlDocument;
use Nemundo\Materialize\Package\MaterializePackage;

class MaterializeDocument extends HtmlDocument
{

    use PackageTrait;


    public function getHtml()
    {

        //$this->addCssUrl('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
        //$this->addJsUrl('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');

        $this->addPackage(new MaterializePackage());

        return parent::getHtml();

    }

}