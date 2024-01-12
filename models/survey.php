<?php 

require "config.php";
require_once "vendor/autoload.php";
// CREATE TABLE
// `Survey` (
//     `ID` int(255) NOT NULL AUTO_INCREMENT,
//     `LastName` varchar(255) DEFAULT NULL,
//     `FirstName` varchar(255) DEFAULT NULL,
//     `MiddleInitial` varchar(10) DEFAULT NULL,
//     `BirthPLace` varchar(255) DEFAULT NULL,
//     `BirthDate` date DEFAULT NULL,
//     `Age` int(11) DEFAULT NULL,
//     `Gender` varchar(10) DEFAULT NULL,
//     `CivilStatus` varchar(20) DEFAULT NULL,
//     `Religion` varchar(100) DEFAULT NULL,
//     `Dialect` varchar(100) DEFAULT NULL,
//     `Education` varchar(255) DEFAULT NULL,
//     `Job` varchar(255) DEFAULT NULL,
//     `MonthLyIncome` varchar(255) DEFAULT NULL,
//     `PhoneNumber` varchar(255) NOT NULL,
//     `Email` varchar(255) DEFAULT NULL,
//     `Remarks` text DEFAULT NULL,
//     `year_added` int(11) DEFAULT NULL,
//     PRIMARY KEY (`ID`)
//     /*T![clustered_index] CLUSTERED */
// ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_bin AUTO_INCREMENT = 30001
// make a class for the Survey model and use the $conn for the connection

$db = new MysqliDb ($conn);
// using the $db that used the MysqliDb class make a Survey model that uses the Survey Table to get data
class Survey extends MysqliDb {
    protected $tableName = 'Survey';

    public function __construct($conn) {
        parent::__construct($conn);
    }

    public function getSurveyById($id) {
        $this->where('ID', $id);
        return $this->getOne($this->tableName);
    }

    public function getAllSurveys($limit) {
        return $this->get($this->tableName, $limit);
    }

    // show 20 results in one page and panginate it
    public function getPaginatedSurveys($limit, $page) {
        $this->where('ID >', $page * $limit);
        $this->where('ID <=', $page * $limit + $limit);
        return $this->get($this->tableName, $limit);
    }

   public function addSurvey($data) {
        return $this->insert($this->tableName, $data);
    }

    public function updateSurvey($id, $data) {
        $this->where('ID', $id);
        return $this->update($this->tableName, $data);
    }

    public function deleteSurvey($id) {
        $this->where('ID', $id);
        return $this->delete($this->tableName);
    }
    
}










?>