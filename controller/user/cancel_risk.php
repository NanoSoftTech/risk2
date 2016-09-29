<?php

            $sql = "update tb_risk set  risk_status = '4'
                    where risk_id = '$_GET[getid]' ";
            //echo $sql;
            $result = mysql_query($sql)or die(mysql_error());
            echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
            echo "<meta http-equiv='refresh' content='1; url=?page=".sha1('main')."'>";

?>
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
        <?php // echo $StrSQL."<br>";?>
        <img src="../../images/loading.gif" alt="" width="300" height="auto"/>
    </div>
</div>

