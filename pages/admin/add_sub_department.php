        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ รายชื่อแผนก</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('insert_sub_department') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-5 ">
                    <div class="form-group">
                        <label >ชื่อหน่วยงาน</label>
                        <select class="form-control" id="dep_id" name="dep_id" required="">
                            <?php
                                $sqls = " SELECT * FROM sys_department";
                                $results = mysql_query($sqls)or die($sqls);
                                while ($record = mysql_fetch_array($results)) {
                                echo "<option value='$record[dep_id]'>$record[dep_name]</option>";
                                };
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-7 ">
                    <div class="form-group">
                        <label >ชื่อแผนก</label><input type="text" name="sub_name" id="sub_name" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">   
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">
                    </div>
                </div>
            </form>
    </div>
</div>
