<?php

namespace App\Model;

use Nette;
use Nette\Security\Passwords;
use Nette\Security\SimpleIdentity;

final class UsersFacade implements Nette\Security\Authenticator
{
    public function __construct(
        private Nette\Database\Explorer $database,
        private Passwords $passwords,
    ) {}

    public function authenticate(string $username, string $password): SimpleIdentity
    {
        $row = $this->database->table('users')->where('username', $username)->fetch();

        if (!$row) {
            throw new Nette\Security\AuthenticationException('The username is not correct.');
        } elseif (!$this->passwords->verify($password, $row->password)) {
            throw new Nette\Security\AuthenticationException('The password is not correct.');
        }

        return new SimpleIdentity(
            $row->id,
            $row->role,
            ['name' => $row->username],
        );
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
}

class DuplicateNameException extends \Exception {}
