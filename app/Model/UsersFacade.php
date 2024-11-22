<?php

declare(strict_types=1);

namespace App\Model;

use Nette\Security\IIdentity;


use Nette;
use Nette\Database\Table\ActiveRow;
use Nette\Database\Table\Selection;
use Nette\Security\Passwords;

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
        unset($arr['Password']);
        return new Nette\Security\SimpleIdentity($row['id'], ['role'], $arr);
    }

    public function add(string $fullname, string $username, string $email, string $password): void
    {
        Nette\Utils\Validators::assert($email, 'email');

        try {
            $this->database->table('users')->insert([
                'fullname' => $fullname,
                'username' => $username,
                'email' => $email,
                'password' => $this->passwords->hash($password),
            ]);
        } catch (Nette\Database\UniqueConstraintViolationException $e) {
            throw new DuplicateNameException;
        }
    }

    public function authenticateUser(string $username, string $password): IIdentity
    {
        return $this->authenticate([$username, $password]);
    }

    public function updateUser(int $id, array $data): void
    {
        $this->database->table('users')->where('id', $id)->update($data);
    }

    public function deleteUser(int $id): void
    {
        $this->database->table('users')->where('id', $id)->delete();
    }

    public function getUsers(): Selection
    {
        return $this->database->table('users');
    }

    public function getUserById(int $id): ?ActiveRow
    {
        return $this->database->table('users')->get($id);
    }
}

class DuplicateNameException extends \Exception {}
