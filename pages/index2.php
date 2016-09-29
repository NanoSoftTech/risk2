<?php

if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case sha1('main'):
                    include "../pages/main.php";
                    break;
             
                case sha1('register'):
                    include "../pages/register.php";
                    break;
                case sha1('insert_register'):
                    include "../controller/insert_register.php";
                    break;
                case sha1('list_risk'):
                    include "list_risk.php";
                    break;

                case sha1('login'):
                    include "../pages/login.php";
                    break;
    }
    
} else {
    include "../pages/main.php";
}
?>