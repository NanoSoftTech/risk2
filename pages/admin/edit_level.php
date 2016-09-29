        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ หมวดความเสี่ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
                <?php
                    $sqls = " SELECT * FROM sys_level_risk where lv_id ='".$_GET['getid']."' " ;
                    $results = mysql_query($sqls)or die($sqls);
                    $record = mysql_fetch_array($results);                    
                ?>
<form action="?page=<?php echo sha1('update_level') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <label >รหัสความเสี่ยง</label><input type="text" name="lv_code" id="lv_code" class="form-control" value="<?php echo $record['lv_code'] ?>" required="">
                    </div>
                </div>
                <div class="col-sm-8 ">
                    <div class="form-group">
                        <label >ชื่อความเสี่ยง</label><input type="text" name="lv_name" id="lv_name" class="form-control" value="<?php echo $record['lv_name'] ?>" required="">
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <label >คะแนนความเสี่ยง</label><input type="number" name="lv_score" id="lv_score" class="form-control" value="<?php echo $record['lv_score'] ?>" required="">
                    </div>
                    <input type="hidden" id="lv_id" name="lv_id" value="<?php echo $record['lv_id'] ?>">
                </div>
                <div class="col-sm-12">
                    <div class="form-group">   
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">
                    </div>
                </div>
            </form>
    </div>
</div>
