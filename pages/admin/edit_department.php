        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ หน่วยงาน</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
                <?php
                    $sqls = " SELECT * FROM sys_department where dep_id ='".$_GET['getid']."' " ;
                    $results = mysql_query($sqls)or die($sqls);
                    $record = mysql_fetch_array($results);                    
                ?>
<form action="?page=<?php echo sha1('update_department') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ชื่อหน่วยงาน</label><input type="text" value="<?php echo $record['dep_name'] ?>" name="dep_name" id="dep_name" class="form-control" required="">
                    </div>
                    <input type="hidden" id="dep_id" name="dep_id" value="<?php echo $record['dep_id'] ?>">
                </div>
                <div class="col-sm-12">
                    <div class="form-group">   
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">
                    </div>
                </div>
            </form>
    </div>
</div>
