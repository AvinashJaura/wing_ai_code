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

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($dbConn, $_POST['id']);
    if ($id == null || $id == '') {
        $response['error'] = 'Id is either null or empty';
    } else {
        $sql_select_row = '
            SELECT
                *
            FROM
                business_table
            WHERE
                id = ' . $id . '
        ';
        $row_to_update = $dbConn->query($sql_select_row);
        if ($row_to_update->num_rows === 1) {
            //validation skiped, expecting post data is not null
            $post_data = array(
                'id' => mysqli_real_escape_string($dbConn, $_POST['id']),
//                'business_name' => mysqli_real_escape_string($dbConn, $_POST['business_name']),
//                'business_type' => mysqli_real_escape_string($dbConn, $_POST['business_type']),
                'region' => mysqli_real_escape_string($dbConn, $_POST['region']),
//                'business_start_date' => mysqli_real_escape_string($dbConn, $_POST['business_start_date']),
                'assistant_type' => mysqli_real_escape_string($dbConn, $_POST['assistant_type']),
                'plan_subscribed' => mysqli_real_escape_string($dbConn, $_POST['plan_subscribed']),
//                'last_modified' => mysqli_real_escape_string($dbConn, $_POST['last_modified']),
            );
            //Update row
            $sqlBlood = '
                UPDATE `business_table`
                SET 
                    `region` = "'. $region .'",
                    `assistant_type` = "'. $assistant_type .'",
                    `plan_subscribed` = "'. $plan_subscribed .'"
                WHERE
                    id = "'. $id .'"
                ;
            ';
            $update_result = $dbConn->query($sqlBlood);

            if ($update_result === true) {
                $response['success'] = true;
                $response['data'] = array('message' => 'Success, data updated');
            } else {
                $response['error'] = 'Sometthing went wrong while updating data';
            }
        } else {
            $response['error'] = "Unable to find row to edit";
        }
    }
} else {
    $response['error'] = 'Id not found';
}

echo json_encode($response);
