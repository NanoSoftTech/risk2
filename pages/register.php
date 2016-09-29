        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">สมัครเข้าใช้งานระบบ</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('insert_register') ?>" method="post" name="frm" id="frm" autocomplete="off">
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >USERNAME</label><input type="text" name="user_username" id="user_username" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >PASSWORD</label><input type="password" name="password_1" id="password_1" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >PASSWORD *</label><input type="password" name="password_2" id="password_2" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ชื่อ - สกุล *</label><input type="text" name="user_fname" id="user_fname" class="form-control" required="">
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ชื่อแผนก</label>
                        <select class="form-control selectpicker show-tick" data-live-search="true" id="dep_id" name="dep_id" required="">
                            <?php 
                                $sqlC = " SELECT * FROM sys_department ";
                                $resC = mysql_query($sqlC)or die(mysql_error());
                                while ($recC = mysql_fetch_array($resC)) {
								echo "<optgroup label='<h4>$recC[dep_name]</h4>'>";
									$sqlCC = " SELECT * FROM sys_sub_department where dep_id ='$recC[dep_id]' ";
									$resCC = mysql_query($sqlCC)or die(mysql_error());
									while ($recCC = mysql_fetch_array($resCC)) {
                    echo "<option data-tokens='".$recCC[sub_name]."' value='$recCC[sub_dep_id]'>".$recCC[sub_name]."</option>";
									}
							echo "</optgroup>";
								}							
                            ?>
                        </select>
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
