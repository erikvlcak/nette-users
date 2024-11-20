<?php

namespace App\UI\Sign;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;

final class SignPresenter extends Presenter
{
    protected function createComponentSignInForm(): Form
    {
        $form = new Form;

        $form->addText('username', 'Username:')->setRequired();
        $form->addPassword('password', 'Password:')->setRequired();
        $form->addSubmit('login', 'Enter');
        $form->onSuccess[] = $this->signInFormSucceeded();

        return $form;
    }

    protected function createComponentRegisterForm(): form
    {
        $form = new Form;

        $form->addText('fullname', 'Name and surname:')->setRequired();
        $form->addText('username', 'Custom username:')->setRequired();
        $form->addEmail('email', 'Email:')->setRequired();
        $form->addPassword('password', 'Password:')->setRequired();
        $form->onSuccess[] = $this->registerFormSucceeded();

        return $form;
    }
}
