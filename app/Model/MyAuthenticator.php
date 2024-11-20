<?php

namespace App\Security;

use Nette;
use Nette\Security\Authenticator;
use Nette\Security\IIdentity;
use Nette\Security\AuthenticationException;
use Nette\Security\Passwords;
use Nette\Security\SimpleIdentity;
use App\Model\UsersFacade;

class MyAuthenticator implements Authenticator
{
    private UsersFacade $usersFacade;
    private Passwords $passwords;

    public function __construct(UsersFacade $usersFacade, Passwords $passwords)
    {
        $this->usersFacade = $usersFacade;
        $this->passwords = $passwords;
    }

    public function authenticate(array $credentials): IIdentity
    {
        [$username, $password] = $credentials;

        $row = $this->usersFacade->getUsersTable()
            ->where('username', $username)
            ->fetch();

        if (!$row) {
            throw new AuthenticationException('User not found.');
        }

        if (!$this->passwords->verify($password, $row->password)) {
            throw new AuthenticationException('Invalid password.');
        }

        return new SimpleIdentity(
            $row->id,
            $row->role, // or an array of roles
            ['name' => $row->username]
        );
    }
}
