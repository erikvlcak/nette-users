<?php

namespace App\UI\Sign;

use Nette;
use App\Model\DuplicateNameException;
use App\Model\UsersFacade;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Nette\Application\Attributes\Persistent;

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
            ->setRequired('Please enter your username.');

        $form->addPassword('password', 'Password:')
            ->setRequired('Please enter your password.');

        $form->addSubmit('send', 'Sign in');

        $form->onSuccess[] = function (Form $form, \stdClass $data): void {
            try {
                // Attempt to login user
                $identity = $this->usersFacade->authenticateUser($data->username, $data->password);
                $this->getUser()->login($identity);
                $this->flashMessage("You are now logged in. Welcome $data->username!", 'success');
                $this->redirect('List:show');
            } catch (Nette\Security\AuthenticationException) {
                $form->addError('The username or password you entered is incorrect.');
            }
        };
        return $form;
    }

    //Sign UP
    protected function createComponentSignUpForm(): Form
    {
        $form = new Form;

        $form->addText('fullname', 'Full name:')
            ->setHtmlAttribute('placeholder', 'Jane Doe')
            ->setRequired('Please enter your full name.');

        $form->addText('username', 'Username:')
            ->setHtmlAttribute('placeholder', 'janedoe')
            ->setRequired('Please enter your username.')
            ->addRule($form::MinLength, 'Must be at least %d characters long.', 2);

        $form->addEmail('email', 'Email:')
            ->setHtmlAttribute('placeholder', 'janedoe@email.me')
            ->setRequired('Please enter your email.')
            ->addRule($form::Email, 'Please enter a valid email address.');


        $form->addPassword('password', 'Password:')
            ->setHtmlAttribute('placeholder', '12345')
            ->setRequired('Please create a new password.')
            ->addRule($form::MinLength, 'Password must have at least %d characters.', 5);

        $form->addSubmit('send', 'Sign up');

        $form->onSuccess[] = function (Form $form, \stdClass $data): void {
            try {
                $this->usersFacade->add($data->fullname, $data->username, $data->email, $data->password);
                $this->flashMessage("Registration successfull, please sign in.", 'success');
                $this->redirect('List:show');
            } catch (DuplicateNameException) {
                $form->addError('Username or email are already taken.');
            }
        };

        return $form;
    }

    //Log OUT
    public function actionOut(): void
    {
        $this->getUser()->logout();
    }
}
