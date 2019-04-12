<?php

require '../vendor/autoload.php';




$document = new \Nemundo\Materialize\Document\MaterializeDocument();


$navbar = new \Nemundo\Materialize\Navbar\MaterializeNavbar($document);
$navbar->addItem('Menu 1','');
$navbar->addItem('Menu 2','');
$navbar->addItem('Menu 3','');



$title = new \Nemundo\Html\Heading\H1($document);
$title->content = 'Materialize';

$p = new \Nemundo\Html\Paragraph\Paragraph($document);
$p->content = '123123123123123123123';


$btn = new \Nemundo\Materialize\Button\MaterializeButton($document);
$btn->site = new Nemundo\Web\Site\Site();
$btn->site->title = 'Reload';

$table = new \Nemundo\Html\Table\Table($document);

$thead = new \Nemundo\Html\Table\Thead($table);

$th = new \Nemundo\Html\Table\Th($thead);
$th->content = 'Row 1';

$th = new \Nemundo\Html\Table\Th($thead);
$th->content = 'Row 2';

$tr = new \Nemundo\Html\Table\Tr($table);

$td = new \Nemundo\Html\Table\Td($tr);
$td->content = 'first';

$td = new \Nemundo\Html\Table\Td($tr);
$td->content = 'second';



$document->render();
