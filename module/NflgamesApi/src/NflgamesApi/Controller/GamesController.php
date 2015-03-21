<?php
namespace NflgamesApi\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class GamesController extends AbstractRestfulController
{
    protected $gameTable;
     
    public function getGameTable()
    {
        if (!$this->gameTable) {
            $this->gameTable = $this->getServiceLocator()->get('Nflgames\Model\GameTable');
        }
    
        return $this->gameTable;
    }
    
    
}
