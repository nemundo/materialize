# Materialize Css

Based on Html Rendering Engine


## Installation 
```
composer require nemundo/materialize
```

### Dev Installation
```
git submodule add https://github.com/nemundo/materialize.git lib/materialize
```


## Example
```
$document = new \Nemundo\Materialize\Document\MaterializeDocument();


$title = new \Nemundo\Html\Heading\H1($document);
$title->content = 'Materialize';

$p = new \Nemundo\Html\Paragraph\Paragraph($document);
$p->content = '123123123123123123123';



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
```