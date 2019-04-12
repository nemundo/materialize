<?php

require '../vendor/autoload.php';



\Nemundo\Web\WebConfig::$webPath = 'c:/test/web/';


$setup = new \Nemundo\Com\Package\PackageSetup();
$setup->addPackage(new \Nemundo\Materialize\Package\MaterializePackage());

