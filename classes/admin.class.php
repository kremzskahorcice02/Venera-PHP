<?php

class Admin extends Db{
    
    protected function searchAdmin($name) {
        
        try {
            $sql = "SELECT * FROM admin WHERE name = ?";
            $conn = $this->connect();
            $stmt = $conn->prepare($sql);

            $stmt->bind_param("s", $name);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                return $result->fetch_assoc();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            header("location:..\login.php?error=noconn");
        }
    }

    protected function saveAdmin($name, $password_hash) {
        $sql = "INSERT INTO admin (name, password) VALUES (?,?)";
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $name, $password_hash);

        if(!$stmt->execute()){
            header("location:..\login.php?error=noconn");
        }
    }

    protected function getAdmins() {
        try {
            $sql = "SELECT id, name FROM admin";
            return $this->connect() -> query($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
            header("location:..\login.php?error=noconn");
        }
    }
}
?>