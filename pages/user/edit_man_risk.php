<style type="text/css"> img { width: 1000px;height: auto;} </style>
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
<form action="?page=<?php echo sha1('update_risk_status') ?>" method="post" name="frm" id="frm" autocomplete="off" enctype='multipart/form-data' >
                <div class="col-sm-8 ">
                    <div class="form-group">
                        <label >ชื่อเรื่อง</label><input type="text" name="risk_name" id="risk_name" class="form-control" value="<?php echo $record['risk_name']; ?>" required="">
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="form-group">
                        <label >วันที่เกิดเหตุ</label>
                        <input class="form-control" type="text" value="<?php echo $record['risk_datetime'];?>" disabled>
                        <input type="hidden" id="risk_id" name="risk_id" value="<?php echo $record['risk_id']; ?>">
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >รายการความเสี่ยง</label> 
                        <input type="text" class="form-control"  value="<?php echo $record['cat_name']." : ".$record['csub_name'] ?>" disabled="">			
                    </div>
                </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >สถานที่</label>
                        <input  class="form-control"  id="pl_name" name="pl_name" value="<?php echo $record['pl_name'] ?>" disabled="">
                        </select>
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >แจ้งความเสี่ยง ถึงฝ่าย</label>
                        <input type="text" class="form-control" value="<?php echo $record['dep_name']." : ".$record['dsub_name'] ?>" disabled="">
                    </div>
            </div>
            <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ปัจจัยความเสี่ยง</label>
                        <input type="text" class="form-control" value="<?php echo $record['type_name'] ?>" disabled="">
                    </div>
            </div>
            <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ประเภทความรุนแรง</label>
                        <input type="text" class="form-control" value="<?php echo $record['group_name'] ?>" disabled="">
                    </div>
            </div>
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >คาดการณ์ความเสี่ยง</label>
                        <input type="text" class="form-control" value="<?php echo $record['imp_name'] ?>" disabled="">
                    </div>
            </div> 
    
            <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >ระดับความเสี่ยง</label>
                        <input type="text" class="form-control" value="<?php echo $record['lv_code']." : ".$record['lv_name'] ?>" disabled="">
                    </div>
            </div>
    
                 <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >เหตุการณ์ / รายละเอียด </label>
                        <div class="form-group">
                            <?php echo $record['risk_text'] ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >ผู้บันทึก</label>
                        <div class="form-group">
                            <input class="form-control"  value="<?php echo $record['user_fname']; ?>" disabled>
                        </div>     
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >วันที่บันทึก</label>
                        <div class="form-group">
                            <input class="form-control"  value="<?php echo $record['d_update']; ?>" disabled>
                        </div>     
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label >บันทึกการจัดการความเสี่ยง</label>
                        <div class="form-group">
                            <textarea class="form-control" name="man_text" id="man_text" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >ประเภทการจัดการความเสี่ยง</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"   id="man_type" name="man_type" required="">
                            <option value="<?php echo $record['man_type'] ?>"><?php echo $record['man_type_name'] ?></option>
                            <?php 
                                $sqlD = " SELECT * from sys_man_type";
                                $resD = mysql_query($sqlD)or die(mysql_error());
                                while ($recD = mysql_fetch_array($resD)) {
                    echo "<option data-tokens='".$recD[type_name]."' value='$recD[type_id]'>".$recD[type_name]."</option>";
                                } 
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="form-group">
                        <label >สถานะของงาน</label>
                        <select  class="form-control selectpicker show-tick" data-live-search="true"   id="risk_status" name="risk_status" required="">
                            <option value="<?php echo $record['risk_status'] ?>"><?php echo $record['sta_name'] ?></option>
                            <?php 
                                $sqlD = " SELECT * from sys_status_risk where sta_id in(2,3)";
                                $resD = mysql_query($sqlD)or die(mysql_error());
                                while ($recD = mysql_fetch_array($resD)) {
                    echo "<option data-tokens='".$recD[sta_name]."' value='$recD[sta_id]'>".$recD[sta_name]."</option>";
                                } 
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >ผู้จัดการความเสี่ยง</label>
                        <div class="form-group">
                            <input class="form-control" value="<?php echo $user_fname; ?>" disabled>
                        </div>     
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <div class="form-group">
                        <label >วันที่บันทึก</label>
                        <div class="form-group">
                            <input class="form-control"  value="<?php echo $func->getDatetimeNow(); ?>" disabled>
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
