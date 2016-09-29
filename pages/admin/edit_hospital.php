        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ ชื่อโรงพยาบาล</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
                <?php
                    $sqls = " SELECT * FROM sys_hospital where hos_id ='1' " ;
                    $results = mysql_query($sqls)or die($sqls);
                    $record = mysql_fetch_array($results);                    
                ?>
<form action="?page=<?php echo sha1('update_hospital') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >รหัสสถานบริการ</label><input type="text" name="hos_code" id="hos_code" class="form-control" value="<?php echo $record['hos_code'] ?>" required="">
                    </div>
                    <input type="hidden" id="sub_cat_id" name="sub_cat_id" value="<?php echo $record['sub_cat_id'] ?>">
                </div>
                <div class="col-sm-7 ">
                    <div class="form-group">
                        <label >ชื่อสถานบริการ</label><input type="text" name="hos_name" id="hos_name" class="form-control" value="<?php echo $record['hos_name'] ?>" required="">
                    </div>
                    <input type="hidden" id="hos_id" name="hos_id" value="<?php echo $record['hos_id'] ?>">
                </div>
                <div class="col-sm-12">
                    <div class="form-group">   
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">
                    </div>
                </div>
            </form>
    </div>
</div>
