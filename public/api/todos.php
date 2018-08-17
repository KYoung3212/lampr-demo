<?php

// echo '<pre>';
// print_r($_GET);
// print_r($_SERVER);
// echo '</pre>';

// echo '<br></br>';

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$output = [
    'success' => false
];

require_once('db_connect.php');

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'];
switch($method){
    case 'GET':
        require_once('get/'.$action.'.php');
    // $output['message'] = 'Get request made';
    // $output['action']= $action;
        break;
    case 'POST':
        require_once('post/'.$action.'.php');

        // $output['message'] = 'POST request made';
        break;
    case 'PUT':
        $output['message'] = 'PUT request made';
        break;
    case 'PATCH':
        $_PATCH = json_decode(file_get_contents('php://input'), true);

        require_once('patch/'.$action.'.php');

        $output['message'] = 'PATCH request made';
        break;
    case 'DELETE':
        $output ['message'] = 'DELETE request made';
        break;
    default: 
        $output['Error'] = 'Unknown request made';
}

$output = json_encode($output);
print $output;
?>