<?php
class Func {

    public function getRows($sqltxt) {
        $result = mysql_query($sqltxt)or die(mysql_error());
        //$result = mysql_query($sqltxt)or die($sqltxt);
        $count = mysql_num_rows($result);
        return $count;
    }
    
    public function format_date($date){
        $month = array("","ม.ค.","ก.พ.","มี.ค.","เม.ษ.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$show = explode("-",$date);
		$day = $show[2]-0;
		$mon = $show[1]-0;
		$year = $show[0]+543;
		return "วันที่ $day $month[$mon] $year";
    }
    
    public function format_datetime($date){
        $month = array("","ม.ค.","ก.พ.","มี.ค.","เม.ษ.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$dn = explode("-",$date);
		$time = explode(" ",$dn[2]);
		$dn2 = $dn[1]-0;
		$year = $dn[0]+543;
		$t = explode(":",$time[1]);
		$day = $time[0]-0;
		return "วันที่ $day $month[$dn2] $year   เวลา  $t[0]:$t[1]:$t[2]";
	}
    
    public function getTable($tb,$fname,$fid,$id){
		$sql = "select $fname from $tb where $fid = '$id' ";
		$fetch = mysql_fetch_array(mysql_query($sql));
		return $fetch[$fname];
    }
    
    public function getLast($tb,$fname,$fid){
		$sql = "select $fname from $tb  order by $fid desc limit 1";
                if($result = mysql_query($sql) ){
                    $fetch = mysql_fetch_array($result);
                    return $fetch[$fname];
                }else{
                    return 0;
                }
    }
    
    public function getTableAnd($tb,$fname,$fid1,$id1,$fid2,$id2){
		$sql = "select $fname from $tb where $fid1 = '$id1' and $fid2 = '$id2'";
		$fetch = mysql_fetch_array(mysql_query($sql));
		return $fetch[$fname];
    }
    
    public function getDatetimeNow() {
                $tz_object = new DateTimeZone('Asia/Bangkok');
                //date_default_timezone_set('Brazil/East');

                $datetime = new DateTime();
                $datetime->setTimezone($tz_object);
                return $datetime->format('Y\-m\-d\ h:i:s');
            }
    
    public function getIP(){  
        // ตรวจสอบ IP กรณีการใช้งาน share internet  
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){  
          $ip=$_SERVER['HTTP_CLIENT_IP'];  
        }else{  
          $ip=$_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    } 
        
}

$func = new Func;

?>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('คุณยืนยันที่จะลบข้อมูลนี้หรือไม่?');
}
</script>

<script language="JavaScript" type="text/javascript">
function checkReset(){
    return confirm('คุณยืนยันที่จะรีเซ็ตรหัสผ่าน User นี้หรือไม่?');
}
</script>

<script language="JavaScript" type="text/javascript">
function checkUpdate(){
    return confirm('คุณยืนยันที่จะ Update ความเสี่ยง นี้หรือไม่?');
}
</script>
<?php
if(!isset($_SESSION['Login'])){
$_SESSION['Login'] ="";
}
?>

