<?php

use Core\Validator;
use Core\Database;
use Core\App;

$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];
if(!Validator::email($email)) {
    $errors['email'] = 'Please provide an valid email address.';
}
if(!Validator::string($password, 5, 50)) {
    $errors['password'] = 'Please provide a password of at least seven characters';
}

if(!empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors,

    ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if($user) {
    header('location: /');
    exit();
} else {
    $db->query('insert into users(email, password) values (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);

    $_SESSION['user'] = [
        'email' => $email
    ];

    header('location: /');
    exit();

}