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

    private $homeScoreQ1;

    private $homeScoreQ2;

    private $homeScoreQ3;

    private $homeScoreQ4;

    private $homeScoreQ5;

    private $homeTurnovers;

    private $awayTeam;

    private $awayScoreQ1;

    private $awayScoreQ2;

    private $awayScoreQ3;

    private $awayScoreQ4;

    private $awayScoreQ5;

    private $awayTurnovers;

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
     * @return the $awayScoreQ1
     */
    public function getAwayScoreQ1()
    {
        return $this->awayScoreQ1;
    }

    /**
     *
     * @param field_type $awayScoreQ1            
     */
    public function setAwayScoreQ1($awayScoreQ1)
    {
        $this->awayScoreQ1 = $awayScoreQ1;
    }

    /**
     *
     * @return the $awayScoreQ2
     */
    public function getAwayScoreQ2()
    {
        return $this->awayScoreQ2;
    }

    /**
     *
     * @param field_type $awayScoreQ2            
     */
    public function setAwayScoreQ2($awayScoreQ2)
    {
        $this->awayScoreQ2 = $awayScoreQ2;
    }

    /**
     *
     * @return the $awayScoreQ3
     */
    public function getAwayScoreQ3()
    {
        return $this->awayScoreQ3;
    }

    /**
     *
     * @param field_type $awayScoreQ3            
     */
    public function setAwayScoreQ3($awayScoreQ3)
    {
        $this->awayScoreQ3 = $awayScoreQ3;
    }

    /**
     *
     * @return the $awayScoreQ4
     */
    public function getAwayScoreQ4()
    {
        return $this->awayScoreQ4;
    }

    /**
     *
     * @param field_type $awayScoreQ4            
     */
    public function setAwayScoreQ4($awayScoreQ4)
    {
        $this->awayScoreQ4 = $awayScoreQ4;
    }

    /**
     *
     * @return the $awayScoreQ5
     */
    public function getAwayScoreQ5()
    {
        return $this->awayScoreQ5;
    }

    /**
     *
     * @param field_type $awayScoreQ5            
     */
    public function setAwayScoreQ5($awayScoreQ5)
    {
        $this->awayScoreQ5 = $awayScoreQ5;
    }

    /**
     *
     * @return the $awayTurnovers
     */
    public function getAwayTurnovers()
    {
        return $this->awayTurnovers;
    }

    /**
     *
     * @param field_type $awayTurnovers            
     */
    public function setAwayTurnovers($awayTurnovers)
    {
        $this->awayTurnovers = $awayTurnovers;
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
     * @return the $homeScoreQ1
     */
    public function getHomeScoreQ1()
    {
        return $this->homeScoreQ1;
    }

    /**
     *
     * @param field_type $homeScoreQ1            
     */
    public function setHomeScoreQ1($homeScoreQ1)
    {
        $this->homeScoreQ1 = $homeScoreQ1;
    }

    /**
     *
     * @return the $homeScoreQ2
     */
    public function getHomeScoreQ2()
    {
        return $this->homeScoreQ2;
    }

    /**
     *
     * @param field_type $homeScoreQ2            
     */
    public function setHomeScoreQ2($homeScoreQ2)
    {
        $this->homeScoreQ2 = $homeScoreQ2;
    }

    /**
     *
     * @return the $homeScoreQ3
     */
    public function getHomeScoreQ3()
    {
        return $this->homeScoreQ3;
    }

    /**
     *
     * @param field_type $homeScoreQ3            
     */
    public function setHomeScoreQ3($homeScoreQ3)
    {
        $this->homeScoreQ3 = $homeScoreQ3;
    }

    /**
     *
     * @return the $homeScoreQ4
     */
    public function getHomeScoreQ4()
    {
        return $this->homeScoreQ4;
    }

    /**
     *
     * @param field_type $homeScoreQ4            
     */
    public function setHomeScoreQ4($homeScoreQ4)
    {
        $this->homeScoreQ4 = $homeScoreQ4;
    }

    /**
     *
     * @return the $homeScoreQ5
     */
    public function getHomeScoreQ5()
    {
        return $this->homeScoreQ5;
    }

    /**
     *
     * @param field_type $homeScoreQ5            
     */
    public function setHomeScoreQ5($homeScoreQ5)
    {
        $this->homeScoreQ5 = $homeScoreQ5;
    }

    /**
     *
     * @return the $homeTurnovers
     */
    public function getHomeTurnovers()
    {
        return $this->homeTurnovers;
    }

    /**
     *
     * @param field_type $homeTurnovers            
     */
    public function setHomeTurnovers($homeTurnovers)
    {
        $this->homeTurnovers = $homeTurnovers;
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
        $this->homeScoreQ1 = (! empty($data['home_score_q1'])) ? $data['home_score_q1'] : null;
        $this->homeScoreQ2 = (! empty($data['home_score_q2'])) ? $data['home_score_q2'] : null;
        $this->homeScoreQ3 = (! empty($data['home_score_q3'])) ? $data['home_score_q3'] : null;
        $this->homeScoreQ4 = (! empty($data['home_score_q4'])) ? $data['home_score_q4'] : null;
        $this->homeScoreQ5 = (! empty($data['home_score_q5'])) ? $data['home_score_q5'] : null;
        $this->homeTurnovers = (! empty($data['home_turnovers'])) ? $data['home_turnovers'] : null;
        $this->awayTeam = (! empty($data['away_team'])) ? $data['away_team'] : null;
        $this->awayScore = (! empty($data['away_score'])) ? $data['away_score'] : null;
        $this->awayScoreQ1 = (! empty($data['away_score_q1'])) ? $data['away_score_q1'] : null;
        $this->awayScoreQ2 = (! empty($data['away_score_q2'])) ? $data['away_score_q2'] : null;
        $this->awayScoreQ3 = (! empty($data['away_score_q3'])) ? $data['away_score_q3'] : null;
        $this->awayScoreQ4 = (! empty($data['away_score_q4'])) ? $data['away_score_q4'] : null;
        $this->awayScoreQ5 = (! empty($data['away_score_q5'])) ? $data['away_score_q5'] : null;
        $this->awayTurnovers = (! empty($data['away_turnovers'])) ? $data['away_turnovers'] : null;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}