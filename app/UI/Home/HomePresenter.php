<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;
use Nette\Application\UI\Form;


final class HomePresenter extends Nette\Application\UI\Presenter
{

    // public function startup(): void
    // {
    //     parent::startup();

    //     if (!$this->getUser()->isLoggedIn()) {
    //         $this->redirect('Home:default');
    //     }
    // }
    protected function createComponentSignInForm(): Form
    {
        $form = new Form;

        $form->addText('username', 'Username:')->setRequired();
        $form->addPassword('password', 'Password:')->setRequired();
        $form->addSubmit('login', 'Enter');
        $form->onSuccess[] = $this->signInFormSucceeded(...);

        return $form;
    }

    private function signInFormSucceeded(Form $form, \stdClass $data): void
    {
        try {
            $this->getUser()->login($data->username, $data->password);
            $this->redirect('Dashboard:');
        } catch (Nette\Security\AuthenticationException $e) {
            $form->addError('Wrong username or password. Try again please.');
        }
    }
}
