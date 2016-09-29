        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ รายชื่อแผนก
                        <a href='?page=<?php echo sha1('add_sub_department');?>'><div class=' btn btn-primary '><i class='fa fa-plus-circle'></i> เพิ่ม</div></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th class="center">ชื่อ หน่วยงาน</th>
                                    <th class="center">ชื่อ รายชื่อแผนก</th>
                                    <th class="center">EDIT</th>
                                    <th class="center">DEL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sqls = " SELECT s.*,d.dep_name "
                                        . " FROM sys_sub_department s "
                                        . " left outer join sys_department d ON d.dep_id = s.dep_id "
                                        . " order by s.dep_id ";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr class= 'odd gradeX'>
                            <td>$record[dep_name]</td>
                            <td>$record[sub_name]</td>
                            <td align='center'><a href='?page=".sha1('edit_sub_department')."&getid=$record[sub_dep_id] '><i class='fa fa-wrench fa-fw'></i></a></td>
                            <td align='center'><a href='?page=".sha1('delete_sub_department')."&getid=$record[sub_dep_id] ' onclick='return checkDelete()'><i class='fa fa-trash-o fa-fw'></i></a></td>
                        </tr>";
                                }
                                ?>
                            </tbody>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                    <!-- /.table-responsive -->
    </div>

</div>
