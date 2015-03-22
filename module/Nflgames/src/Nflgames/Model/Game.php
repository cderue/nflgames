<?php
namespace Nflgames\Model;

class Game
{

    private $id;

    private $time;

    private $week;

    private $day;

    private $seasonYear;

    private $seasonType;

    private $homeTeam;

    private $homeScore;

    private $awayTeam;

    private $awayScore;

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
     * @return the $time
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     *
     * @param field_type $time            
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     *
     * @return the $week
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     *
     * @param field_type $week            
     */
    public function setWeek($week)
    {
        $this->week = $week;
    }

    /**
     *
     * @return the $day
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     *
     * @param field_type $day            
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     *
     * @return the $seasonYear
     */
    public function getSeasonYear()
    {
        return $this->seasonYear;
    }

    /**
     *
     * @param field_type $seasonYear            
     */
    public function setSeasonYear($seasonYear)
    {
        $this->seasonYear = $seasonYear;
    }

    /**
     *
     * @return the $seasonType
     */
    public function getSeasonType()
    {
        return $this->seasonType;
    }

    /**
     *
     * @param field_type $seasonType            
     */
    public function setSeasonType($seasonType)
    {
        $this->seasonType = $seasonType;
    }

    /**
     *
     * @return the $homeTeam
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     *
     * @param field_type $homeTeam            
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     *
     * @return the $homeScore
     */
    public function getHomeScore()
    {
        return $this->homeScore;
    }

    /**
     *
     * @param field_type $homeScore            
     */
    public function setHomeScore($homeScore)
    {
        $this->homeScore = $homeScore;
    }

    /**
     *
     * @return the $awayTeam
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     *
     * @param field_type $awayTeam            
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     *
     * @return the $awayScore
     */
    public function getAwayScore()
    {
        return $this->awayScore;
    }

    /**
     *
     * @param field_type $awayScore            
     */
    public function setAwayScore($awayScore)
    {
        $this->awayScore = $awayScore;
    }
    
    public function exchangeArray($data)
    {
        $this->id = (! empty($data['gamekey'])) ? $data['gamekey'] : null;
        $this->time = (! empty($data['start_time'])) ? $data['start_time'] : null;
        $this->week = (! empty($data['week'])) ? $data['week'] : null;
        $this->day = (! empty($data['day_of_week'])) ? $data['day_of_week'] : null;
        $this->seasonYear = (! empty($data['season_year'])) ? $data['season_year'] : null;
        $this->seasonType = (! empty($data['season_type'])) ? $data['season_type'] : null;
        $this->homeTeam = (! empty($data['home_team'])) ? $data['home_team'] : null;
        $this->homeScore = (! empty($data['home_score'])) ? $data['home_score'] : null;
        $this->awayTeam = (! empty($data['away_team'])) ? $data['away_team'] : null;
        $this->awayScore = (! empty($data['away_score'])) ? $data['away_score'] : null;
    }
    
    public function toArray()
    {
        return get_object_vars($this);
    }
}