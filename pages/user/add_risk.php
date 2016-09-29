
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">บันทึกความเสี่ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('insert_risk') ?>" method="post" name="frm" id="frm" autocomplete="off" enctype='multipart/form-data' >
                <div class="col-sm-8 ">
                    <div class="form-group">
                        <label >ชื่อเรื่อง</label><input type="text" name="risk_name" id="risk_name" class="form-control" required="" autofocus="">
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <label >วันที่เกิดเหตุ</label>
                        <input class="form-control" type="date" name="risk_date" id="risk_date" required="">
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <label >เวลาเกิดเหตุ</label>
                        <input class="form-control" type="time" name="risk_time" id="risk_time" required="">
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >รายการความเสี่ยง</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"  id="sub_cat_id" name="sub_cat_id" required="">
                            <option value="">กรุณาเลือกความเสี่ยง</option>
                            <?php 
                                $sqlA = " SELECT * FROM sys_category ";
                                $resA = mysql_query($sqlA)or die(mysql_error());
                                while ($recA = mysql_fetch_array($resA)) {
								echo "<optgroup label='<h4>$recA[cat_name]</h4>'>";
									$sqlAA = " SELECT * FROM sys_sub_category where cat_id ='$recA[cat_id]' ";
									$resAA = mysql_query($sqlAA)or die(mysql_error());
									while ($recAA = mysql_fetch_array($resAA)) {
                    echo "<option data-tokens='".$recA[cat_name]." ".$recAA[sub_name]."' value='$recAA[sub_cat_id]'>".$recAA[sub_name]."</option>";
									}
							echo "</optgroup>";
								}							
                            ?>
                        </select>
                    </div>
                </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >สถานที่</label>
                        <input  class="form-control"  id="pl_name" name="pl_name" required="">
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >แจ้งความเสี่ยง ถึงฝ่าย</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"  id="sub_dep_id" name="sub_dep_id" required="">
                            <option value="">กรุณาเลือก แผนก</option>
			<?php 
                                $sqlC = " SELECT * FROM sys_department ";
                                $resC = mysql_query($sqlC)or die(mysql_error());
                                while ($recC = mysql_fetch_array($resC)) {
								echo "<optgroup label='<h4>$recC[dep_name]</h4>'>";
									$sqlCC = " SELECT * FROM sys_sub_department where dep_id ='$recC[dep_id]' ";
									$resCC = mysql_query($sqlCC)or die(mysql_error());
									while ($recCC = mysql_fetch_array($resCC)) {
                    echo "<option data-tokens='".$recC[dep_name]." ".$recCC[sub_name]."' value='$recCC[sub_dep_id]'>".$recCC[sub_name]."</option>";
									}
							echo "</optgroup>";
								}							
                            ?>
                        </select>
                    </div>
            </div>
 
         <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ปัจจัยความเสี่ยง</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"   id="type_id" name="type_id" required="">
                            <option value="">กรุณาเลือก ปัจัยความเสี่ยง</option>
                            <?php 
                                $sqlE = " SELECT * from sys_type_risk";
                                $resE = mysql_query($sqlE)or die(mysql_error());
                                while ($recE = mysql_fetch_array($resE)) {
                    echo "<option data-tokens='".$recE[type_name]."' value='$recE[type_id]'>".$recE[type_name]."</option>";
                                } 
                            ?>
                        </select>
                    </div>
            </div>

         <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ประเภทความรุนแรง</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"   id="group_id" name="group_id" required="">
                            <option value="">กรุณาเลือก ประเภทความรุนแรง</option>
                            <?php 
                                $sqlF = " SELECT * from sys_group_risk";
                                $resF = mysql_query($sqlF)or die(mysql_error());
                                while ($recF = mysql_fetch_array($resF)) {
                    echo "<option data-tokens='".$recF[group_name]."' value='$recF[group_id]'>".$recF[group_name]."</option>";
                                } 
                            ?>
                        </select>
                    </div>
            </div>
            
              <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >คาดการณ์ความเสี่ยง</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"   id="imp_id" name="imp_id" >
                            <option value="">กรุณาเลือก การคาดการณ์ความเสี่ยง</option>
                            <?php 
                                $sqlG = " SELECT * from sys_impact";
                                $resG = mysql_query($sqlG)or die(mysql_error());
                                while ($recG = mysql_fetch_array($resG)) {
                    echo "<option data-tokens='".$recG[imp_name]."' value='$recG[imp_id]'>".$recG[imp_name]."</option>";
                                } 
                            ?>
                        </select>
                    </div>
            </div>   
    
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ระดับความเสี่ยง</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"   id="lv_id" name="lv_id" required="">
                            <option value="">กรุณาเลือก ระดับความเสี่ยง</option>
                            <?php 
                                $sqlD = " SELECT * from sys_level_risk";
                                $resD = mysql_query($sqlD)or die(mysql_error());
                                while ($recD = mysql_fetch_array($resD)) {
                    echo "<option data-tokens='".$recD[lv_code]." : ".$recD[lv_name]."' value='$recD[lv_id]'>".$recD[lv_code]." : ".$recD[lv_name]."</option>";
                                } 
                            ?>
                        </select>
                    </div>
            </div>
    
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >เหตุการณ์ / รายละเอียด </label>
                        <div class="form-group">
                            <textarea class="form-control" name="risk_text" id="risk_text" rows="5"></textarea>
                        </div>
                    </div>
            </div>
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >ผู้บันทึก</label>
                        <div class="form-group">
                            <input class="form-control" name="user_fname" id="user_fname" value="<?php echo $user_fname; ?>" disabled>
                        </div>     
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >วันที่บันทึก</label>
                        <div class="form-group">
                            <input class="form-control" name="date_now" id="date_now" value="<?php echo $func->getDatetimeNow(); ?>" disabled>
                        </div>     
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group"> 
                        
                        <input type="submit" name="submit" id="submit" class="form-control btn-success " value="บันทึก">

                    </div>
                </div>
            </form>
    </div>
</div>
        </div>
