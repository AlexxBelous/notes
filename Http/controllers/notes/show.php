<?php
use Core\Database;
use Core\App;

$currentUserId = 1;


$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);


view("notes/show.view.php", [
    'heading' => 'My Note',
    'note' => $note
]);