<?php

namespace Nemundo\Materialize\User;

use Nemundo\Materialize\Form\Item\MaterializePasswordTextBox;
use Nemundo\Materialize\Form\Item\MaterializeTextBox;
use Nemundo\Materialize\Form\MaterializeForm;
use Nemundo\User\Login\UserLogin;


class MaterializeLoginForm extends MaterializeForm
{

    /**
     * @var MaterializeTextBox
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

        $this->submitButton->label = 'Login';

        return parent::getHtml();

    }


    protected function onValidate()
    {

        $login = new UserLogin();
        $login->login = $this->login->getValue();
        $login->password = $this->password->getValue();
        $value = $login->loginUser();

        if (!$value) {
            $this->login->showErrorMessage = true;
        }

        return $value;

    }

}