<?php
namespace Nflgames\Model;

use Zend\Db\TableGateway\TableGateway;

class PlayerTable
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
    
    public function getByTeam($teamId) 
    {
        $resultSet = $this->tableGateway->select(array('team' => $teamId));
        return $resultSet;
    }
    
    public function getPlayer($id)
    {
        $rowset = $this->tableGateway->select(array('player_id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
}