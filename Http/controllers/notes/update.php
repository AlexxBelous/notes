<?php
use Core\Database;
use Core\App;
use Core\Validator;

$currentUserId = 1;


$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();


authorize($note['user_id'] === $currentUserId);

$errors = [];

if (!Validator::string($_POST['body'], 3, 500)) {
    $errors['body'] = 'The field must not be empty, and must not have less than 3 or more than 500 characters.';
}

if(count($errors)) {
    return view("notes/edit.view.php", [
        'heading' => 'Note Edit',
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id', [
    'body' => $_POST['body'],
    'id' => $_POST['id']
]);
header('location: /notes');
die();