<?php

namespace App\Mvc\Controller;

use App\Mvc\View\IndexView;

class IndexController
{
    private IndexView $indexView;
    public function __construct()
    {
        $this->indexView = new IndexView();
    }

    public function indexAction()
    {
        return $this->indexView->renderHomePage();
    }
}
