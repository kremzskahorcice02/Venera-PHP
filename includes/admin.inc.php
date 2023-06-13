<?php

class Admin {
    private $username;
    private $password;

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($newName) {
        $this->username = $newName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($newPass) {
        $this->password = $newPass;
    }
}


?>
