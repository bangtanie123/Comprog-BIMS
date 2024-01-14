<?php 
header('Content-Type: application/json');

require_once('../config.php');
require(ROOT_DIR . '/vendor/autoload.php');
require(ROOT_DIR . '/models/survey.php');

// DataTables parameters
$start = $_GET['start'] ?? 0;
$length = $_GET['length'] ?? 10;
$draw = $_GET['draw'] ?? 1;
$searchValue = $_GET['search']['value'] ?? '';
$orderColumnIndex = $_GET['order'][0]['column'] ?? 0;
$orderColumnName = $_GET['columns'][$orderColumnIndex]['data'] ?? 'FirstName';
$orderDirection = $_GET['order'][0]['dir'] ?? 'asc';

// Calculate the page number based on start and length
$page = ($start / $length) + 1;

// Generate a unique cache key
$cacheKey = md5("start={$start}&length={$length}&searchValue={$searchValue}&orderColumnName={$orderColumnName}&orderDirection={$orderDirection}");
$cacheFile = '../cache/' . $cacheKey . '.json'; // Path to cache file

// Cache settings
$cacheTime = 300; // Cache time in seconds (e.g., 300 seconds = 5 minutes)

// Check if a valid cache file exists
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTime) {
    // Serve the cached response
    $cachedData = file_get_contents($cacheFile);
    echo $cachedData;
    exit;
}

$Survey = new Survey($conn);

// Get the data from the database
$Surveys = $Survey->getPaginatedSurveys($page, $length, $searchValue, $orderColumnName, $orderDirection);

// Add 'draw' parameter to the response for DataTables
$Surveys['draw'] = intval($draw);

// Encode the data to JSON
$jsonData = json_encode($Surveys);

// Save the JSON data to the cache file
file_put_contents($cacheFile, $jsonData);

// Serve the response
echo $jsonData;
?>