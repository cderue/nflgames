<?php

namespace Nflgames\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $this->redirect()->toUrl('/nflgames/teams');
    }
}
