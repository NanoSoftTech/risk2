# MySQL dump of database 'db_risk' on host '127.0.0.1'
# backup date and time: 10/3/2016 3:23:35 PM
# built by phpMyBackupPro 2.5
# http://www.phpMyBackupPro.net

# comment:
# test backup

### used character set: utf8 ###
set names utf8;


### drop all tables first ###

DROP TABLE IF EXISTS `tb_user`;
DROP TABLE IF EXISTS `tb_risk`;
DROP TABLE IF EXISTS `sys_user_status`;
DROP TABLE IF EXISTS `sys_type_risk`;
DROP TABLE IF EXISTS `sys_sub_department`;
DROP TABLE IF EXISTS `sys_sub_category`;
DROP TABLE IF EXISTS `sys_status_risk`;
DROP TABLE IF EXISTS `sys_place`;
DROP TABLE IF EXISTS `sys_man_type`;
DROP TABLE IF EXISTS `sys_log_table`;
DROP TABLE IF EXISTS `sys_likelihood`;
DROP TABLE IF EXISTS `sys_level_risk`;
DROP TABLE IF EXISTS `sys_impact`;
DROP TABLE IF EXISTS `sys_hospital`;
DROP TABLE IF EXISTS `sys_group_risk`;
DROP TABLE IF EXISTS `sys_department`;
DROP TABLE IF EXISTS `sys_category`;


### structure of table `sys_category` ###

CREATE TABLE `sys_category` (
  `cat_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 AUTO_INCREMENT=10;


### data of table `sys_category` ###

insert into `sys_category` values ('1', 'ยา/สารน้ำ/เลือด/วัคซีน');
insert into `sys_category` values ('2', 'การตรวจวินิจฉัย/ดูแลรักษา');
insert into `sys_category` values ('3', 'การผ่าตัด/วิสัญญี/หัตถการ');
insert into `sys_category` values ('4', 'การคลอด');
insert into `sys_category` values ('5', 'เครื่องมือ/อุปกรณ์');
insert into `sys_category` values ('6', 'ความปลอดภัย/สิ่งแวดล้อมในการดูแลผู้ป่วย');
insert into `sys_category` values ('7', 'การติดต่อสื่อสาร/สิทธิผู้ป่วย/จริยธรรมองค์กร');
insert into `sys_category` values ('8', 'การบริหารจัดการทั่วไป/บริการ');
insert into `sys_category` values ('9', 'อื่นๆ(กรุณาระบุ)');


### structure of table `sys_department` ###

CREATE TABLE `sys_department` (
  `dep_id` smallint(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(200) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 AUTO_INCREMENT=13;


### data of table `sys_department` ###

insert into `sys_department` values ('0001', 'OPD');
insert into `sys_department` values ('0002', 'IPD');
insert into `sys_department` values ('0003', 'การพยาบาล');
insert into `sys_department` values ('0004', 'เวชกิจฉุกเฉิน');
insert into `sys_department` values ('0005', 'ทันตกรรม');
insert into `sys_department` values ('0006', 'เวชศาสตร์ครอบครัว');
insert into `sys_department` values ('0007', 'ชันสูตร');
insert into `sys_department` values ('0008', 'X-ray');
insert into `sys_department` values ('0009', 'กลุ่มการบริหารจัดการ');
insert into `sys_department` values ('0010', 'แพทย์');
insert into `sys_department` values ('0011', 'เภสัชกรรม');
insert into `sys_department` values ('0012', 'เวชระเบียน/งานประกัน');


### structure of table `sys_group_risk` ###

CREATE TABLE `sys_group_risk` (
  `group_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 AUTO_INCREMENT=9;


### data of table `sys_group_risk` ###

insert into `sys_group_risk` values ('1', 'เกิดเหตุการณ์แล้ว เสียหายเล็กน้อย');
insert into `sys_group_risk` values ('2', 'เกิดเหตุการณ์แล้ว เสียหายปานกลาง');
insert into `sys_group_risk` values ('3', 'เกิดเหตุการณ์แล้ว เสียหายรุนแรง');
insert into `sys_group_risk` values ('4', 'ยังไม่เกิดเหตุการณ์ แต่มีความเป็นไปได้น้อยมาก');
insert into `sys_group_risk` values ('5', 'ยังไม่เกิดเหตุการณ์ แต่มีความเป็นไปได้น้อย');
insert into `sys_group_risk` values ('6', 'ยังไม่เกิดเหตุการณ์ แต่มีความเป็นไปได้ปานกลาง');
insert into `sys_group_risk` values ('7', 'ยังไม่เกิดเหตุการณ์ แต่มีความเป็นไปได้');
insert into `sys_group_risk` values ('8', 'ยังไม่เกิดเหตุการณ์ แต่มีความเป็นไปได้มาก');


### structure of table `sys_hospital` ###

CREATE TABLE `sys_hospital` (
  `hos_id` tinyint(1) NOT NULL,
  `hos_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hos_code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hos_logo` blob,
  PRIMARY KEY (`hos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


### data of table `sys_hospital` ###

insert into `sys_hospital` values ('1', 'โรงพยาบาลสบเมย', '11207', '');


### structure of table `sys_impact` ###

CREATE TABLE `sys_impact` (
  `imp_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `imp_name` varchar(255) NOT NULL,
  PRIMARY KEY (`imp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 AUTO_INCREMENT=22;


### data of table `sys_impact` ###

insert into `sys_impact` values ('1', 'ทรัพย์สินเสียหาย เล็กน้อย อุปกรณ์ชำรุด มูลค่าความเสียหายไม่เกิน 1,000บาท');
insert into `sys_impact` values ('2', 'ทรัพย์สินเสียหาย มูลค่า> 1,000  5,000 บาท');
insert into `sys_impact` values ('3', 'ทรัพย์สินเสียหาย มูลค่า >5,000-10,000  บาท');
insert into `sys_impact` values ('4', 'ทรัพย์สินเสียหายมูลค่า  > 10,000-20,000  บาท');
insert into `sys_impact` values ('5', 'ทรัพย์สินเสียหายมูลค่า > 20,000-50,000  บาท');
insert into `sys_impact` values ('6', 'ทรัพย์สินเสียหายมูลค่า  > 50,000-100,000  บาท');
insert into `sys_impact` values ('7', 'ทรัพย์สินเสียหาย มากกว่า100,000 บาท');
insert into `sys_impact` values ('8', 'เริ่มมีผลกระทบต่อภารกิจหลักของหน่วยงาน แก้ไขภายในหน่วยงาน ผลเป็นที่น่าพอใจ');
insert into `sys_impact` values ('9', 'ภารกิจหยุดชะงักชั่วคราวต้องมีการเฝ้าระวังแก้ไขภายในน่วยงาน และต้องมีการปรับระบบงานภายใน ');
insert into `sys_impact` values ('10', 'มีผลกระทบต่อนอกหน่วยงาน ต้องวิเคราะห์ สาเหตุ   ปรับระบบงานภายใน ร่วมกัน ');
insert into `sys_impact` values ('11', 'มีผลกระทบต่อนอกหน่วยงาน ต้องวิเคราะห์ สาเหตุ ปรับระบบงานที่สำคัญ ร่วมกับทีมนำ');
insert into `sys_impact` values ('12', 'มีผลกระทบต่อชุมชน\r\nแก้ปัญหาระดับ รพ.');
insert into `sys_impact` values ('13', 'เกิดผลกระทบต่อชุมชนและสิ่งแวดล้อม แก้ปัญหาระดับโรงพยาบาล');
insert into `sys_impact` values ('14', 'เกิดผลกระทบต่อสาธารณะ ออกข่าวผ่านสื่อ แก้ปัญหา ระดับโรงพยาบาล');
insert into `sys_impact` values ('15', 'ถูกร้องเรียนภายในโรงพยาบาล ระบุชื่อยังไม่แพร่กระจายออกนอก รพ.');
insert into `sys_impact` values ('16', 'บุคคลภายนอกหน่วยงานเริ่มทราบเรื่อง  อาจเกิดการเสียชื่อเสียงของรพ. แต่ควบคุมได้ ');
insert into `sys_impact` values ('17', 'มีบุคคลภายนอกทราบเรื่อง        มีแนวโน้มจะเกิดการร้องเรียน ');
insert into `sys_impact` values ('18', 'เกิดการร้องเรียนขึ้นในชุมชน ');
insert into `sys_impact` values ('19', 'มีแนวโน้มเสี่ยงต่อการฟ้องร้อง และ เรียกค่าเสียหาย');
insert into `sys_impact` values ('20', 'เกิดกรณีฟ้องร้อง  ');
insert into `sys_impact` values ('21', '-');


### structure of table `sys_level_risk` ###

CREATE TABLE `sys_level_risk` (
  `lv_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `lv_code` char(2) NOT NULL,
  `lv_name` varchar(200) DEFAULT NULL,
  `lv_score` varchar(2) NOT NULL,
  PRIMARY KEY (`lv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 AUTO_INCREMENT=12;


### data of table `sys_level_risk` ###

insert into `sys_level_risk` values ('1', 'A', 'ไม่มีความคลาดเคลื่อน แต่มีโอกาสที่จะก่อให้เกิดความคลาดเคลื่อน', '1');
insert into `sys_level_risk` values ('2', 'B', 'เกิดความคลาดเคลื่อนขึ้น แต่ไม่เป็นอันตราย/ไม่ส่งผลเสียหายเนื่องจากความคลาดเคลื่อนยังไม่ถึงผู้มารับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงาน และองค์กร', '2');
insert into `sys_level_risk` values ('3', 'C', 'เกิดความคลาดเคลื่อน แต่ไม่เป็นอันตราย/ไม่ส่งผลเสียหายถึงแม้ว่าความคลาดเคลื่อนนั้นจะไปถึงผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงาน และองค์กรแล้ว และองค์กร', '3');
insert into `sys_level_risk` values ('4', 'D', 'เกิดความคลาดเคลื่อน แต่ไม่เป็นอันตราย/ไม่ส่งผลเสียหาย แต่ต้องมีการเฝ้าระวังเพื่อให้มั่นใจว่าไม่เป็นอันตราย/ไม่ส่งผลเสียหายต่อผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงาน และองค์กร', '4');
insert into `sys_level_risk` values ('5', 'E', 'เกิดความคลาดเคลื่อน ส่งผลให้เกิดอันตรายชั่วคราวต่อผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงานและองค์กร ต้อง ได้รับการรักษา/แก้ไขเพิ่มเติม ', '5');
insert into `sys_level_risk` values ('6', 'F', 'เกิดความคลาดเคลื่อน เกิดอันตรายชั่วคราวต่อผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงาน ต้องนอนโรงพยาบาลนานขึ้น ใช้เวลาแก้ไขนานขึ้น', '6');
insert into `sys_level_risk` values ('7', 'G', 'เกิดความคลาดเคลื่อน เกิดอันตรายถาวรต่อผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงาน และองค์กร', '7');
insert into `sys_level_risk` values ('8', 'H', 'เกิดความคลาดเคลื่อน เกิดอันตรายเกือบถึงชีวิตต่อผู้รับบริการ ต้องทำการช่วยชีวิต เกิดความเสียหายต่อผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงาน และองค์กรต้องมีการแก้ไขอย่างเร่งด่วน', '8');
insert into `sys_level_risk` values ('9', 'I', 'เกิดความคลาดเคลื่อน เกิดอันตรายจนถึงชีวิตต่อผู้รับบริการ เกิดความเสียหายจนแก้ไขไม่ได้ ต่อผู้รับบริการ เครื่องมือ อุปกรณ์ กระบวนการทำงานและทำให้เสื่อมเสียชื่อเสียง ถูกฟ้องร้องทางสื่อ ทางกฎหมาย', '9');
insert into `sys_level_risk` values ('10', 'Z', 'tester2', '5');


### structure of table `sys_likelihood` ###

CREATE TABLE `sys_likelihood` (
  `li_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `li_name` varchar(255) NOT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;


### data of table `sys_likelihood` ###

insert into `sys_likelihood` values ('1', 'มีความเป็นไปได้น้อยมาก');
insert into `sys_likelihood` values ('2', 'มีความเป็นไปได้น้อย');
insert into `sys_likelihood` values ('3', 'มีความเป็นไปได้ปานกลาง');
insert into `sys_likelihood` values ('4', 'มีความเป็นไปได้');
insert into `sys_likelihood` values ('5', 'มีความเป็นไปได้มาก');


### structure of table `sys_log_table` ###

CREATE TABLE `sys_log_table` (
  `log_id` int(10) NOT NULL AUTO_INCREMENT,
  `log_user` varchar(255) NOT NULL,
  `log_ip` varchar(255) NOT NULL,
  `log_datetime` datetime NOT NULL,
  `log_status` char(1) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 AUTO_INCREMENT=44;


### data of table `sys_log_table` ###

insert into `sys_log_table` values ('1', 'd033e22ae348aeb5660fc2140aec35850c4da997', '110.77.217.85', '2016-09-27 09:01:42', 'Y');
insert into `sys_log_table` values ('2', '', '110.77.217.85', '2016-09-27 09:04:42', 'N');
insert into `sys_log_table` values ('3', '', '110.77.217.85', '2016-09-27 09:04:54', 'Y');
insert into `sys_log_table` values ('4', '', '110.77.217.85', '2016-09-27 09:16:32', 'Y');
insert into `sys_log_table` values ('5', '', '110.77.217.85', '2016-09-27 10:13:41', 'N');
insert into `sys_log_table` values ('6', '', '110.77.217.85', '2016-09-27 10:13:57', 'Y');
insert into `sys_log_table` values ('7', '', '110.77.217.85', '2016-09-27 10:14:20', 'N');
insert into `sys_log_table` values ('8', '', '110.77.217.85', '2016-09-27 10:15:14', 'Y');
insert into `sys_log_table` values ('9', '', '110.77.217.85', '2016-09-27 10:27:57', 'N');
insert into `sys_log_table` values ('10', 'd033e22ae348aeb5660fc2140aec35850c4da997', '110.77.217.85', '2016-09-27 10:28:04', 'Y');
insert into `sys_log_table` values ('11', 'd033e22ae348aeb5660fc2140aec35850c4da997', '110.77.217.85', '2016-09-27 10:39:45', 'Y');
insert into `sys_log_table` values ('12', '', '110.77.217.85', '2016-09-27 10:44:00', 'N');
insert into `sys_log_table` values ('13', '', '110.77.217.85', '2016-09-27 10:44:10', 'Y');
insert into `sys_log_table` values ('14', '', '110.77.217.85', '2016-09-27 10:45:23', 'N');
insert into `sys_log_table` values ('15', '', '110.77.217.85', '2016-09-27 10:45:35', 'Y');
insert into `sys_log_table` values ('16', '', '192.168.1.23', '2016-09-27 01:02:10', 'Y');
insert into `sys_log_table` values ('17', '', '::1', '2016-09-29 09:17:55', 'Y');
insert into `sys_log_table` values ('18', '', '::1', '2016-09-29 12:51:45', 'Y');
insert into `sys_log_table` values ('19', '', '::1', '2016-09-29 01:21:21', 'N');
insert into `sys_log_table` values ('20', '', '::1', '2016-09-29 01:21:31', 'Y');
insert into `sys_log_table` values ('21', '', '::1', '2016-09-29 01:49:49', 'N');
insert into `sys_log_table` values ('22', '', '::1', '2016-09-29 01:49:58', 'Y');
insert into `sys_log_table` values ('23', '', '::1', '2016-09-29 01:50:08', 'Y');
insert into `sys_log_table` values ('24', '', '::1', '2016-09-29 01:51:59', 'N');
insert into `sys_log_table` values ('25', 'd033e22ae348aeb5660fc2140aec35850c4da997', '::1', '2016-09-29 01:52:09', 'Y');
insert into `sys_log_table` values ('26', '', '::1', '2016-09-29 01:52:13', 'N');
insert into `sys_log_table` values ('27', '', '::1', '2016-09-29 01:52:45', 'Y');
insert into `sys_log_table` values ('28', '', '::1', '2016-09-29 01:56:00', 'N');
insert into `sys_log_table` values ('29', '', '::1', '2016-09-29 01:56:10', 'Y');
insert into `sys_log_table` values ('30', '', '::1', '2016-09-29 01:56:16', 'N');
insert into `sys_log_table` values ('31', '', '::1', '2016-09-29 01:56:23', 'Y');
insert into `sys_log_table` values ('32', '', '::1', '2016-09-29 01:56:53', 'N');
insert into `sys_log_table` values ('33', '', '::1', '2016-09-29 01:57:02', 'Y');
insert into `sys_log_table` values ('34', 'user', '::1', '2016-09-29 02:04:16', 'N');
insert into `sys_log_table` values ('35', '', '::1', '2016-09-29 02:04:23', 'Y');
insert into `sys_log_table` values ('36', 'user', '::1', '2016-09-29 02:05:17', 'N');
insert into `sys_log_table` values ('37', '12dea96fec20593566ab75692c9949596833adc9', '::1', '2016-09-29 02:05:25', 'Y');
insert into `sys_log_table` values ('38', 'user', '::1', '2016-09-29 02:06:03', 'N');
insert into `sys_log_table` values ('39', '8e67bb26b358e2ed20fe552ed6fb832f397a507d', '::1', '2016-09-29 02:11:54', 'Y');
insert into `sys_log_table` values ('40', 'superuser', '::1', '2016-09-29 02:17:14', 'N');
insert into `sys_log_table` values ('41', 'admin', '::1', '2016-09-29 03:53:04', 'Y');
insert into `sys_log_table` values ('42', 'admin', '::1', '2016-09-29 04:07:54', 'Y');
insert into `sys_log_table` values ('43', 'admin', '::1', '2016-10-03 03:02:09', 'Y');


### structure of table `sys_man_type` ###

CREATE TABLE `sys_man_type` (
  `type_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;


### data of table `sys_man_type` ###

insert into `sys_man_type` values ('1', 'ยอมรับความเสี่ยง');
insert into `sys_man_type` values ('2', 'ลด/ควบคุมความเสี่ยง');
insert into `sys_man_type` values ('3', 'หลีกแลี่ยงความเสี่ยง');
insert into `sys_man_type` values ('4', 'กระจาย/โอนความเสี่ยง');


### structure of table `sys_place` ###

CREATE TABLE `sys_place` (
  `pl_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `pl_name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 AUTO_INCREMENT=102;


### data of table `sys_place` ###

insert into `sys_place` values ('1', 'บริเวณบ้านพัก');
insert into `sys_place` values ('2', 'กระบวนการผู้ป่วยนอก OPD');
insert into `sys_place` values ('3', 'กระบวนการผู้ป่วยใน IPD');
insert into `sys_place` values ('4', 'กระบวนการ back office');
insert into `sys_place` values ('5', 'ตึกอำนวยการชั้น1');
insert into `sys_place` values ('6', 'ตึกอำนวยการชั้น2');
insert into `sys_place` values ('7', 'บริเวณภายในโรงพยาบาล /บริเวณหน้าโรงพยาบาล');
insert into `sys_place` values ('8', 'บริเวณภายนอกโรงพยาบาล');
insert into `sys_place` values ('9', 'อื่นๆ');
insert into `sys_place` values ('100', 'test2');


### structure of table `sys_status_risk` ###

CREATE TABLE `sys_status_risk` (
  `sta_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `sta_name` varchar(200) NOT NULL,
  PRIMARY KEY (`sta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;


### data of table `sys_status_risk` ###

insert into `sys_status_risk` values ('1', 'แจ้งเรื่องแล้ว รอพิจารณา');
insert into `sys_status_risk` values ('2', 'รับเรื่องแล้ว อยู่ระหว่างทำการพิจารณา');
insert into `sys_status_risk` values ('3', 'เสร็จสิ้นกระบวนการ');
insert into `sys_status_risk` values ('4', 'ยกเลิก');


### structure of table `sys_sub_category` ###

CREATE TABLE `sys_sub_category` (
  `sub_cat_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(200) DEFAULT NULL,
  `cat_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8 AUTO_INCREMENT=99;


### data of table `sys_sub_category` ###

insert into `sys_sub_category` values ('1', '- ผิดคน', '1');
insert into `sys_sub_category` values ('2', '- ให้ผิดขนาด/ชนิด/วิธี/เวลา/รหัส/กรุ๊ป', '1');
insert into `sys_sub_category` values ('3', '- แพ้ยา/เลือด', '1');
insert into `sys_sub_category` values ('4', '- ให้ยา/สารน้ำ/เลือดทั้งที่มีข้อห้าม', '1');
insert into `sys_sub_category` values ('5', '- เขียนใบสั่งยาผิดพลาด', '1');
insert into `sys_sub_category` values ('6', '- การรับคำสั่ง/คัดลอกคำสั่งผิดพลาด', '1');
insert into `sys_sub_category` values ('7', '- มีภาวะแทรกซ้อน', '1');
insert into `sys_sub_category` values ('8', '- เสียชีวิตโดยไม่คาดคิด', '2');
insert into `sys_sub_category` values ('9', '- ส่งต่อล่าช้า', '2');
insert into `sys_sub_category` values ('10', '- หนีออกจากโรงพยาบาล', '6');
insert into `sys_sub_category` values ('11', '- Re-Admissionใน 28 วัน/Revisit', '2');
insert into `sys_sub_category` values ('12', '- ล่าช้าในการบริการ/รักษา', '2');
insert into `sys_sub_category` values ('13', '- ภาวะแทรกซ้อนจากการผ่าตัด/หัตถการ', '2');
insert into `sys_sub_category` values ('14', '- ดูแล/ใส่Tube/Cath/drainไม่ถูกต้อง', '2');
insert into `sys_sub_category` values ('15', '- เก็บ Spicimen ไม่ถูกต้อง(ชนิด/คน/วิธี)', '2');
insert into `sys_sub_category` values ('16', '- ไม่รายงานผล Lab/Xray ด่วน', '2');
insert into `sys_sub_category` values ('17', '-  ปฏิบัติไม่ถูกต้องตามคำสั่งแพทย์', '2');
insert into `sys_sub_category` values ('18', '- มีภาวะแทรกซ้อนจากการผ่าตัด/วิสัญญี', '3');
insert into `sys_sub_category` values ('19', '- ผิดข้าง/คน/ตำแหน่ง', '3');
insert into `sys_sub_category` values ('20', '- ตัดอวัยวะออกโดยไม่ได้วางแผน', '3');
insert into `sys_sub_category` values ('21', '- ผ่าตัดถูกอวัยวะใกล้เคียงจนต้องซ่อมแซม', '3');
insert into `sys_sub_category` values ('22', '- เครื่องมือ/ผ้าซับโลหิตตกค้างในร่างกาย', '3');
insert into `sys_sub_category` values ('23', '- ผ่าตัดซ้ำโดยไม่ได้วางแผน(24 ชม.)', '3');
insert into `sys_sub_category` values ('24', '- เข้า ICU โดยไม่ได้วางแผน', '3');
insert into `sys_sub_category` values ('25', '- เตรียมผู้ป่วยไม่ครบถ้วน', '3');
insert into `sys_sub_category` values ('26', '- ภาวะแทรกซ้อน PPH c shock', '4');
insert into `sys_sub_category` values ('27', '- เกิดภาวะ Birth Asphyxia', '4');
insert into `sys_sub_category` values ('28', '- ทารกบาดเจ็บจากการคลอด', '4');
insert into `sys_sub_category` values ('29', '- ระบุตัว/เพศทารกไม่ถูกต้อง', '4');
insert into `sys_sub_category` values ('30', '- นำส่งทารกผิดคน', '4');
insert into `sys_sub_category` values ('31', '- ประเมินผู้ป่วยล่าช้า', '4');
insert into `sys_sub_category` values ('32', '- เครื่องมือ อุปกรณ์ไม่สะอาด/ไม่พร้อมใช้งาน', '5');
insert into `sys_sub_category` values ('33', '- เครื่องมือไม่ตรงกับฉลากที่ระบุ/หมดอายุการสเตอไรต์', '5');
insert into `sys_sub_category` values ('34', '- ไม่มีเครื่องมือ/เครื่องมือไม่พอใช้', '5');
insert into `sys_sub_category` values ('35', '- เครื่องมือ อุปกรณ์ชำรุดขณะใช้งาน', '5');
insert into `sys_sub_category` values ('36', '- เครื่องมือ/อุปกรณ์หาย/ติดไปอยู่หน่วยอื่น', '5');
insert into `sys_sub_category` values ('37', '- บาดเจ็บจากการผูกมัด/อุปกรณ์ทางการแพทย์', '6');
insert into `sys_sub_category` values ('38', '- ลื่น/ตก/หกล้ม', '6');
insert into `sys_sub_category` values ('39', '- อุบัติเหตุระหว่างส่งต่อ', '6');
insert into `sys_sub_category` values ('40', '- สิ่งแวดล้อมเป็นอันตราย/ปนเปื้อน', '6');
insert into `sys_sub_category` values ('41', '- เจ้าหน้าที่ถูกทำร้าย/คุกคาม/ข่มขู่', '6');
insert into `sys_sub_category` values ('42', '- OPD card/ใบสั่งยาผิดคน', '7');
insert into `sys_sub_category` values ('43', '- ส่งทำหัตถการโดยไม่ได้ลงชื่อยินยอม', '7');
insert into `sys_sub_category` values ('44', '- อ่านลายมือคำสั่งไม่ออก', '7');
insert into `sys_sub_category` values ('45', '- ไม่ได้ระบุ/ระบุสิทธิการรักษาผิด', '7');
insert into `sys_sub_category` values ('46', '- ติดต่อแพทย์/เจ้าหน้าที่ไม่ได้', '7');
insert into `sys_sub_category` values ('47', '- เขียน/บันทึกชื่อ/HN ผิด', '7');
insert into `sys_sub_category` values ('48', '- นัดผิดวัน/เวลา/สถานที่', '7');
insert into `sys_sub_category` values ('49', '- สิ่งส่งตรวจผิดคน', '2');
insert into `sys_sub_category` values ('50', '- บริการสุขภาพ/การดูแลรักษา', '8');
insert into `sys_sub_category` values ('51', '- อัคคีภัย/วินาศภัย', '8');
insert into `sys_sub_category` values ('52', '- กริยา/วาจา/ท่าทางผู้ให้บริการ', '8');
insert into `sys_sub_category` values ('53', '- การเงิน', '8');
insert into `sys_sub_category` values ('54', '- บริการอาหาร', '8');
insert into `sys_sub_category` values ('55', '- บริการผ้า', '8');
insert into `sys_sub_category` values ('56', '- สาธารณูปโภค/เครื่องอำนวยความสะดวก', '8');
insert into `sys_sub_category` values ('57', '- ระบบรับเรื่องร้องเรียน', '8');
insert into `sys_sub_category` values ('58', '- ยานพาหนะ/รถรับ-ส่งต่อ', '8');
insert into `sys_sub_category` values ('59', '- ระบบรักษาความปลอดภัย', '8');
insert into `sys_sub_category` values ('60', '-  Pipe line/ระบบแก๊ส', '8');
insert into `sys_sub_category` values ('61', '- ไม่ลงบันทึกในเวชระเบียน(คอมพิวเตอร์)', '2');
insert into `sys_sub_category` values ('62', '-  ไม่ประสงค์อยู่รักษา', '7');
insert into `sys_sub_category` values ('63', '- เกิดแผลกดทับ', '2');
insert into `sys_sub_category` values ('64', '- เฝ้าระวังไม่เหมาะสม/IV,foleyหลุด/ลืมoff heparin lock,...', '2');
insert into `sys_sub_category` values ('65', '- ภาวะฉุกเฉินขณะรอรับบริการ', '2');
insert into `sys_sub_category` values ('66', '- รักษาผิดคน', '2');
insert into `sys_sub_category` values ('67', '- ภาวะแทรกซ้อนจากการใช้เครื่องมือเช่น burn,trauma', '2');
insert into `sys_sub_category` values ('68', '- อันตรายจากเครื่องรัดตรึง/ผูกมัด', '2');
insert into `sys_sub_category` values ('69', '- เสียชีวิตระหว่างผ่าตัด', '3');
insert into `sys_sub_category` values ('70', '- เตรียมผู้ป่วยไม่ถูกต้อง/ผิดพลาด', '3');
insert into `sys_sub_category` values ('71', '- งด/เลื่อนผ่าตัด-หัตถการ', '3');
insert into `sys_sub_category` values ('72', '- วิสัญญีคำนวณยาผิด', '3');
insert into `sys_sub_category` values ('73', '- ทารกสูญหาย/ถูกลักพาตัว', '4');
insert into `sys_sub_category` values ('74', '- ลืมสิ่งแปลกปลอมในร่างกายเช่นก๊อส', '4');
insert into `sys_sub_category` values ('75', '- ติดเชื้อแผลฝีเย็บ', '4');
insert into `sys_sub_category` values ('76', '- ผู้ป่วยติดเชื้อแผลผ่าตัด/IV/Foley', '5');
insert into `sys_sub_category` values ('77', '- เจ้าหน้าที่สัมผัสสารคัดหลั่ง/เคมี/sharp injury', '6');
insert into `sys_sub_category` values ('78', '- เจ้าหน้าที่ติดเชื้อจากการทำงาน', '6');
insert into `sys_sub_category` values ('79', '- ไม่ปฏิบัติตามหลัก UP', '6');
insert into `sys_sub_category` values ('80', '- ผู้ป่วยทำร้ายร่างกายตัวเอง/พยายามฆ่าตัวตาย', '6');
insert into `sys_sub_category` values ('81', '- ผู้ป่วยอยู่ในตำแหน่งที่อาจได้รับอันตราย', '6');
insert into `sys_sub_category` values ('82', '- ผู้ป่วยถูกฆาตกรรม', '6');
insert into `sys_sub_category` values ('83', '- ให้ข้อมูลไม่ครบถ้วน', '7');
insert into `sys_sub_category` values ('84', '- ไม่ดูแลผู้ป่วยที่ปฏิเสธการรักษา', '7');
insert into `sys_sub_category` values ('85', '- ผู้ป่วย/ญาติไม่เซ็นใบยินยอมรักษา/ผ่าตัด', '7');
insert into `sys_sub_category` values ('86', '- ความลับผู้ป่วยถูกเปิดเผย', '7');
insert into `sys_sub_category` values ('87', '- ไม่ให้ผู้ป่วย/ญาติมีโอกาสตัดสินใจ', '7');
insert into `sys_sub_category` values ('88', '- เลือกปฏิบัติทำให้ได้รับบริการที่ต่ำกว่ามาตรฐาน', '7');
insert into `sys_sub_category` values ('89', '-การบริการIT', '8');
insert into `sys_sub_category` values ('90', '-ปัญหาที่เกิดจากระบบงาน', '8');
insert into `sys_sub_category` values ('91', 'ข้อมูล/ถูกต้อง/ครบถ้วน/ทันเวลา', '8');
insert into `sys_sub_category` values ('92', '- ฟิล์ม/ใบreques ไม่ครบ/ผิดคน/ผิดตำแหน่ง/หาย', '2');
insert into `sys_sub_category` values ('93', '- วินิจฉัยผิดพลาด', '2');
insert into `sys_sub_category` values ('94', '- รายงานผลผิดพลาด', '2');
insert into `sys_sub_category` values ('95', '- รายงานผลช้า', '2');
insert into `sys_sub_category` values ('96', ' -การปฏิบัติตามระบียบ/วืนัย', '8');
insert into `sys_sub_category` values ('97', '- การจัดการเวชระเบียน', '8');
insert into `sys_sub_category` values ('98', '- Low  birth  weight', '4');


### structure of table `sys_sub_department` ###

CREATE TABLE `sys_sub_department` (
  `sub_dep_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(200) DEFAULT NULL,
  `dep_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`sub_dep_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 AUTO_INCREMENT=64;


### data of table `sys_sub_department` ###

insert into `sys_sub_department` values ('1', 'ศูนย์คุณภาพ', '9');
insert into `sys_sub_department` values ('2', 'งานผู้ป่วยนอก', '1');
insert into `sys_sub_department` values ('3', 'งานผู้ป่วยใน', '2');
insert into `sys_sub_department` values ('4', 'องค์กรแพทย์', '10');
insert into `sys_sub_department` values ('5', 'กลุ่มงานทันตกรรม', '5');
insert into `sys_sub_department` values ('6', 'ทีมบริหารสิ่งแวดล้อมในการดูแลผู้ป่วย', '9');
insert into `sys_sub_department` values ('7', 'งานห้องคลอด', '2');
insert into `sys_sub_department` values ('8', 'ทีมบริหารความเสี่ยง', '9');
insert into `sys_sub_department` values ('10', 'กลุ่มงานเภสัชกรรม', '11');
insert into `sys_sub_department` values ('13', 'กลุ่มงานการจัดการ', '9');
insert into `sys_sub_department` values ('14', 'กลุ่มงานเทคนิกการแพทย์', '7');
insert into `sys_sub_department` values ('15', 'กลุ่มงานเวชศาสตร์ครอบครัวฯ', '6');
insert into `sys_sub_department` values ('16', 'กลุ่มงานการพยาบาล', '3');
insert into `sys_sub_department` values ('17', 'กลุ่มงานประกันสุขภาพ', '12');
insert into `sys_sub_department` values ('18', 'ทีมพัฒนากระบวนการดูแลผู้ป่วย', '3');
insert into `sys_sub_department` values ('19', 'ทีมบริหารระบบยา', '11');
insert into `sys_sub_department` values ('20', 'ทีมบริหารทรัพยากรบุคคล', '9');
insert into `sys_sub_department` values ('21', 'ทีมบริหารระบบสารสนเทศ', '12');
insert into `sys_sub_department` values ('22', 'ทีมบริหารระบบป้องกันและควบคุมการติดเชื้อ', '3');
insert into `sys_sub_department` values ('23', 'งานบริการรังสีวิทยา', '8');
insert into `sys_sub_department` values ('24', 'งานอุบัติเหตุฉุกเฉิน', '4');
insert into `sys_sub_department` values ('25', 'งานเวชกรรมฟื้นฟู', '6');
insert into `sys_sub_department` values ('26', 'งานวิสัญญีพยาบาล', '3');
insert into `sys_sub_department` values ('27', 'งานโภชนาการ', '6');
insert into `sys_sub_department` values ('28', 'งานแพทย์แผนไทยและแพทย์ทางเลือก', '6');
insert into `sys_sub_department` values ('29', 'งานจิตเวช', '6');
insert into `sys_sub_department` values ('30', 'งานตรวจสุขภาพ', '1');
insert into `sys_sub_department` values ('31', 'งานคลินิกพิเศษ', '1');
insert into `sys_sub_department` values ('32', 'งานอนามัยครอบครัว', '6');
insert into `sys_sub_department` values ('33', 'งานอาชีวอนามัย', '6');
insert into `sys_sub_department` values ('34', 'งานเวชระเบียน', '12');
insert into `sys_sub_department` values ('35', 'งานพัสดุ', '9');
insert into `sys_sub_department` values ('36', 'งานสุขศึกษา', '6');
insert into `sys_sub_department` values ('37', 'งานธุรการ', '9');
insert into `sys_sub_department` values ('38', 'งานการเจ้าหน้าที่', '9');
insert into `sys_sub_department` values ('39', 'งานยานพาหนะ', '9');
insert into `sys_sub_department` values ('40', 'งานการเงิน', '9');
insert into `sys_sub_department` values ('41', 'งานบัญชี', '9');
insert into `sys_sub_department` values ('42', 'งานช่างทั่วไป', '9');
insert into `sys_sub_department` values ('43', 'งานซ่อมบำรุง', '9');
insert into `sys_sub_department` values ('44', 'งานประชาสัมพันธ์', '12');
insert into `sys_sub_department` values ('45', 'งานบริการสุขภาพชุมชน', '6');
insert into `sys_sub_department` values ('46', 'ศูนย์ส่งต่อผู้ป่วย', '4');
insert into `sys_sub_department` values ('47', 'งานส่งเสริมสุขภาพ', '6');
insert into `sys_sub_department` values ('48', 'งานจ่ายกลาง', '12');
insert into `sys_sub_department` values ('49', 'ศูนย์สารสนเทศ', '12');
insert into `sys_sub_department` values ('50', 'งานห้องสมุด', '9');
insert into `sys_sub_department` values ('51', 'งานรักษาความปลอดภัย', '9');
insert into `sys_sub_department` values ('52', 'งานซักฟอก', '9');
insert into `sys_sub_department` values ('53', 'งานตัดเย็บ', '9');
insert into `sys_sub_department` values ('54', 'งานทำความสะอาดอาคาร', '9');
insert into `sys_sub_department` values ('55', 'งานจัดการขยะ', '9');
insert into `sys_sub_department` values ('56', 'งานไฟฟ้า-โทรศัพท์', '9');
insert into `sys_sub_department` values ('57', 'งานประปา', '9');
insert into `sys_sub_department` values ('58', 'งานระบบบำบัดน้ำเสีย', '9');
insert into `sys_sub_department` values ('59', 'งานสนาม', '9');
insert into `sys_sub_department` values ('60', 'กรรมการบริหารโรงพยาบาล', '9');
insert into `sys_sub_department` values ('61', 'ห้องบัตร', '12');


### structure of table `sys_type_risk` ###

CREATE TABLE `sys_type_risk` (
  `type_id` smallint(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(255) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;


### data of table `sys_type_risk` ###

insert into `sys_type_risk` values ('1', 'เป็นความเสี่ยงที่เกิดจากเหตุการณ์ภายใน');
insert into `sys_type_risk` values ('2', 'เป็นความเสี่ยงที่เกิดจากเหตุการณ์ภายนอก');


### structure of table `sys_user_status` ###

CREATE TABLE `sys_user_status` (
  `sta_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `sta_code` char(2) NOT NULL,
  `sta_name` varchar(200) NOT NULL,
  PRIMARY KEY (`sta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;


### data of table `sys_user_status` ###

insert into `sys_user_status` values ('1', '0', 'ADMIN');
insert into `sys_user_status` values ('2', '1', 'USER');
insert into `sys_user_status` values ('3', '2', 'SUPER USER');
insert into `sys_user_status` values ('4', '99', 'รออนุมัติ');
insert into `sys_user_status` values ('5', '88', 'ยกเลิก');


### structure of table `tb_risk` ###

CREATE TABLE `tb_risk` (
  `risk_id` int(4) NOT NULL AUTO_INCREMENT,
  `risk_datetime` datetime NOT NULL,
  `risk_name` varchar(200) NOT NULL,
  `cat_id` smallint(4) NOT NULL,
  `sub_cat_id` smallint(4) NOT NULL,
  `dep_id` smallint(4) NOT NULL,
  `sub_dep_id` smallint(4) NOT NULL,
  `pl_name` varchar(255) NOT NULL,
  `lv_id` smallint(4) NOT NULL,
  `lv_code` varchar(2) NOT NULL,
  `type_id` smallint(4) NOT NULL,
  `group_id` smallint(4) NOT NULL,
  `imp_id` smallint(4) DEFAULT NULL,
  `user_id` smallint(4) NOT NULL,
  `risk_text` longblob,
  `man_text` longblob,
  `man_type` smallint(4) DEFAULT NULL,
  `man_id` smallint(4) DEFAULT NULL,
  `risk_status` smallint(1) NOT NULL,
  `d_update` datetime NOT NULL,
  PRIMARY KEY (`risk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;


### data of table `tb_risk` ###

insert into `tb_risk` values ('3', '2016-09-29 20:30:00', '123', '1', '3', '1', '2', 'test', '3', 'C', '1', '2', '2', '3', '<p><img src=\"http://www.software.worldmedic.com/smartclinic4/images2/g44s.gif\" /></p>\r\n<p>testter</p>', '<h2>ให้ นาย ทดสอบระบบ รับผิดชอบค่าเสียหาย</h2>', '1', '3', '2', '2016-09-29 02:16:48');


### structure of table `tb_user` ###

CREATE TABLE `tb_user` (
  `user_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `dep_id` tinyint(4) NOT NULL,
  `username` varchar(200) NOT NULL,
  `user_username` varchar(200) NOT NULL,
  `user_password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_fname` varchar(200) NOT NULL,
  `user_sta` char(2) NOT NULL DEFAULT '1' COMMENT '0=admin,1=user,2=prouser',
  `date_login` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 AUTO_INCREMENT=69;


### data of table `tb_user` ###

insert into `tb_user` values ('1', '1', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ADMIN RISK2', '0', '2016-09-18 06:31:50');
insert into `tb_user` values ('2', '10', 'user', '12dea96fec20593566ab75692c9949596833adc9', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'user risk', '1', '2016-09-18 06:49:29');
insert into `tb_user` values ('3', '34', 'superuser', '8e67bb26b358e2ed20fe552ed6fb832f397a507d', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'superuser risk', '2', '2016-09-18 06:50:41');
insert into `tb_user` values ('4', '42', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ทดสอบ เข้าใช้งาน', '1', '2016-09-20 05:00:15');
insert into `tb_user` values ('5', '1', 'qmr', '9c7d2215d93c4371cc6a7267b69f1fc0293b383a', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('6', '2', 'opd', '22032088bc8d8562e9ac6c47963593d15e834165', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('7', '3', 'ipd', '0ec8a763c4952f20e0eb6c4ed251412f15d30815', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('8', '4', 'med', '8968e99e88436e59e24d1fc8b8fbfb92f0fb2c68', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('9', '5', 'dent', '53f3a5d432f70ed77ecf462eadb2b4a3adb4af6e', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('10', '6', 'env', '920f8f5815b381ea692e9e7c2f7119f2b1aa620a', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('11', '7', 'obs', '98ef8b8bf5f5ad14b5d086bf79a8c7abff6259a2', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('12', '8', 'rms', '8081031fe20c252106f58a6c5b2ce840596f0a83', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('13', '10', 'pharm', 'a7107c22dc77b51d82ae5bb84b4026e4526f7d06', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('14', '13', 'mng', '240fcfe0bad7d88e9a0e04c7eede18f24e667447', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('15', '14', 'lab', '3953f9ddf975ab5097ee468d99555c5b441169bf', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('16', '15', 'hph', '542c0c4f6cd80c8edc70b20ab3c43f56d86f1d26', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('17', '16', 'nurse', '285f9a003f671c2486a3f87ea1ad5e37699ebc38', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('68', '17', 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test', '1', '2016-09-27 10:43:55');
insert into `tb_user` values ('19', '18', 'pct', '7e9aaa26d6b09c893a0849cfb59e9229c23c5532', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('20', '19', 'ptc', '5a5160191638c3bd554f883f6d94b8e25ffc5e61', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('21', '20', 'hrm', '19e67b50c86f6a23cdd3a9a24740a3e11d3a522b', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('22', '21', 'imc', '38733843f40840aac5f4771ca054f794403b5728', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('23', '22', 'icm', 'dfe6ff9c258965c29e22044c61ed78422366c67a', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('24', '23', 'rdc', '12cd198fe49e10cde7c094d54c9517b6fe9a8b30', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('25', '24', 'ems', 'a253f2310ab98afd2ae5163409dd162753885015', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('26', '25', 'reh', '1c697f2c821b85f444fafe58b2ee6ede09d6765f', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('27', '26', 'anes', 'bd03c25d1712364555b7b1ccd67fd5fb69c23b79', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('28', '27', 'food', '39ccb32d95edfdbcd882f2b01809724ec640ea16', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('29', '28', 'tmed', '40239052645f07f58025679f36130459769cf5a8', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('30', '29', 'mind', 'd42c0112962be8a77d278ebe747514e509c4a5fa', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('31', '30', 'hscreen', '285553098cdd6a057e8d0c9aa249308bea7513b2', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('32', '31', 'ccd', '6b6efb9b042cd8fb7e3f7bd6130c49cbbb216bde', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('33', '32', 'fp', '1e3f4fd42cd5353ad63d7170b5aa6bc1f719c917', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('34', '33', 'henv', 'b17a3024155d2f7d5ab61a260cc8b6951c90f17b', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('35', '34', 'mrec', '78af483b6442b598ae7f963c936490b55076d88a', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('36', '35', 'puss', '09e84903eadd87d0d8f060c6c2ed5618e40cdb76', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('37', '36', 'hknow', 'ec0676e1a4db1272837393e96d8840a704e99fc8', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('38', '37', 'tur', 'd9d91b78f76b97671a66e197de5847455f373edd', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('39', '38', 'pers', '3e92f6c360c53c7f538a78e14866fb5938a31c76', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('40', '39', 'mot', '984ac749fe8b492e8407bb6fa3d0d8f6eb153baf', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('41', '40', 'money', 'c95259de1fd719814daef8f1dc4bd64f9d885ff0', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('42', '41', 'acc', '5e942a2261672f81ad3519b878a9265eb44fdeba', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('43', '42', 'rgen', '9fdbf7e58a5e613136bcc512bb9b9254b5bf1400', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('44', '43', 'rep', '97a134dbbcbecefa823f6ca3cfb68d3c84899cd8', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('45', '44', 'inf', 'aa3dfef42e0c22b5d2e5e3638c1b61b47bbb10da', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('46', '45', 'pcu', '62adf74308f8c2f0bf6e2337d0718721edf34d4f', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('47', '46', 'refer', 'dc1da609e15699bf4c14310f627caa6112846f4e', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('48', '47', 'hp', 'e68b072303e1c28c4073630daeb803737a761e06', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('49', '48', 'supp', '73df624a55231e2779d2b3bf2d9fc15940981451', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('50', '49', 'itc', '72cba2a2d868eecdcc34aa963a80797b848be890', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('51', '50', 'book', 'e7e694c58cd50e0324ec96918800bc35cd17629b', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('52', '51', 'secu', '40e654b47521516eb3222de239c90c61cbff59c5', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('53', '52', 'clean', '6a1cec45eaf37b34e1b1d89130d7746fe4006346', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('54', '53', 'dress', '9dbfbe4709d4588a36993be4188d56271fb95354', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('55', '54', 'fclean', 'ef581c508a5a0ca797750599a71780318e004cfa', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('56', '55', 'dimond', 'e101d8676ebb46aa6cc65599ab051393ee7c7156', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('57', '56', 'elec', 'c2726d0945f620311e9061335017657e9a946527', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('58', '57', 'water', '6d5a45920a15adea049c8f22d569ff209625a43b', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('59', '58', 'waste', '3fcdcb3d0e685f2886c129d8e7bb3a4c8cd8bd25', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('60', '59', 'field', '2da0b68df8841752bb747a76780679bcd87c6215', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('61', '60', 'manage', '3f282fcba8933e03a65a6dc92a27de8396961e2f', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '2', '2016-09-27 10:08:08');
insert into `tb_user` values ('62', '61', 'card', '2ab0591dbcf5fefdad65f3a10ae4155b91890fed', '8081031fe20c252106f58a6c5b2ce840596f0a83', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('64', '0', 'jedsada', '0953719e7b5beadf297ea61bca759ecfbbaacf49', 'bc95a193296692ee9af141d199389965fa424a5a', '', '2', '2016-09-27 10:08:08');
insert into `tb_user` values ('65', '0', 'aut', '9ae4e413d1834724b5e1d6644af4f374101fbee1', 'f20f7c8f7d44021b9fc7ebe5bc0bb8ffda1155d1', '', '2', '2016-09-27 10:08:08');
insert into `tb_user` values ('66', '0', 'noname', 'e21bfc14ad6d40e861c7ffaeba574bb61e9ae49f', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '1', '2016-09-27 10:08:08');
insert into `tb_user` values ('67', '0', 'porn', 'c22d4a0c96122151d0f579000083484879dbb527', '6af49194b63de6f890efd8b227f42097e6283945', '', '2', '2016-09-27 10:08:08');
