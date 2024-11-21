<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Nette\Security\Authenticator;

final class HomePresenter extends Presenter
{
    private Authenticator $authenticator;

    public function __construct(Authenticator $authenticator)
    {
        parent::__construct();
        $this->authenticator = $authenticator;
    }

    protected function createComponentSignInForm(): Form
    {
        $form = new Form;

        $form->addText('username', 'Username:')->setRequired();
        $form->addPassword('password', 'Password:')->setRequired();
        $form->addSubmit('login', 'Enter');
        $form->onSuccess[] = [$this, 'signInFormSucceeded'];

        return $form;
    }

    public function signInFormSucceeded(Form $form, \stdClass $data): void
    {
        try {
            $identity = $this->authenticator->authenticate($data->username, $data->password);
            $this->getUser()->login($identity);
            $this->redirect('Home:');
        } catch (Nette\Security\AuthenticationException $e) {
            $form->addError('Wrong username or password. Try again please.');
        }
    }
}
