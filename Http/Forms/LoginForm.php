<?php
namespace Http\Forms;
use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function validate($email, $password)
    {
        if(!Validator::email($email)) {
            $this->errors['email'] = 'Email do not work.';
        }
        if(!Validator::string($password)) {
            $this->errors['password'] = 'Password do not work.';
        }
        return empty($this->errors);
    }
    public function errors()
    {
        return $this->errors;
    }
    public function error($field, $message)
    {
        return $this->errors[$field] = $message;
    }
}