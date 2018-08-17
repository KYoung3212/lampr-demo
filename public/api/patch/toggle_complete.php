<?php
// echo 'This is a patch request';
// echo '<br><br>';

// print_r($_PATCH);
// $data = json_decode(file_get_contents('php://input'), true);
// print_r($_PATCH);
// print_r($data);
$id=$_PATCH['id'];
$complete = (INT) $_PATCH['complete'];
$query = "UPDATE `items`  SET `complete` = $complete WHERE `id`=$id";
$result = mysqli_query($conn, $query);
if(mysqli_affected_rows($conn) > 0) {
    $output['success'] = true;
}
?>