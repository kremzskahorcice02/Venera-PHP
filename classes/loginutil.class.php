<?php

    class LoginUtil {

        static function userlogged_in()
        {
            return(isset($_SESSION['sessionId']))?true:false;
        }

        static function user_restricted() {
            if (LoginUtil::userlogged_in()=== false)
            {
                header('Location: ..\login.php ');
                exit();
            } else if (time()-$_SESSION["login_time_stamp"] >3600) {
                session_unset();
                session_destroy();
                header("Location:login.php");
            }
        }
    }


?>