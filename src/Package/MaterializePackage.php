<?php

namespace Nemundo\Materialize\Package;


use Nemundo\Com\Package\AbstractPackage;
use Nemundo\Materialize\MaterializeProject;

class MaterializePackage extends AbstractPackage
{

    protected function loadPackage()
    {

        $this->project = new MaterializeProject();
        $this->packageName = 'materialize';
        $this->addCss('css/materialize.min.css');
        $this->addJs('js/materialize.min.js');

    }

}