<?php


require __DIR__ . '/config.php';


class TestForm extends \Nemundo\Materialize\Form\MaterializeForm
{

    /**
     * @var \Nemundo\Materialize\Form\Item\MaterializeTextBox
     */
    private $eingabe;

    /**
     * @var \Nemundo\Materialize\Form\Item\MaterializeFileUpload
     */
    private $file;

    /**
     * @var \Nemundo\Package\Bootstrap\FormElement\BootstrapDatePicker
     */
    private $date;

    public function getHtml()
    {

        $this->eingabe = new \Nemundo\Materialize\Form\Item\MaterializeTextBox($this);
        $this->eingabe->label = 'Eingabe';
        $this->eingabe->name = 'eingabe';
        $this->eingabe->validation=true;

        $this->file= new \Nemundo\Materialize\Form\Item\MaterializeFileUpload($this);
        $this->file->label = 'File';

        $this->date=new \Nemundo\Materialize\Form\Item\MaterializeDatePicker($this);
        $this->date->label = 'Date';

        return parent::getHtml();

    }


    protected function onSubmit()
    {

        (new \Nemundo\Core\Debug\Debug())->write($_POST);
        exit;

    }


}


$document = new \Nemundo\Materialize\Document\MaterializeDocument();
$document->addHeaderContainer(new \Nemundo\Package\Jquery\Container\JqueryHeader());
$document->addPackage(new \Nemundo\Package\Jquery\Package\JqueryPackage());

new TestForm($document);


$document->render();

