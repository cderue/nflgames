<?php
namespace NflgamesApi\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class GamesController extends AbstractActionController
{

    protected $gameTable;
    
    public function indexAction()
    {
        $teamId = $this->params()->fromQuery('team_id');
        if (! $teamId) {
            $teamId = 'ARI';
        }
        $games = $this->getGameTable()->getByTeam($teamId);
        
        return new JsonModel(array('games' => $games));
    }

    public function getGameTable()
    {
        if (! $this->gameTable) {
            $this->gameTable = $this->getServiceLocator()->get('Nflgames\Model\GameTable');
        }
        
        return $this->gameTable;
    }

    public function homeWinAction()
    {
        $teamId = $this->params()->fromQuery('team_id');
        if (! $teamId) {
            $teamId = 'ARI';
        }
        
        $games = $this->getGameTable()->getByHomeTeam($teamId);
        $stats = array();
        $winPreCount = 0;
        $winRegularCount = 0;
        $winPostCount = 0;
        foreach ($games as $game) {
            if ($game->getHomeScore() > $game->getAwayScore()) {
                switch ($game->getSeasonType()) {
                    case 'Preseason':
                        $winPreCount ++;
                        break;
                    case 'Regular':
                        $winRegularCount ++;
                        break;
                    case 'Postseason':
                        $winPostCount ++;
                        break;
                    default:
                        break;
                }
            }
        }
        
        $stats[] = array(
            'label' => 'Preseason',
            'value' => $winPreCount
        );
        $stats[] = array(
            'label' => 'Regular season',
            'value' => $winRegularCount
        );
        $stats[] = array(
            'label' => 'Postseason',
            'value' => $winPostCount
        );
        
        return new JsonModel(array('data' => $stats));
    }

    public function awayWinAction()
    {
         $teamId = $this->params()->fromQuery('team_id');
        if (! $teamId) {
            $teamId = 'ARI';
        }
        
        $games = $this->getGameTable()->getByAwayTeam($teamId);
        $stats = array();
        $winPreCount = 0;
        $winRegularCount = 0;
        $winPostCount = 0;
        foreach ($games as $game) {
            if ($game->getAwayScore() > $game->getHomeScore()) {
                switch ($game->getSeasonType()) {
                    case 'Preseason':
                        $winPreCount ++;
                        break;
                    case 'Regular':
                        $winRegularCount ++;
                        break;
                    case 'Postseason':
                        $winPostCount ++;
                        break;
                    default:
                        break;
                }
            }
        }
        
        $stats[] = array(
            'label' => 'Preseason',
            'value' => $winPreCount
        );
        $stats[] = array(
            'label' => 'Regular season',
            'value' => $winRegularCount
        );
        $stats[] = array(
            'label' => 'Postseason',
            'value' => $winPostCount
        );
        
        return new JsonModel(array('data' => $stats));
    }
}
