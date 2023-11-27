<?php
//recupero la lista di todo
$new_todo = $_POST['todo'] ?? '';

$response = [
  'success' => true,
];
//verifico i dati inseriti
if ($new_todo) {
// recupero l'arrei di oggetti dal mio file
  $todos_string = file_get_contents('./item.json');
 // decodifico il file
  $todos = json_decode($todos_string, true);

 // lo formatto per poterlo aggiungere nel array
  $todos[] = [ 
    'text' => $new_todo,
    'done' => true
  ];

  $response['results'] = $todos;

//ricodifico il file per poterlo passare dinuovo all'index
  $todos_string = json_encode($todos);

  file_put_contents('./item.json', $todos_string);
} else {

  $response['success'] = false;
  $response['message'] = 'Todo params is required!';
}


header('Content-type: application/json');
echo json_encode($response);
