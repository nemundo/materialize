<?php

namespace Nemundo\Materialize\User;



use Nemundo\Materialize\Form\Item\MaterializePasswordTextBox;
use Nemundo\Materialize\Form\MaterializeForm;
use Nemundo\User\Type\UserSessionType;

class MaterializePasswordChangeForm extends MaterializeForm
{

    /**
     * @var string
     */
    public $userId;

    /**
     * @var MaterializePasswordTextBox
     */
    private $password;

    public function getHtml()
    {

        $this->submitButton->label = 'Change Password';

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

    }

}