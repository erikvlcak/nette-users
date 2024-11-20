<?php

namespace App\Model;

use Nette;

final class UsersFacade
{
    public function __construct(
        private Nette\Database\Explorer $database,
    ) {}

    public function getDatabaseAccess()
    {
        return $this->database->table('users')->order('created_at DESC');
    }
}
