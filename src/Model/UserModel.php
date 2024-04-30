<?php

namespace App\Mvc\Model;

use App\Mvc\Entity\User;

class UserModel
{
    /**
     *   Connect database => Get list users => return array users
     */
    public function getUsers(): array
    {
        return [
            new User(1, 'A', 12),
            new User(2, 'B', 25),
            new User(3, 'C', 31),
            new User(4, 'D', 46),
            new User(5, 'E', 17),
        ];
    }
}
