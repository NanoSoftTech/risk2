        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ สถานที่เกิดเหตุ
                        <a href='?page=<?php echo sha1('add_place');?>'><div class=' btn btn-primary '><i class='fa fa-plus-circle'></i> เพิ่ม</div></a>
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
                                    <th>PL_ID</th>
                                    <th>ชื่อ สถานที่</th>
                                    <th>EDIT</th>
                                    <th>DEL</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 16;">
                                <?php
                                $sqls = " SELECT * FROM sys_place";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr>
                            <td>$record[pl_id]</td>
                            <td>$record[pl_name]</td>
                            <td align='center'><a href='?page=".sha1('edit_place')."&getid=$record[pl_id] '><i class='fa fa-wrench fa-fw'></i></a></td>
                            <td align='center'><a href='?page=".sha1('delete_place')."&getid=$record[pl_id] ' onclick='return checkDelete()'><i class='fa fa-trash-o fa-fw'></i></a></td>
                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><i class="fa fa-database"></i>
                    <!-- /.table-responsive -->
    </div>
</div>