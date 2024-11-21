<?php

namespace App\UI\Sign;

use Nette;
use App\Model\DuplicateNameException;
use App\Model\UserFacade;
use App\Model\UsersFacade;
use App\UI\Accessory\FormFactory;
use Nette\Application\Attributes\Persistent;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;

final class SignPresenter extends Presenter
{

    public function __construct(
        private UsersFacade $usersFacade,
    ) {}

    protected function createComponentSignInForm(): Form
    {
        $form = new Form;

        $form->addText('username', 'Enter username:')
            ->setRequired('Please enter your username.');

        $form->addPassword('password', 'Enter password:')
            ->setRequired('Please enter your password.');

        $form->addSubmit('send', 'Sign in');

        $form->onSuccess[] = function (Form $form, \stdClass $data): void {
            try {
                // Attempt to login user
                $this->getUser()->login($data->username, $data->password);
                $this->redirect('List:');
            } catch (Nette\Security\AuthenticationException) {
                $form->addError('Provided username or password is incorrect.');
            }
        };

        return $form;
    }

    protected function createComponentSignUpForm(): Form
    {
        $form = new Form;

        $form->addText('fullname', 'Your full name:')
            ->setHtmlAttribute('placeholder', 'Jane Doe')
            ->setRequired('Please enter your full name.');

        $form->addText('username', 'Your username:')
            ->setHtmlAttribute('placeholder', 'janedoe')
            ->setRequired('Please enter your username.');

        $form->addEmail('email', 'Your email:')
            ->setHtmlAttribute('placeholder', 'jane.doe@email.me')
            ->setRequired('Please enter your email.');

        $form->addPassword('password', 'New password:')
            ->setHtmlAttribute('placeholder', '12345')
            ->setRequired('Please create a new password.')
            ->addRule($form::MinLength, 'Password must have at least 5 characters.', 5);

        $form->addSubmit('send', 'Sign up');

        $form->onSuccess[] = function (Form $form, \stdClass $data): void {
            try {
                $this->userFacade->add($data->fullname, $data->username, $data->email, $data->password);
                $this->redirect('List:');
            } catch (DuplicateNameException) {
                $form->addError('Username or email are already taken.');
            }
        };

        return $form;
    }
    public function actionOut(): void
    {
        $this->getUser()->logout();
    }
}