<?php

namespace Nemundo\Materialize\User;


use Nemundo\Bootstrap\FormElement\BootstrapPasswordTextBox;
use Nemundo\Materialize\Form\MaterializeForm;
use Nemundo\Materialize\FormItem\MaterializePasswordTextBox;
use Nemundo\User\Type\UserSessionType;

class MaterializePasswordChangeForm extends MaterializeForm
{

    /**
     * @var string
     */
    public $userId;

    /**
     * @var BootstrapPasswordTextBox
     */
    private $password;

    public function getHtml()
    {

        $this->submitButton->content = 'Change Password';

        $this->password = new MaterializePasswordTextBox($this);
        $this->password->label = 'New Password';
        $this->password->autofocus = true;
        $this->password->validation = true;

        return parent::getHtml();
    }


    protected function onSubmit()
    {

        $userSession = new UserSessionType();
        $userSession->changePassword($this->password->getValue());


        /*
        $password = $this->password->getValue();

        $userItem = new UserItem($this->userId);
        $userItem->changePassword($password);

        $userRow = (new UserReader())->getRowById($this->userId);

        $userLogin = new UserLogin();
        $userLogin->login =$userRow->login;
        $userLogin->password = $password;
        $userLogin->loginUser();

        $redirect = new UrlRedirect();
        $redirect->url = WebConfig::$webUrl;
        $redirect->redirect();*/

    }

}