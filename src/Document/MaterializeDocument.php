<?php

namespace Nemundo\Materialize\Document;


use Nemundo\Com\Package\PackageTrait;
use Nemundo\Html\Document\HtmlDocument;
use Nemundo\Html\Header\Meta;
use Nemundo\Materialize\Package\MaterializePackage;
use Nemundo\Package\Jquery\Package\JqueryPackage;

class MaterializeDocument extends HtmlDocument
{

    use PackageTrait;


    protected function loadContainer()
    {

        parent::loadContainer();

        $this->addPackage(new JqueryPackage());
        $this->addPackage(new MaterializePackage());

        $meta = new Meta();
        $meta->addAttribute('name', 'viewport');
        $meta->addAttribute('content', 'width=device-width, initial-scale=1.0');
        $this->addHeaderContainer($meta);

    }


    public function getHtml()
    {

        //$this->addCssUrl('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
        //$this->addJsUrl('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');

      //  $this->addPackage(new MaterializePackage());

        return parent::getHtml();

    }

}