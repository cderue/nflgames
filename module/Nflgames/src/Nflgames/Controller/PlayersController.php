<?php

namespace Nflgames\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class PlayersController extends AbstractActionController
{
    protected $playerTable;
    
   
    public function getPlayerTable()
    {
        if (!$this->playerTable) {
            $this->playerTable = $this->getServiceLocator()->get('Nflgames\Model\PlayerTable');
        }
        
        return $this->playerTable;
    }
    
    public function indexAction()
    {
        $teamId = $this->params()->fromQuery('team_id');
        if ($teamId) {
            $players = $this->getPlayerTable()->getByTeam($teamId);
        } else {
            $teamId = 'All';
            $players = $this->getPlayerTable()->fetchAll();
        }
        
        return array('teamId' => $teamId, 'players' => $players);
    }
    
    public function profileAction()
    {
        $id = $this->params()->fromRoute('id');
        $player = $this->getPlayerTable()->getPlayer($id);
        $html = file_get_contents($player->getProfileUrl());
        $document = new \DOMDocument();
        libxml_use_internal_errors(true);
        $document->loadHTML($html);
        
        $photo = '';
        $images = $document->getElementsByTagName('img');
        foreach ($images as $image) {
            $src = $image->getAttribute('src');
            if (strpos($src, '200x200')) {
                $photo = $src;
            }
        }
        
        return array('photo' => $photo, 'player' => $player);  
    }
}
