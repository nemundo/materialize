<?php

namespace Nemundo\Materialize\Package;


use Nemundo\Com\Package\AbstractPackage;

class MaterializePackage extends AbstractPackage
{

    protected function loadPackage()
    {

        $this->addCss('css/materialize.css');

    }

}