<?php

namespace App\UI\Data;

use App\UI\Accessory\RequireLogin;
use App\Model\UsersFacade;
use Nette\Application\UI\Form;
use Nette\Application\UI\Presenter;
use Nette\Database\UniqueConstraintViolationException;



final class DataPresenter extends Presenter
{

    private $id;
    use RequireLogin;
    public function __construct(
        private UsersFacade $usersFacade,
    ) {
        parent::__construct();
        $this->usersFacade = $usersFacade;
    }


    protected function createComponentAddUserForm(): Form
    {
        $this->id = $this->getParameter('id');
        $form = $this->usersFacade->getForm($this->id);

        $form->onSuccess[] = function (array $data): void {


            try {
                if ($this->id) {
                    if (empty($data['password'])) {
                        $data['password'] = $this->usersFacade->getUserById($this->id)->password;
                    }
                    $this->usersFacade->updateUser($this->id, (array) $data);
                    $this->flashMessage("User successfully updated.", 'success');
                } else {
                    $this->usersFacade->add($data['fullname'], $data['username'], $data['email'], $data['password']);
                    $this->flashMessage("New user successfully added to the database.", 'success');
                }
                $this->redirect('List:show');
            } catch (UniqueConstraintViolationException $e) {
                $this->flashMessage("Username or email already exists. Please choose a different one.", 'danger');
            }
        };

        return $form;
    }


    public function renderEdit(?int $id): void
    {
        if ($id) {
            $editedUser = $this->usersFacade->getUserById($id);
            if (!$editedUser) {
                $this->error('User not found.');
            }
            $form = $this->getComponent('addUserForm');
            if ($form instanceof Form) {
                $form->setDefaults($editedUser->toArray());
            }
            $this->template->selectedUser = $editedUser->username;
        } else {
            $this->template->selectedUser = null;
        }
    }


    public function renderDelete(int $id): void
    {
        if ($id === $this->getUser()->getIdentity()->id) {
            $this->flashMessage("Active user can not delete himself.", 'danger');
            $this->redirect('List:show');
        } else {
            $deletedUser = $this->usersFacade->getUserById($id);
            $this->usersFacade->deleteUser($id);
            $this->flashMessage("User $deletedUser->username has been deleted.", 'success');
            $this->redirect('List:show');
        }
    }
}
