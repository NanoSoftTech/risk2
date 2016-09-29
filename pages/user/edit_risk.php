<?php
        $sqls = " SELECT 	r.*,c.cat_name,ct.sub_name as csub_name,d.dep_name,ds.sub_name as dsub_name,
				l.lv_name,l.lv_code,u.user_fname,t.sta_name,g.group_name,rt.type_name,im.imp_name,
                                mt.type_name as man_type_name,u2.user_fname as man_fname
                    from tb_risk r
                    LEFT OUTER JOIN sys_category c ON c.cat_id = r.cat_id
                    LEFT OUTER JOIN sys_sub_category ct ON ct.sub_cat_id = r.sub_cat_id
                    LEFT OUTER JOIN sys_department d ON d.dep_id = r.dep_id
                    LEFT OUTER JOIN sys_sub_department ds ON ds.sub_dep_id = r.sub_dep_id
                    LEFT OUTER JOIN sys_level_risk l ON l.lv_id = r.lv_id
                    LEFT OUTER JOIN sys_status_risk t ON t.sta_id = r.risk_status
                    LEFT OUTER JOIN tb_user u ON u.user_id = r.user_id
                    LEFT OUTER JOIN sys_group_risk g ON g.group_id = r.group_id
                    LEFT OUTER JOIN sys_type_risk rt ON rt.type_id = r.type_id
                    LEFT OUTER JOIN sys_impact im ON im.imp_id = r.imp_id
                    LEFT OUTER JOIN sys_man_type mt ON mt.type_id = r.man_type
                    LEFT OUTER JOIN tb_user u2 ON u.user_id = r.man_id

                    WHERE r.risk_id = '$_GET[getid]'  ";
                $results = mysql_query($sqls)or die($sqls);
                $record = mysql_fetch_array($results);
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">บันทึกความเสี่ยง</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
    <div class="col-lg-12"> 
<form action="?page=<?php echo sha1('update_risk') ?>" method="post" name="frm" id="frm" autocomplete="off" enctype='multipart/form-data' >
                <div class="col-sm-8 ">
                    <div class="form-group">
                        <label >ชื่อเรื่อง</label><input type="text" name="risk_name" id="risk_name" class="form-control" value="<?php echo $record['risk_name']; ?>" required="">
                    </div>
                </div>
                <div class="col-sm-2 ">
                    <div class="form-group">
                        <label >วันที่เกิดเหตุ</label>
                        <input class="form-control" type="date" name="risk_date" id="risk_date" required="">
                        <input type="hidden" id="risk_id" name="risk_id" value="<?php echo $record['risk_id']; ?>">
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
                      <option data-tokens="" value="<?php echo $record['sub_cat_id'] ?>"><?php echo $record['cat_name']." : ".$record['csub_name'] ?></option>
                            
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
                         <input  class="form-control"  id="pl_name" name="pl_name" value="<?php echo $record['pl_name'] ?>" required="">
                        </select>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >แจ้งความเสี่ยง ถึงฝ่าย</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"  id="sub_dep_id" name="sub_dep_id" required="">
                       <option value="<?php echo $record['sub_dep_id'] ?>"><?php echo $record['dep_name']." : ".$record['dsub_name'] ?></option>
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
                            <option value="<?php echo $record['type_id'] ?>"><?php echo $record['type_name'] ?></option>
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
                            <option value="<?php echo $record['group_id'] ?>"><?php echo $record['group_name'] ?></option>
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
                            <option value="<?php echo $record['imp_id'] ?>"><?php echo $record['imp_name'] ?></option>
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
                        <select  class="form-control selectpicker show-tick" data-live-search="true"  id="lv_id" name="lv_id" required="">
                            <option value="<?php echo $record['lv_id'] ?>"><?php echo $record['lv_code']." : ".$record['lv_name'] ?></option>
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
                            <textarea class="form-control" name="risk_text" id="risk_text" rows="5"><?php echo $record['risk_text'] ?></textarea>
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
                        
                        <input type="submit" name="submit" id="submit" class="form-control btn-success" value="บันทึก">

                    </div>
                </div>
            </form>
    </div>
</div>
        </div>
