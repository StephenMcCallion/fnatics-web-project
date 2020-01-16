<?php


class Unavailable
{
    protected $unavailableID, $userID, $teamID, $dateFrom, $dateTo;

    /**
     * Unavailable constructor.
     * @param $unavailableID
     * @param $userID
     * @param $teamID
     * @param $dateFrom
     */
    public function __construct($dbRow)
    {
        $this->unavailableID = $dbRow[''];
        $this->userID = $dbRow[''];
        $this->teamID = $dbRow[''];
        $this->dateFrom = $dbRow[''];
        $this->dateTo = $dbRow[''];
    }

    /**
     * @return mixed
     */
    public function getUnavailableID()
    {
        return $this->unavailableID;
    }

    /**
     * @param mixed $unavailableID
     */
    public function setUnavailableID($unavailableID): void
    {
        $this->unavailableID = $unavailableID;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID): void
    {
        $this->userID = $userID;
    }

    /**
     * @return mixed
     */
    public function getTeamID()
    {
        return $this->teamID;
    }

    /**
     * @param mixed $teamID
     */
    public function setTeamID($teamID): void
    {
        $this->teamID = $teamID;
    }

    /**
     * @return mixed
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * @param mixed $dateFrom
     */
    public function setDateFrom($dateFrom): void
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * @return mixed
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * @param mixed $dateTo
     */
    public function setDateTo($dateTo): void
    {
        $this->dateTo = $dateTo;
    }




}