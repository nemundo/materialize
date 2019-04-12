<?php

require __DIR__.'/config.php';

$setup = new \Nemundo\Com\Package\PackageSetup();
$setup->addPackage(new \Nemundo\Materialize\Package\MaterializePackage());
$setup->addPackage(new \Nemundo\Package\Jquery\Package\JqueryPackage());

