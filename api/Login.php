<?php
require_once 'config.php';

// Add your login logic here
// Example:
// $inData = getRequestInfo();
// $username = $inData["username"];
// $password = $inData["password"];
//
// $conn = getDbConnection();
// if ($conn === null)
// {
//     returnWithError("Database connection failed");
// }
// else
// {
//     // Your login query here
// }

function getRequestInfo()
{
        return json_decode(file_get_contents('php://input'), true);
}

function sendResultInfoAsJson( $obj )
{
        header('Content-type: application/json');
        echo $obj;
}

function returnWithError( $err )
{
        $retValue = '{"id":0,"firstName":"","lastName":"","error":"' . $err . '"}';
        sendResultInfoAsJson( $retValue );
}
?>
