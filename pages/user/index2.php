<?php

if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case sha1('main'):
                    if($user_fname ==""){
                        include "edit_profile.php";
                    }else{
                        include "main.php";
                    }
                    break;
                
                case sha1('profile'):
                    include "edit_profile.php";
                    break;
                case sha1('update_profile'):
                    include "../../controller/user/update_profile.php";
                    break;
                
                case sha1('add_risk'):
                    include "add_risk.php";
                    break;
                case sha1('insert_risk'):
                    include "../../controller/user/insert_risk.php";
                    break; 
                case sha1('view_risk'):
                    include "view_risk.php";
                    break; 
                case sha1('edit_risk'):
                    include "edit_risk.php";
                    break;
                case sha1('update_risk'):
                    include "../../controller/user/update_risk.php";
                    break;
                case sha1('cancel_risk'):
                    include "../../controller/user/cancel_risk.php";
                    break;
                
                case sha1('list_risk'):
                    include "list_risk.php";
                    break;
                case sha1('show_risk'):
                    include "show_risk.php";
                    break;
                case sha1('edit_man_risk'):
                    include "edit_man_risk.php";
                    break;
                case sha1('update_risk_status'):
                    include "../../controller/user/update_risk_status.php";
                    break;
                
                case sha1('report_main'):
                    include "report_main.php";
                    break;
                case sha1('rpt_001'):
                    include "rpt_001.php";
                    break;
                case sha1('rpt_002'):
                    include "rpt_002.php";
                    break;
                case sha1('rpt_003'):
                    include "rpt_003.php";
                    break;
                case sha1('rpt_004'):
                    include "rpt_004.php";
                    break;

                case sha1('rpt_005'):
                    include "rpt_005.php";
                    break; 
                case sha1('rpt_006'):
                    include "rpt_006.php";
                    break;
                case sha1('rpt_007'):
                    include "rpt_007.php";
                    break;
                
                case sha1('password'):
                    include "password.php";
                    break;
                case sha1('update_password'):
                    include "../../controller/user/update_password.php";
                    break;
					
                case sha1('logout'):
                    include "../../controller/user/logout.php";
                    break;
                case sha1('tester'):
                    include "tester.php";
                    break;
    }
    
} else {
        if($user_fname == ""){
             include "edit_profile.php";
        }else{
            include "main.php";
        }
}
?>