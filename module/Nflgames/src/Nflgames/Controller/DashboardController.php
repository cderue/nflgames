<?php

namespace Nflgames\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class DashboardController extends AbstractActionController
{
    protected $teamTable;
    
    protected $playerTable;
    
    protected $gameTable;
    
    public function getTeamTable()
    {
        if (!$this->teamTable) {
            $this->teamTable = $this->getServiceLocator()->get('Nflgames\Model\TeamTable');
        }
    
        return $this->teamTable;
    }
    
    public function getPlayerTable()
    {
        if (!$this->playerTable) {
            $this->playerTable = $this->getServiceLocator()->get('Nflgames\Model\PlayerTable');
        }
    
        return $this->playerTable;
    }
    
    public function getGameTable()
    {
        if (!$this->gameTable) {
            $this->gameTable = $this->getServiceLocator()->get('Nflgames\Model\GameTable');
        }
    
        return $this->gameTable;
    }
    
    public function indexAction()
    {  
        $teams = $this->getTeamTable()->fetchAll();  
        $teams2 = $this->getTeamTable()->fetchAll();
        $teamsArr = array();
        
        /* Hack for Z-Ray */
        if (!isset($_SESSION['teams'])) {
            foreach ($teams2 as $team) {
                $teamsArr[$team->getId()] = $team->getCity()  . ' ' . $team->getName();
            }
            $_SESSION['teams'] = $teamsArr;
        } else {
            $teamsArr = $_SESSION['teams'];
        }
        
        $teamId = $this->params()->fromQuery('team_id');
        if (!$teamId) {
            $teamId = 'ARI';   
        }
        
        if (strlen((string)$teamId) > 3) {
            throw new \Exception('Bad team identifier!');
        }
        
        $players = $this->getPlayerTable()->getByTeam($teamId);
        
        $homeGamesCount = $this->getGameTable()->getByHomeTeam($teamId)->count();
        $awayGamesCount = $this->getGameTable()->getByAwayTeam($teamId)->count();
        
        return array('homeGamesCount' => $homeGamesCount, 'awayGamesCount' => $awayGamesCount, 'teamId' => $teamId, 'teams' => $teams, 'players' => $players);
    }
}
