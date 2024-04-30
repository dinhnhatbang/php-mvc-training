<?php

namespace App\Mvc\View;

class GlobalView
{
    public function renderMenu(): string
    {
        $menu = [
            [
                'link' => '/users',
                'label' => 'Users',
            ],
            [
                'link' => '/create-users',
                'label' => 'Create a user',
            ]
        ];

        $content = '<ul>';
        foreach ($menu as $item) {
            $content .= '<li> <a href="' . $item['link'] . '">' . $item['label'] . '</a>';
        }

        $content .= '</ul>';

        return $content;
    }
}
