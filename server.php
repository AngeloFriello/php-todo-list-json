
<?php

$todos_php = file_get_contents('./item.php');
$todos = json_encode($todos_php, true);

$response = $todos

header('Content-Type: application/json');
echo json_encode($response);

?>