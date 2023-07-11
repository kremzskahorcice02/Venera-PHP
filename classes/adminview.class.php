<?php

class AdminView extends Admin{

    public function __construct() {
    }

    public function showAllAdmins() {
        $admins = $this->getAdmins();
        if ($admins -> num_rows > 0) {
            while ($row = $admins -> fetch_assoc()) {
                echo '<div>
                <form method="post" action="..\includes\delete-admin.inc.php">
                    <input type="hidden" name="id" value="' . $row['id'] . '"/>
                    <button type="submit" name="submit">X</button>
                </form>
                <p>' . $row['name'] . '</p></div>';
            }
        }
    }
}