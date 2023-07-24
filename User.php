<?php
class User {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function save() {
        $user = $this->email . ',' . password_hash($this->password, PASSWORD_DEFAULT) . "\n";
        file_put_contents('users.txt', $user, FILE_APPEND);
    }

    public static function login($email, $password) {
        $users = file('users.txt');

        foreach ($users as $user) {
            list($savedEmail, $savedPassword) = explode(',', $user);

            if ($savedEmail == $email && password_verify($password, trim($savedPassword))) {
                return true;
            }
        }

        return false;
    }
}