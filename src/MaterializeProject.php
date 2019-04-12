<?php

namespace Nemundo\Materialize;


use Nemundo\Project\AbstractProject;

class MaterializeProject extends AbstractProject
{

    protected function loadProject()
    {
        $this->path = __DIR__;
    }

}