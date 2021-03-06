<?php

class SiteController
{

    public function actionIndex()
    {
        $username = '';
        $password = '';
        $email = '';
        $query_registration = false;
        if (isset($_POST['signUp'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $errors = false;

            if (!User::checkName($username)) {
                $errors[] = 'Name must be > 4 symbols';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be > 5 symbols';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Invalid email type!';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'This email already exists!';
            }
            if ($errors == false) {
                $query_registration = User::register($username, $email, $password);
                if ($query_registration && Mail::sendQuestionOfPayerEmail($email)) {
                    header("Location: /activate-account/200");
                }
            }
        } else if (isset($_POST['signIn'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($username)) {
                $errors[] = 'Login or password is incorrect.';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be > 5 symbols';
            }
            $userId = User::checkUserData($username, $password);

            if ($userId == false) {
                $errors[] = 'Login or password is incorrect!';
            } else {
                User::auth($userId);
                header("Location: /");
            }
        }
        require_once(ROOT . '/views/site/index-new.php');
        return true;
    }
}