<?php
namespace Nflgames\Model;

class Player
{

    private $id;

    private $fullname;

    private $position;

    private $height;

    private $weight;

    private $birthdate;
    
    private $college;

    private $experience;
    
    private $profileUrl;

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
     * @param
     *            Ambigous <NULL, unknown> $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @return the $fullname
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, unknown> $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     *
     * @return the $position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, unknown> $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     *
     * @return the $height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     *
     * @param field_type $height            
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     *
     * @return the $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     *
     * @param field_type $weight            
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     *
     * @return the $birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     *
     * @param
     *            Ambigous <NULL, unknown> $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return the $college
     */
    public function getCollege()
    {
        return $this->college;
    }

 /**
     * @param field_type $college
     */
    public function setCollege($college)
    {
        $this->college = $college;
    }

 /**
     *
     * @return the $experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     *
     * @param field_type $experience            
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return the $profileUrl
     */
    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

 /**
     * @param field_type $profileUrl
     */
    public function setProfileUrl($profileUrl)
    {
        $this->profileUrl = $profileUrl;
    }

    public function exchangeArray($data)
    {
        $this->id = (! empty($data['player_id'])) ? $data['player_id'] : null;
        $this->fullname = (! empty($data['full_name'])) ? $data['full_name'] : null;
        $this->position = (! empty($data['position'])) ? $data['position'] : null;
        $this->height = (! empty($data['height'])) ? $data['height'] : null;
        $this->weight = (! empty($data['weight'])) ? $data['weight'] : null;
        $this->birthdate = (! empty($data['birthdate'])) ? $data['birthdate'] : null;
        $this->college = (! empty($data['college'])) ? $data['college'] : null;
        $this->experience = (! empty($data['years_pro'])) ? $data['years_pro'] : null;
        $this->profileUrl = (! empty($data['profile_url'])) ? $data['profile_url'] : null;
    }
    
    public function toArray() 
    {
        return get_object_vars($this);
    }
}