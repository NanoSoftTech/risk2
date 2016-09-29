// JavaScript Document
$(document).ready(function(){
	// ส่วนของจังหวัดเมื่อมีการเปลี่ยนแปลง
	$("#cat_id").change(function(){
		$("#sub_cat_id").empty();//ล้างข้อมูล

		$.ajax({
			  url: "get_sub_cat.php",//ที่อยู่ของไฟล์เป้าหมาย
			  global: false,
			  type: "GET",//รูปแบบข้อมูลที่จะส่ง
			  data: ({ID : $(this).val(),TYPE : "cat_id"}), //ข้อมูลที่ส่ง  { ชื่อตัวแปร : ค่าตัวแปร }
			  dataType: "JSON", //รูปแบบข้อมูลที่ส่งกลับ xml,script,json,jsonp,text
			  async:false,
			  success: function(jd) { //แสดงข้อมูลเมื่อทำงานเสร็จ โดยใช้ each ของ jQuery
							var opt="<option value=\"0\" selected=\"selected\">---เลือกรายการความเสี่ยง---</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["sub_cat_id"] +"'>"+val["sub_name"]+"</option>"
    						});
							$("#sub_name").html( opt );//เพิ่มค่าลงใน Select ของอำเภอ
		   	  }
		});	
		$("#cat_id").val($(this).val()); //กำหนดค่า ID ของCATAEORYที่เลือกให้กับ Textfield ของจังหวัด
	}
     );
}
	