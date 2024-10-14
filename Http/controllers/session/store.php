<?php
use Http\Forms\LoginForm;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if($form->validate($email, $password)) {
    if((new Authenticator)->attempt($email, $password)) {
        redirect('/');
    }
    $form->error('password', 'Pass or Email do not work.');
}

return view('session/create.view.php', [
    'errors' => $form->errors()
]);