<?php

namespace App\Mvc\View;

use App\Mvc\Entity\User;

class UserView
{
    public function renderUserListPage(array $users): string
    {
        $content = '<h1>List users</h1>';
        /** @var User $user */
        $content .= '<ul>';
        foreach ($users as $user) {
            $content .= '<li>' . $user->getName() . '</li>';
        }
        $content .= '</ul>';

        return $content;
    }

    public function renderCreateUserPage(): string
    {
        return '<form><label for="fname">First name:</label><br>
<input type="text" id="fname" name="fname"><br>
<label for="lname">Last name:</label><br>
<input type="text" id="lname" name="lname">
</form>';
    }
}
