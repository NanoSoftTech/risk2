<?php

if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case sha1('main'):
                    include "main.php";
                    break;
                
                case sha1('category'):
                    include "category.php";
                    break;
                case sha1('add_category'):
                    include "add_category.php";
                    break;
                case sha1('insert_category'):
                    include "../../controller/admin/insert_category.php";
                    break;
                case sha1('edit_category'):
                    include "edit_category.php";
                    break;
                case sha1('update_category'):
                    include "../../controller/admin/update_category.php";
                    break;
                case sha1('delete_category'):
                    include "../../controller/admin/delete_category.php";
                    break;

                case sha1('sub_category'):
                    include "sub_category.php";
                    break;
                case sha1('add_sub_category'):
                    include "add_sub_category.php";
                    break;
                case sha1('insert_sub_category'):
                    include "../../controller/admin/insert_sub_category.php";
                    break;
                case sha1('edit_sub_category'):
                    include "edit_sub_category.php";
                    break;
                case sha1('update_sub_category'):
                    include "../../controller/admin/update_sub_category.php";
                    break;
                case sha1('delete_sub_category'):
                    include "../../controller/admin/delete_sub_category.php";
                    break;
 
                case sha1('department'):
                    include "department.php";
                    break;
                case sha1('add_department'):
                    include "add_department.php";
                    break;
                case sha1('insert_department'):
                    include "../../controller/admin/insert_department.php";
                    break;
                case sha1('edit_department'):
                    include "edit_department.php";
                    break;
                case sha1('update_department'):
                    include "../../controller/admin/update_department.php";
                    break;
                case sha1('delete_department'):
                    include "../../controller/admin/delete_department.php";
                    break;

                case sha1('sub_department'):
                    include "sub_department.php";
                    break;
                case sha1('add_sub_department'):
                    include "add_sub_department.php";
                    break;
                case sha1('insert_sub_department'):
                    include "../../controller/admin/insert_sub_department.php";
                    break;
                case sha1('edit_sub_department'):
                    include "edit_sub_department.php";
                    break;
                case sha1('update_sub_department'):
                    include "../../controller/admin/update_sub_department.php";
                    break;
                case sha1('delete_sub_department'):
                    include "../../controller/admin/delete_sub_department.php";
                    break;

                case sha1('place'):
                    include "place.php";
                    break;
                case sha1('add_place'):
                    include "add_place.php";
                    break;
                case sha1('insert_place'):
                    include "../../controller/admin/insert_place.php";
                    break;
                case sha1('edit_place'):
                    include "edit_place.php";
                    break;
                case sha1('update_place'):
                    include "../../controller/admin/update_place.php";
                    break;
                case sha1('delete_place'):
                    include "../../controller/admin/delete_place.php";
                    break;

                case sha1('level'):
                    include "level.php";
                    break;
                case sha1('add_level'):
                    include "add_level.php";
                    break;
                case sha1('insert_level'):
                    include "../../controller/admin/insert_level.php";
                    break;
                case sha1('edit_level'):
                    include "edit_level.php";
                    break;
                case sha1('update_level'):
                    include "../../controller/admin/update_level.php";
                    break;
                case sha1('delete_level'):
                    include "../../controller/admin/delete_level.php";
                    break;
                
                case sha1('member'):
                    include "member.php";
                    break;
                case sha1('register'):
                    include "register.php";
                    break;
                case sha1('insert_register'):
                    include "../../controller/admin/insert_register.php";
                    break;
                 case sha1('edit_register'):
                    include "edit_register.php";
                    break;
                case sha1('update_register'):
                    include "../../controller/admin/update_register.php";
                    break;
                case sha1('reset_password'):
                    include "../../controller/admin/reset_password.php";
                    break;
                case sha1('delete_member'):
                    include "../../controller/admin/delete_member.php";
                    break;
                
                case sha1('profile'):
                    include "edit_profile.php";
                    break;
                case sha1('update_profile'):
                    include "../../controller/admin/update_profile.php";
                    break;
                
                case sha1('password'):
                    include "password.php";
                    break;
                case sha1('update_password'):
                    include "../../controller/admin/update_password.php";
                    break;
                
                case sha1('edit_hospital'):
                    include "edit_hospital.php";
                    break;
                case sha1('update_hospital'):
                    include "../../controller/admin/update_hospital.php";
                    break;
                
                
                case sha1('view_risk'):
                    include "view_risk.php";
                    break;
                case sha1('list_risk'):
                    include "list_risk.php";
                    break;
                case sha1('edit_risk'):
                    include "edit_risk.php";
                    break;
                case sha1('update_risk'):
                    include "../../controller/admin/update_risk.php";
                    break;
                case sha1('delete_risk'):
                    include "../../controller/admin/delete_risk.php";
                    break;
                
                case sha1('logout'):
                    include "../../controller/admin/logout.php";
                    break;
                case sha1('optimize'):
                    include "../../controller/admin/optimize_table.php";
                    break;
               
    }
    
} else {
    include "main.php";
}
?>