<?php
namespace NflgamesApi\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class PlayersController extends AbstractRestfulController
{
    protected $playerTable;
     
    public function getPlayerTable()
    {
        if (!$this->playerTable) {
            $this->playerTable = $this->getServiceLocator()->get('Nflgames\Model\PlayerTable');
        }
    
        return $this->playerTable;
    }
    
    /*
     * (non-PHPdoc)
     * @see \Zend\Mvc\Controller\AbstractRestfulController::get()
     */
    public function get($id)
    {
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
        
        return new JsonModel(array('photo' => $photo, 'player' => $player->toArray())); 
    }

    /*
     * (non-PHPdoc)
     * @see \Zend\Mvc\Controller\AbstractRestfulController::getList()
     */
    public function getList()
    {
        // TODO Auto-generated method stub
    }
}
