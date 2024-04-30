<?php

use App\Mvc\Controller\IndexController;
use App\Mvc\Controller\UserController;
use App\Mvc\View\GlobalView;

require_once 'vendor/autoload.php';

$globalView = new GlobalView();
$body = $globalView->renderMenu();

$method = $_SERVER['REQUEST_METHOD'];
switch ($_SERVER['REQUEST_URI']) {
    case '/users':
        $controller = new UserController();
        if ($method == 'POST') {
            $controller->createUserAction();
        }
        $body .= $controller->listUserAction();
        break;
    case '/create-users':
        $controller = new UserController();
        $body .= $controller->createUserAction();
        break;
    default:
        $indexController = new IndexController();
        $body .= $indexController->indexAction();
}
?>

<html lang="en">
<body>
<?php
echo $body
?>
</body>
</html>
