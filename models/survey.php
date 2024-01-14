<?php 


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

//    function that will panginate the results for 20 data per page 
/**
     * Get paginated surveys.
     *
     * @param int $page The page number.
     * @param int $resultsPerPage The number of results per page. Default is 20.
     * @return array The paginated survey results.
     */
    public function getPaginatedSurveys($page, $resultsPerPage, $searchValue = '', $orderByColumn = 'FirstName', $orderDirection = 'ASC') {
        $offset = ($page - 1) * $resultsPerPage;
    
        // Get total count without any filters
        $this->withTotalCount();
        $totalRecords = $this->getValue($this->tableName, "count(*)");
    
        // Apply search filter if provided
        if (!empty($searchValue)) {
            $this->where('FirstName', '%' . $searchValue . '%', 'LIKE');
            $this->orWhere('LastName', '%' . $searchValue . '%', 'LIKE');
        }
    
        // Get total count with filters
        $this->withTotalCount();
        $filteredRecords = $this->getValue($this->tableName, "count(*)");
    
        // Apply ordering
        $this->orderBy($orderByColumn, $orderDirection);
    
        // Get paginated results
        $results = $this->get($this->tableName, [$offset, $resultsPerPage]);
    
        // Calculate total pages after filtering
        $totalPages = ceil($filteredRecords / $resultsPerPage);
    
        return [
            'draw' => $page, // Assuming 'draw' is equivalent to the current page number
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data' => $results,
            'totalPages' => $totalPages
        ];
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