<?php

declare(strict_types=1);

namespace App\Model;

use Nette;
use Nette\Security\IIdentity;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;
use Nette\Security\Passwords;
use Nette\Application\UI\Form;

final class UsersFacade implements Nette\Security\Authenticator
{
    public function __construct(
        private Nette\Database\Explorer $database,
        private Passwords $passwords,
    ) {}


    public function authenticate(array $credentials): Nette\Security\IIdentity
    {
        [$username, $password] = $credentials;
        $row = $this->database->table('users')->where('username', $username)->fetch();

        if (!$row) {
            throw new Nette\Security\AuthenticationException('The username is not correct.');
        } elseif (!$this->passwords->verify($password, $row->password)) {
            throw new Nette\Security\AuthenticationException('The password is not correct.');
        }

        $arr = $row->toArray();
        unset($arr['password']);
        return new Nette\Security\SimpleIdentity($row['id'], ['role'], $arr);
    }


    public function add(string $fullname, string $username, string $email, string $password): void
    {
        // Nette\Utils\Validators::assert($email, 'email');

        $this->database->table('users')->insert([
            'fullname' => $fullname,
            'username' => $username,
            'email' => $email,
            'password' => $this->passwords->hash($password),
        ]);
    }


    public function getUsers(): Selection
    {
        return $this->database->table('users');
    }

    public function authenticateUser(string $username, string $password): IIdentity
    {
        return $this->authenticate([$username, $password]);
    }


    public function updateUser(int $id, array $data): void
    {
        $data['password'] = $this->passwords->hash($data['password']);
        $this->getUsers()->where('id', $id)->update($data);
    }


    public function deleteUser(int $id): void
    {
        $this->getUsers()->where('id', $id)->delete();
    }


    public function getUserById(int $id): ?ActiveRow
    {
        return $this->getUsers()->get($id);
    }

    public function getForm(?int $id): Form
    {

        $form = new Form;

        $form->addText('fullname', 'New full name:')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please enter new full name.');

        $form->addText('username', 'New username:')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please enter new username.')
            ->addRule($form::MinLength, 'Must be at least %d characters long.', 2);

        $form->addEmail('email', 'New email:')
            ->setHtmlAttribute('class', 'form-control-lg')
            ->setRequired('Please enter new email.')
            ->addRule($form::Email, 'Please enter a valid email address.');

        if ($id) {
            $form->addPassword('password', 'New password:')
                ->setHtmlAttribute('class', 'form-control-lg')
                ->addRule($form::MinLength, 'Password must have at least %d characters.', 5);
        } else {
            $form->addPassword('password', 'New password:')
                ->setHtmlAttribute('class', 'form-control-lg')
                ->setRequired('Please create new password.')
                ->addRule($form::MinLength, 'Password must have at least %d characters.', 5);
        }

        // $form->addPassword('password', 'New password:')
        //     ->setHtmlAttribute('class', 'form-control-lg')
        //     ->setRequired('Please create new password.')
        //     ->addRule($form::MinLength, 'Password must have at least %d characters.', 5);

        $form->addSubmit('save', 'Confirm')->setHtmlAttribute('class', 'btn btn-success btn-lg');

        return $form;
    }
}


class DuplicateNameException extends \Exception {}
