<?php
namespace Nflgames\Model;

use Zend\Db\TableGateway\TableGateway;

class GameTable
{
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getByHomeTeam($teamId) 
    {
        $resultSet = $this->tableGateway->select(array('home_team' => $teamId));
        return $resultSet;
    }
    
    public function getByAwayTeam($teamId)
    {
        $resultSet = $this->tableGateway->select(array('away_team' => $teamId));
        return $resultSet;
    }
    
    public function getGame($id)
    {
        $rowset = $this->tableGateway->select(array('player_id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
}