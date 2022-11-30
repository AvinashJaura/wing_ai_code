<?php
/**
 * Hospital adds available blood samples
 */
//    error_reporting(E_ERROR | E_PARSE);

// include db connect class
require_once __DIR__ . '/db_connect.php';

//Creating Database connection
$db = new dbConnectionController;
$db->connect();
$dbConn = $db->getConn();

if ($db->is_connected != true) {
    var_dump('error');
    exit;
}
$response = array('success' => false, 'error' => null, 'data' => array());

//Checking if blood group exists in database
$sqlBG = '
        SELECT
            *
        FROM
            business_table
    ';
$resultBG = $dbConn->query($sqlBG);
if ($resultBG->num_rows > 0) {
    $rows = $resultBG->fetch_all(MYSQLI_ASSOC);
    $response['success'] = true;
    $response['data'] = $rows;
} else {
    $rows = array();
    $response['error'] = 'No row found';
}
echo json_encode($response);
