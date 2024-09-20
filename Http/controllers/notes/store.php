<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::string($_POST['body'], 3, 500)) {
    $errors['body'] = 'The field must not be empty, and must not have less than 3 or more than 500 characters.';
}

if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Notes Create',
        'errors' => $errors
    ]);
}


$db->query('insert into notes(body, user_id) values (:body, :user_id)', [
    'body' => $_POST['body'],
    'user_id' => 1
]);
header('location: /notes');



