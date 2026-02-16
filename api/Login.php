<?php
require_once 'config.php';

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