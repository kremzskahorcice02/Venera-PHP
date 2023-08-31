<?php

    class LoginUtil {

        static function userlogged_in() {
            if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] === false) {
                return false;
            }
        }

        static function user_restricted() {
            if (LoginUtil::userlogged_in()=== false || time()-$_SESSION["login_time_stamp"] >3600) {
                $_SESSION = array();
                session_destroy();
                header('location: ..\login.php');
                exit();
            }
        }
    }
?>