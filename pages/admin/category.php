        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ หมวดความเสี่ยง
                        <a href='?page=<?php echo sha1('add_category');?>'><div class=' btn btn-primary '><i class='fa fa-plus-circle'></i> เพิ่ม</div></a>
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
                                    <th>CAT_ID</th>
                                    <th>ชื่อ หมวดความเสี่ยง</th>
                                    <th>EDIT</th>
                                    <th>DEL</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 16;">
                                <?php
                                $sqls = " SELECT * FROM sys_category";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                    echo "<tr>
                            <td>$record[cat_id]</td>
                            <td>$record[cat_name]</td>
                            <td align='center'><a href='?page=".sha1('edit_category')."&getid=$record[cat_id] '><i class='fa fa-wrench fa-fw'></i></a></td>
                            <td align='center'><a href='?page=".sha1('delete_category')."&getid=$record[cat_id] ' onclick='return checkDelete()'><i class='fa fa-trash-o fa-fw'></i></a></td>
                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><i class="fa fa-database"></i>
                    <!-- /.table-responsive -->
    </div>
</div>