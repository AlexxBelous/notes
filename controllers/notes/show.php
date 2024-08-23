<?php
use Core\Database;

$config = require base_path("config.php");

$currentUserId = 1;

$db = new Database($config['database'], 'root', 'root');

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);


view("notes/show.view.php", [
    'heading' => 'My Note',
    'note' => $note
]);