<?php

namespace App\UI\Action;

use App\UI\Accessory\RequireLogin;

use App\Model\UsersFacade;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;



final class ActionPresenter extends Presenter
{

    use RequireLogin;
    public function __construct(
        private UsersFacade $usersFacade,
    ) {
        parent::__construct();
        $this->usersFacade = $usersFacade;
    }

    protected function createComponentAddUserForm(): Form
    {
        $form = new Form;

        $form->addText('fullname', 'New full name:')
            ->setHtmlAttribute('placeholder', 'John Doe')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please enter new full name.');

        $form->addText('username', 'New username:')
            ->setHtmlAttribute('placeholder', 'John Doe')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please enter new username.')
            ->addRule($form::MinLength, 'Must be at least %d characters long.', 2);

        $form->addEmail('email', 'New email:')
            ->setHtmlAttribute('placeholder', 'johndoe@email.me')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please enter new email.')
            ->addRule($form::Email, 'Please enter a valid email address.');


        $form->addPassword('password', 'New password:')
            ->setHtmlAttribute('placeholder', '11111')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please create new password.')
            ->addRule($form::MinLength, 'Password must have at least %d characters.', 5);

        $form->addSubmit('save', 'Confirm')->setHtmlAttribute('class', 'btn btn-success btn-lg');

        $form->onSuccess[] = function (array $data): void {

            $id = $this->getParameter('id');

            if ($id) {
                $this->usersFacade->updateUser($id, $data);
                $this->flashMessage("User successfully updated.", 'success');
            } else {
                $this->usersFacade->add($data['fullname'], $data['username'], $data['email'], $data['password']);
                $this->flashMessage("New user successfully added to the database.", 'success');
            }

            $this->redirect('List:show');
        };

        return $form;
    }

    public function renderEdit(int $id): void
    {
        $editedUser = $this->usersFacade->getUserById($id);

        if (!$editedUser) {
            $this->template->selectedUser = null;
        }

        $form = $this->getComponent('addUserForm');
        if ($form instanceof Form) {
            $form->setDefaults($editedUser->toArray());
        }

        $this->template->selectedUser = $editedUser->username;
        $this->template->selectedUserId = $editedUser->id;
    }

    public function renderDelete(int $id): void
    {

        if ($id === $this->getUser()->getIdentity()->id) {
            $this->flashMessage("Active user can not delete himself.", 'error');
            $this->redirect('List:show');
        } else {
            $deletedUser = $this->usersFacade->getUserById($id);
            $this->usersFacade->deleteUser($id);
            $this->flashMessage("User $deletedUser->username has been deleted.", 'success');
            $this->redirect('List:show');
        }
    }
}
