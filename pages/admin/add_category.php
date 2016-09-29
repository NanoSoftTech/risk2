        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ หมวดความเสี่ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('insert_category') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ชื่อหมวด</label><input type="text" name="cat_name" id="cat_name" class="form-control" required="">
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
