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
                    $sqls = " SELECT * FROM sys_category where cat_id ='".$_GET['getid']."' " ;
                    $results = mysql_query($sqls)or die($sqls);
                    $record = mysql_fetch_array($results);                    
                ?>
<form action="?page=<?php echo sha1('update_category') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ชื่อหมวด</label><input type="text" value="<?php echo $record['cat_name'] ?>" name="cat_name" id="cat_name" class="form-control" required="">
                    </div>
                    <input type="hidden" id="cat_id" name="cat_id" value="<?php echo $record['cat_id'] ?>">
                </div>
                <div class="col-sm-12">
                    <div class="form-group">   
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">
                    </div>
                </div>
            </form>
    </div>
</div>
