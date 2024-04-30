<?php

namespace App\Mvc\Controller;

use App\Mvc\Model\UserModel;
use App\Mvc\View\UserView;

class UserController
{
    private UserView $userView;
    private UserModel $userModel;

    public function __construct()
    {
        $this->userView = new UserView();
        $this->userModel = new UserModel();
    }

    public function listUserAction(): string
    {
        $users = $this->userModel->getUsers();
        return $this->userView->renderUserListPage($users);
    }

    public function createUserAction(): string
    {
        return $this->userView->renderCreateUserPage();
    }
}
