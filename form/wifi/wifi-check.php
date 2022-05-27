<?php 
session_start();
include('../../include/DbConnect.php');
$mysqli = dbConnect();

$Wifi_name=$_POST['Wifi_name'];
$check_date= date_create($_POST['check_date']) ;
$check_time=date_create($_POST['check_time']);
$re_time=date_create($_POST['re_time']);
$up_time=$_POST['uptime'];
$check_ping=$_POST['check_ping'];
$led_lan=$_POST['lan_led'];
$led_24g=$_POST['24g_led'];
$led_5g=$_POST['5g_led'];
$led_power=$_POST['power_led'];
$lan_wire=$_POST['lan_wire'];
$wifi_dust=$_POST['dust'];
$mc_status = $_POST['mc_status'];
$rp_status = $_POST['rp_status'];
$remark= $_POST['remark'];
$user_id = $_SESSION['user_id'];

//Convert DateTime to String
$c_date = $check_date ->format('d-m-Y');
$c_time = $check_time->format('H:i:s');
$r_time = $re_time->format('H:i:s');


// โค๊ดสำหรับ gen เลขใบ checklist
function gen_checklist_no(){
    $mysql=dbConnect();
    $Chk_prefix = "WIF";
    $Chksql= "SELECT * FROM  tbl_auto_number WHERE no_id =1;"; //เลือกข้อมูลจากตาราง tbl_auto_number ที่มี no_id ค่าเท่ากับ 1 (Wifi อยู่ในลำดับ 1 ของตาราง)
    //tbl_auto_number จะประกอบไปด้วย Colum no_id คือคีย์หลัก , year คือปีที่สร้างเลขใบเช็คลิส , no_number คือตัวเลขที่สร้างเลขใบเช็คลิส
    $Chkresult = mysqli_query($mysql,$Chksql);
    $row = mysqli_fetch_array($Chkresult);      

    //หากปีที่ออกใบเช็คลิส == ปีที่อยู่ใน Colum year เช่น Colum year = 2022 เท่ากับปีนี้คือ 2022
    if($row['year'] == date("Y")){
        // ให้ทำการดึงค่าจาก Colum number ตัวอย่าง Colum number = 1 ค่าที่จะออกมาคือ 0001
        $number = substr("0000".$row['number'],-4,4);
        //นำค่ามารวมกันให้แสดงผลเป็นปีปัจจุบันตามด้วยเลขที่ใบ จะได้ผลลัพธ์ดังนี้ WIFI-2205-0001
        $strNumber = $Chk_prefix."-".date("y").date("m")."-".$number;

        //อัพเดทให้ +1 ในใบต่อไปเรื่อยๆ จาก 0001 เป็น 0002 คือเลขของแผ่นต่อไป
        $strPlusNumber="UPDATE tbl_auto_number SET number = number + 1 WHERE no_id =1;"; 
        $strNextNumber =$mysql->query($strPlusNumber);

    }else{
    //หากปีปัจจุบัน =! ปีที่อยู่ใน Colum year (ขึ้นปีใหม่) เช่น Colum year = 2022 แต่ปีนี้ 2023
        $number =substr("0001",-4,4); // ตั้งให้นับเป็น 0001 คือใบแรกของปี
        //นำค่ามารวมกันให้แสดงผลเป็นปีปัจจุบันตามด้วยเลขที่ใบ จะได้ผลลัพธ์ดังนี้ WIFI-2301-0001
        $strNumber = $Chk_prefix."-".date("y").date("m")."-".$number; 
        
        //อัพเดท Colum year = 2023 คือปีปัจจุบัน และ Colum number = 1 คือใบแรกของปี
        $strPlusNumber="UPDATE tbl_auto_number SET year = '".date("Y")."', number = '1' WHERE no_id =1;";
        $strNextNumber =$mysql->query($strPlusNumber);
    } 

    return $strNumber;
}



$chk_no = gen_checklist_no();


$strSql= "INSERT INTO tbl_checklist_wifi(chk_code,wifi_id,check_date,check_time,re_time,up_time,check_ping,led_lan,led_24g,led_5g,led_power,lan_wire,wifi_dust,mc_status,rp_status,remark,user_id,approve_status) 
VALUES('$chk_no','$Wifi_name','$c_date','$c_time','$r_time','$up_time','$check_ping','$led_lan','$led_24g','$led_5g','$led_power','$lan_wire','$wifi_dust','$mc_status','$rp_status','$remark','$user_id','0');";

$result =$mysqli->query($strSql);

if($rp_status== 2){
    $Sql_rp = "INSERT INTO tbl_repair_wifi(chk_code,rp_status,rp_date,rp_remark) VALUES('$chk_no','$rp_status',NOW(),'$remark');";
    $result_rp =$mysqli->query($Sql_rp);
}

if($result){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='../../index.php?page=home';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    echo "<script>history.back(-1);</script>";
}


$mysqli->close();

/* echo "ชื่อ Wifi : ".$Wifi_name."<br>";
echo "วันที่เช็ค : ".date_format($check_date,"d-m-Y")."<br>";
echo "เวลาเช็ค : ". date_format($check_time,"H:i:s") ."<br>";
echo "เวลาที่ Reset : ".date_format($re_time,"H:i:s")."<br>";
echo "ใช้งานมาเป็นเวลา : ".$uptime."<br>";
echo "สถานะการ Ping : ".$check_ping."<br>";
echo "LED: LAN : ".$lan_led."<br>";
echo "LED: 2.4G : ".$s24g_led."<br>";
echo "LED: 5G : ".$s5g_led."<br>";
echo "LED: Power ".$power_led."<br>";
echo "สภาพสาย LAN: ".$lan_wire."<br>";
echo "ฝุ่น : ".$dust."<br>";
echo "สถานะของอุปกรณ์  : ".$mc_status."<br>";
echo "หมายเหตุ : ".$remark."<br>"; */




?>