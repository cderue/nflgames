<?php
namespace NflgamesApi\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class GamesController extends AbstractActionController
{

    protected $gameTable;

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
        
        if (strlen((string)$teamId) > 3) {
            throw new \Exception('Bad team identifier!');
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
        
        if ($winPreCount > 0) {
            $stats[] = array(
                'label' => 'Preseason',
                'value' => $winPreCount
            );
        }
        if ($winRegularCount > 0) {
            $stats[] = array(
                'label' => 'Regular season',
                'value' => $winRegularCount
            );
        }
        if ($winPostCount > 0) {
            $stats[] = array(
                'label' => 'Postseason',
                'value' => $winPostCount
            );
        }
        
        return new JsonModel(array(
            'data' => $stats
        ));
    }

    public function awayWinAction()
    {
        $teamId = $this->params()->fromQuery('team_id');
        if (! $teamId) {
            $teamId = 'ARI';
        }
        
        if (strlen((string)$teamId) > 3) {
            throw new \Exception('Bad team identifier!');
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
        
        if ($winPreCount > 0) {
            $stats[] = array(
                'label' => 'Preseason',
                'value' => $winPreCount
            );
        }
        if ($winRegularCount > 0) {
            $stats[] = array(
                'label' => 'Regular season',
                'value' => $winRegularCount
            );
        }
        if ($winPostCount > 0) {
            $stats[] = array(
                'label' => 'Postseason',
                'value' => $winPostCount
            );
        }
        
        return new JsonModel(array(
            'data' => $stats
        ));
    }
}
