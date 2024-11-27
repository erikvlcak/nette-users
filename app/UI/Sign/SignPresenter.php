<?php

namespace App\UI\Sign;

use Nette;
use App\Model\DuplicateNameException;
use App\Model\UsersFacade;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;

final class SignPresenter extends Presenter
{
    public function __construct(
        private UsersFacade $usersFacade,
    ) {}

    //Sign IN
    protected function createComponentSignInForm(): Form
    {
        $form = new Form;

        $form->addText('username', 'Username:')
            ->setRequired('Please enter your username.')->setHtmlAttribute('class', 'form-control-lg');

        $form->addPassword('password', 'Password:')
            ->setRequired('Please enter your password.')->setHtmlAttribute('class', 'form-control-lg');

        $form->addSubmit('send', 'Sign In!')->setHtmlAttribute('class', 'btn btn-primary btn-lg');

        $form->onSuccess[] = function (Form $form, \stdClass $data): void {
            try {
                $identity = $this->usersFacade->authenticateUser($data->username, $data->password);
                $this->getUser()->login($identity);
                $this->flashMessage("You are now logged in. Welcome $data->username!", 'success');
                $this->redirect('List:show');
            } catch (Nette\Security\AuthenticationException) {
                $this->flashMessage('The username or password you entered is incorrect.', 'danger');
            }
        };
        return $form;
    }


    //Sign UP
    protected function createComponentSignUpForm(): Form
    {
        $form = $this->usersFacade->getForm(null);

        $form->onSuccess[] = function (Form $form, \stdClass $data): void {
            try {
                $this->usersFacade->add($data->fullname, $data->username, $data->email, $data->password);
                $this->flashMessage("Registration successfull, please sign in.", 'success');
                $this->redirect('List:show');
            } catch (Nette\Database\UniqueConstraintViolationException $e) {
                $this->flashMessage('Username or email are already taken.', 'danger');
            }
        };





        return $form;
    }


    //Log OUT
    public function renderOut($currentUser): void
    {
        $this->getUser()->logout();
        $this->template->currentUser = $currentUser;
    }
}
