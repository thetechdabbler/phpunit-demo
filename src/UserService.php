<?php
namespace Demo\App;

class UserService
{
    private $users = [];
    private $loggedInUsers = [];
    private $objMailer;

    public function __construct(Mailer $objMailer)
    {
        $this->objMailer = $objMailer;
    }

    public function register($username, $password)
    {
        if (isset($this->users[$username])) {
            return false; // User already exists
        }

        $this->users[$username] = password_hash($password, PASSWORD_BCRYPT);
        $result = $this->objMailer->sendWelcomeMail("user@email");
        if (!$result) {
            throw new \Exception('Mail not sent');
        }
        return true;
    }

    public function login($username, $password)
    {
        if (!isset($this->users[$username])) {
            return false; // User does not exist
        }

        if (password_verify($password, $this->users[$username])) {
            $this->loggedInUsers[$username] = true;
            return true;
        }

        return false; // Invalid password
    }

    public function isLoggedIn($username)
    {
        return isset($this->loggedInUsers[$username]);
    }

    public function logout($username)
    {
        if (isset($this->loggedInUsers[$username])) {
            unset($this->loggedInUsers[$username]);
        }
    }
}