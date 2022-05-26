<?php 
//ฟังชั่นแสดงรายการสถานะการแจ้งซ่อม
    function getEqs(){
        $mysql= dbConnect();
        $sqlstatus = "SELECT * FROM tbl_equipment_status WHERE eqs_id = '1' OR eqs_id ='2';";
        $resultstatus= $mysql->query($sqlstatus);
        while($rowstatus = $resultstatus->fetch_assoc()){ 
            echo '<option value="'.$rowstatus['eqs_id'].'">'.$rowstatus['eqs_name'].'</option>';
        } 
}

//ฟังชั่นแสดงรายชื่อ WIFI
    function getWifi(){
        $mysql= dbConnect();
        $sqlwifi = "SELECT * FROM tbl_list_wifi;";
        $resultwifi= $mysql->query($sqlwifi);
        while($rowwifi = $resultwifi->fetch_assoc()){ 
            echo '<option value="'.$rowwifi['wifi_id'].'">'.$rowwifi['wifi_name'].'</option>';
        } 
}
?>