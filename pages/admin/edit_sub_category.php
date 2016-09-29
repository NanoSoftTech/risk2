        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ รายการความเสี่ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
                <?php
                    $sqls = " SELECT * FROM sys_sub_category where sub_cat_id ='".$_GET['getid']."' " ;
                    $results = mysql_query($sqls)or die($sqls);
                    $record = mysql_fetch_array($results);                    
                ?>
<form action="?page=<?php echo sha1('update_sub_category') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-5 ">
                    <div class="form-group">
                        <label >ชื่อหมวด</label>
                        <select class="form-control" id="cat_id" name="cat_id" required="">
            <option value="<?php echo $record['cat_id']?>"> <?php echo $func->getTable('sys_category','cat_name','cat_id',$record['cat_id']); ?></option>
                            <?php
                                $sqlQ = " SELECT * FROM sys_category";
                                $res = mysql_query($sqlQ)or die($sqlQ);
                                while ($rec = mysql_fetch_array($res)) {
                                echo "<option value='$rec[cat_id]'>$rec[cat_name]</option>";
                                };
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-7 ">
                    <div class="form-group">
                        <label >ชื่อความเสี่ยง</label><input type="text" name="sub_name" id="sub_name" class="form-control" value="<?php echo $record['sub_name'] ?>" required="">
                    </div>
                    <input type="hidden" id="sub_cat_id" name="sub_cat_id" value="<?php echo $record['sub_cat_id'] ?>">
                </div>
                <div class="col-sm-12">
                    <div class="form-group">   
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">
                    </div>
                </div>
            </form>
    </div>
</div>
