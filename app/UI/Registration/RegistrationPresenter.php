<?php

namespace App\UI\Registration;

use App\Model\UsersFacade;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;

final class RegistrationPresenter extends Presenter
{
    public function __construct(
        private UsersFacade $usersFacade
    ) {
        $this->usersFacade = $usersFacade;
    }

    protected function createComponentRegisterForm(): form
    {
        $form = new Form;

        $form->addText('fullname', 'Name and surname:')->setRequired('Enter your full name.');
        $form->addText('username', 'Custom username:')->setRequired('Enter your cool username.');
        $form->addEmail('email', 'Email:')->setRequired('Enter your main email address.');
        $form->addPassword('password', 'Password:')->setRequired('Enter your super secret password.');
        $form->addSubmit('submit', 'Register');
        $form->onSuccess[] = $this->registerFormSucceeded(...);

        return $form;
    }

    private function registerFormSucceeded(\stdClass $data): void
    {
        $this->usersFacade->insertUser((array) $data);

        $this->flashMessage('Registration successfull, please log in.', 'success');
        $this->redirect('Home:');
    }
}
