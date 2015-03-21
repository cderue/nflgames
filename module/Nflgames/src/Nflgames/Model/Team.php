<?php
namespace Nflgames\Model;

class Team
{

    private $id;

    private $name;

    private $city;

    /**
     *
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @param field_type $id            
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param field_type $name            
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return the $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     *
     * @param field_type $city            
     */
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    public function exchangeArray($data)
    {
        $this->id   = (!empty($data['team_id'])) ? $data['team_id'] : null;
        $this->name = (!empty($data['name'])) ? $data['name'] : null;
        $this->city = (!empty($data['city'])) ? $data['city'] : null;
    }
}