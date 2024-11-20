<?php

namespace App\Model;

use Nette\Database\Explorer;

final class UsersFacade
{
    public function __construct(
        private Explorer $database,
    ) {
        $this->database = $database;
    }

    public function getUsersTable()
    {
        return $this->database->table('users');
    }

    public function insertUser(array $data): void
    {
        $this->getUsersTable()->insert($data);
    }
}
