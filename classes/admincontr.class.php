<?php

class AdminContr extends Admin{

    private $name;
    private $pwd;

    public function __construct($name, $pwd) {
        $this->name = $name;
        $this->pwd = $pwd;
    }

    public function verifyLogin() {
        $this->checkCredentials();
    }

    private function checkCredentials() {
        $admin = $this->searchAdmin($this->name);
        if ($admin == null) {
            header("location:..\login.php?error=adminnotfound");
        } else if (!password_verify($this->pwd, $admin['password'])) {
            header("location:..\login.php?error=wrongpwd");
        }
    }
    

    public function verifyAndAddAdmin($pwdVerify) {
        if (empty($this->name) || empty($this->pwd || empty($pwdVerify))) {
            header("location:..\admin-add.php?error=shortfields");
        } elseif (strlen($this->name) < 8 || strlen($this->pwd) < 8) {
            header("location:..\admin-add.php?error=shortfields");
        } elseif ($this->pwd !== $pwdVerify) {
            header("location:..\admin-add.php?error=pwdnotsame");
        } elseif (!ctype_alnum($this->name)) {
            header("location:..\admin-add.php?error=wrongname");
        } elseif (!ctype_alnum($this->pwd)) {
            header("location:..\admin-add.php?error=wrongpwd");
        } else {
            $password_hash = password_hash($this->pwd, PASSWORD_DEFAULT);
            $this->saveAdmin($this->name, $password_hash);
            header("location:..\admin.php");
        }
    }

    public function deleteAdmin($id) {
        $sql = "DELETE FROM admin WHERE id = ?";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("s", $id);

        if (!$stmt->execute()) {
            header("location:..\admin.php?error=cannotdelete");
        }
    }
}
?>