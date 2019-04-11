<?php

namespace Nemundo\Materialize\User;

use Nemundo\Core\Debug\Debug;
use Nemundo\Materialize\Form\MaterializeForm;
use Nemundo\Materialize\FormItem\MaterializePasswordTextBox;
use Nemundo\Materialize\FormItem\MaterializeTextBox;
use Nemundo\User\Login\UserLogin;
use Nemundo\User\Login\UserSession;

class MaterializeLoginForm extends MaterializeForm
{

    /**
     * @var \Nemundo\Materialize\Form\MaterializeTextBox
     */
    private $login;

    /**
     * @var MaterializePasswordTextBox
     */
    private $password;


    public function getHtml()
    {

        $this->login = new MaterializeTextBox($this);
        $this->login->label = 'Login';
        $this->login->autofocus = true;
        $this->login->errorMessage = 'Kein gültiges Login oder Passwort';

        $this->password = new MaterializePasswordTextBox($this);
        $this->password->label = 'Passwort';

        $this->submitButton->content = 'Login';

        return parent::getHtml();
    }


    protected function onValidate()
    {

        $returnValue = null;


        $login = new UserLogin();
        $login->login = $this->login->getValue();
        $login->password = $this->password->getValue();
        if ($login->loginUser()) {

            (new Debug())->write('successful');
            $returnValue = true;
        } else {

            (new Debug())->write('failed');
            $this->login->showErrorMessage = true;
            $returnValue = false;


        }


        exit;

        /*
                if (UserSession::login($this->login->getValue(), $this->password->getValue())) {
                    $returnValue = true;
                } else {

                    $this->login->showErrorMessage = true;
                    $returnValue = false;


                }*/

        return $returnValue;

    }

}