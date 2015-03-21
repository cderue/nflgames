<?php
namespace Nflgames\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class TeamsController extends AbstractActionController
{
    protected $teamTable;
     
    public function getTeamTable()
    {
        if (!$this->teamTable) {
            $this->teamTable = $this->getServiceLocator()->get('Nflgames\Model\TeamTable');
        }
    
        return $this->teamTable;
    }
    
    public function indexAction()
    {
        $teams = $this->getTeamTable()->fetchAll();
        return array('teams' => $teams);
    }
}
