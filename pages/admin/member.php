        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ สมาชิก
                        <a href='?page=<?php echo sha1('register');?>'><div class=' btn btn-primary '><i class='fa fa-plus-circle'></i> เพิ่ม</div></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead style="font-size: 16;">
                                <tr>
                                    <th>USERNAME</th>
                                    <th>ชื่อสมาชิก</th>
                                    <th>หน่วยงาน</th> 
                                    <th>แผนก</th>
                                    <th>สถานะ</th>
                                    <th>EDIT</th>
                                    <th>RES</th>
                                    <th>DEL</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 16;">
                                <?php
                                $sqls = " SELECT u.username,u.user_id,u.user_fname,d.dep_name,s.sub_name,t.sta_name "
                                        . " FROM tb_user u"
                                        . " left outer join sys_sub_department s ON s.sub_dep_id = u.dep_id "
                                        . " left outer join sys_department d ON d.dep_id = s.dep_id "
                                        . " left outer join sys_user_status t ON t.sta_code = u.user_sta "
                                        . " group by u.user_id";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr>
                            <td>$record[username]</td>
                            <td>$record[user_fname]</td>
                            <td>$record[dep_name]</td>
                            <td>$record[sub_name]</td>
                            <td>$record[sta_name]</td>    
                            <td align='center'><a href='?page=".sha1('edit_register')."&getid=$record[user_id] '><i class='fa fa-wrench fa-fw'></i></a></td>
                            <td align='center'><a href='?page=".sha1('reset_password')."&getid=$record[user_id] ' onclick='return checkReset()'><i class='fa fa-refresh fa-fw'></i></a></td>
                            <td align='center'><a href='?page=".sha1('delete_member')."&getid=$record[user_id] ' onclick='return checkDelete()'><i class='fa fa-trash-o fa-fw'></i></a></td>
                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><i class="fa fa-database"></i>
                    <!-- /.table-responsive -->
    </div>
</div>