<?php

class Session
{

    private $is_signed = false;
    public $user_id;
    public $message;

    function __construct()
    {
        session_start();
        $this->check_the_login();
        $this->check_message();
    }

    private function check_the_login()
    {
        if (isset($_SESSION['user_id'])) {
            $this->user_id = $_SESSION['user_id'];
            $this->is_signed = true;
        } else {
            unset($this->user_id);
            $this->is_signed = false;
        }
    }
    public function is_signed_in()
    {
        return $this->is_signed;
    }

    public function login($user)
    {
        if ($user) {
            //! $user -> id; 
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->is_signed = true;
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->is_signed = false;
    }

    public function message($msg = "")
    {
        if (!empty($msg)) {
            $_SESSION['message'] = $msg;
        } else
            return $this->message;
    }
    private function check_message()
    {
        if (isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
        } else
            $this->message = "";
    }
}

$session = new Session();
