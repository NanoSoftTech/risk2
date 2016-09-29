        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">จัดการ รหัสผ่าน</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('update_password') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >PASSWORD OLD</label><input type="password" name="password_1" id="password_1" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >PASSWORD NEW</label><input type="password" name="password_2" id="password_2" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >PASSWORD NEW*</label><input type="password" name="password_3" id="password_3" class="form-control" required="">
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
