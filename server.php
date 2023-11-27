
<?php

$todos_json = file_get_contents('./item.json');
$todos = json_decode($todos_json, true);

$response = [
  'success' => true,
  'results' => $todos,
];

header('Content-Type: application/json');
echo json_encode($response);

?>