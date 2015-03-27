<?php
namespace Nflgames\Model;

use Zend\Db\TableGateway\TableGateway;
//use Zend\Db\Sql\Where;
//use Zend\Db\Sql\Predicate\Expression;

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
    
    public function getByTeam($teamId)
    {
        //$where = new Where();
        //$where->addPredicate(new Like('home_team', $teamId));
        //$where->orPredicate(new Like('away_team', $teamId));
        $resultSet = $this->tableGateway->select("home_team = '" . $teamId . "' OR away_team = '" . $teamId . "' ORDER BY season_year DESC");
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