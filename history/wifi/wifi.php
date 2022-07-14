<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    include('include/DbConnect.php');
    ?>
    <title>ประวัติ Checklist</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-5">
                <form action=""method="post">
                <div class="input-group">
                    <?php
                        $selected_month = date('m'); //current month
                        // replace and add new months list
                        $months_name = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];

                        echo 'เดือน &nbsp; <select class="form-control form-control-sm" id="month" name="month">'."\n";
                        for ($i_month = 1; $i_month <= 12; $i_month++) { 
                            $selected = ($selected_month == $i_month ? ' selected' : '');
                            echo '<option value="'.$i_month.'"'.$selected.'>'. $months_name[$i_month-1].'</option>'."\n";
                        }
                            echo '</select>&nbsp;';
                    ?>
                    <?php
                    $current_year = date("Y");
                    $earliest_year = 2021;
                    $last_year = date("Y");

                    echo "ปี &nbsp;<select class='form-control form-control-sm' name='year' id='year'>";
                    echo "<option value=''>ปี</option>";
                    foreach (range($last_year, $earliest_year) as $r) {
                        echo "<option value='$r'";
                        if ($r == $current_year) {
                            echo "selected";
                        }
                        echo ">$r</option>";
                    }
                    echo "</select>";
                    ?>
                    <input type="submit" class="btn btn-primary" id="Dsubmit" name="Dsubmit" value="Ok">
                </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col-sm-12">
                <div class="table-responsive-sm">
                <table class="table table-sm table-bordered" id="myTable">
                    <caption class="caption-top"><?php echo "Date : ". date('d-m-Y'); ?></caption>
                    <?php
                    $mysqli = dbConnect();
                    $strsql = " SELECT tbl_checklist_wifi.chk_code,tbl_list_wifi.wifi_name,tbl_checklist_wifi.check_date,tbl_checklist_wifi.check_time, 
                                tbl_user.fname,
                                tbl_equipment_status.eqs_name
                                FROM
                                tbl_checklist_wifi
                                INNER JOIN tbl_list_wifi ON tbl_checklist_wifi.wifi_id = tbl_list_wifi.wifi_id
                                INNER JOIN tbl_user ON tbl_checklist_wifi.user_id =tbl_user.user_id 
                                INNER JOIN tbl_equipment_status ON tbl_checklist_wifi.rp_status = tbl_equipment_status.eqs_id
                                WHERE substring(check_date,5,1) = month(NOW()) AND substring(check_date,7,4) = YEAR(NOW());";
                    $result = $mysqli->query($strsql) or die($mysqli->error);
                    
                //SQL select month and year
                if(isset($_POST['month']) && isset($_POST['year'])){  
                $month = $_POST['month'];
                $year = $_POST['year'];
                $sqlMonthYear = "SELECT tbl_checklist_wifi.chk_code,tbl_list_wifi.wifi_name,tbl_checklist_wifi.check_date,tbl_checklist_wifi.check_time, 
                                tbl_user.fname,
                                tbl_equipment_status.eqs_name
                                FROM
                                tbl_checklist_wifi
                                INNER JOIN tbl_list_wifi ON tbl_checklist_wifi.wifi_id = tbl_list_wifi.wifi_id
                                INNER JOIN tbl_user ON tbl_checklist_wifi.user_id =tbl_user.user_id 
                                INNER JOIN tbl_equipment_status ON tbl_checklist_wifi.rp_status = tbl_equipment_status.eqs_id
                                WHERE substring(check_date,5,1) = month($month) AND substring(check_date,7,4) = YEAR($year);";
                $MonthYearResult = $mysqli->query($sqlMonthYear) or die($mysqli->error); 
                }

                    ?>
                    <thead class="table-dark" style="text-align:center;">
                        <tr>
                            <th>#</th>
                            <th>เลขที่</th>
                            <th>Wifi</th>
                            <th>วันที่ตรวจเช็ค</th>
                            <th>เวลาที่ตรวจเช็ค</th>
                            <th>ผู้ตรวจเช็ค</th>
                            <th>สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                        
                        if(isset($_POST['month']) && isset($_POST['year'])){                          
                            $i = 1;
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
    
                                echo "<td>" . $i . "</td>";
                                echo "<td>" . $row['chk_code'] . "</td>";
                                echo "<td>" . $row['wifi_name'] . "</td>";
                                echo "<td>" . $row['check_date'] . "</td>";
                                echo "<td>" . $row['check_time'] . "</td>";
                                echo "<td>" . $row['fname'] . "</td>";
                                echo "<td>" ;
    
                                if($row['eqs_name']=="ปกติ"){
                                    echo "<a class = 'btn btn-primary' href='history/wifi/detail.php?chk=".$row['chk_code']."'>".$row['eqs_name']."</a>";
                                }else if($row['eqs_name']=="แจ้งซ่อม"){
                                    echo "<a class = 'btn btn-danger'>".$row['eqs_name']."</a>";
                                }else if($row['eqs_name']=="รอดำเนินการ"){
                                    echo "<a class = 'btn btn-warning'>".$row['eqs_name']."</a>";
                                }
    
                                echo "</td>";
                                echo "</tr>";
                                $i++;
                            } 
                        }else{                      
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";

                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['chk_code'] . "</td>";
                            echo "<td>" . $row['wifi_name'] . "</td>";
                            echo "<td>" . $row['check_date'] . "</td>";
                            echo "<td>" . $row['check_time'] . "</td>";
                            echo "<td>" . $row['fname'] . "</td>";
                            echo "<td>" ;

                            if($row['eqs_name']=="ปกติ"){
                                echo "<a class = 'btn btn-primary' href='history/wifi/detail.php?chk=".$row['chk_code']."'>".$row['eqs_name']."</a>";
                            }else if($row['eqs_name']=="แจ้งซ่อม"){
                                echo "<a class = 'btn btn-danger'>".$row['eqs_name']."</a>";
                            }else if($row['eqs_name']=="รอดำเนินการ"){
                                echo "<a class = 'btn btn-warning'>".$row['eqs_name']."</a>";
                            }

                            echo "</td>";
                            echo "</tr>";
                            $i++;
                        }
                        }
                        //Selected month and year

                        ?>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    $('#myTable').DataTable({
        responsive: true
    });
</script>

<script>
    $('#Dsubmit').click(function() {
        var month = $('#month').val();
        var year = $('#year').val();
        var url = "history/wifi/wifi.php?month=" + month + "&year=" + year;
        window.location.href = url;
    });
</script>