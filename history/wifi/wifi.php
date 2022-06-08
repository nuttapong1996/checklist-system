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

                    echo "ปี &nbsp;<select class='form-control form-control-sm' name='' id=''>";
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
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-sm-12">
                <table class="table table-sm" id="myTable">
                    <?php
                    $mysqli = dbConnect();
                    $strsql = "SELECT * FROM tbl_checklist_wifi WHERE substring(check_date,5,2) = month(NOW()) AND substring(check_date,7,4) = YEAR(NOW());";
                    $result = $mysqli->query($strsql);
                    ?>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>เลขที่</th>
                            <th>Wifi</th>
                            <th>วันที่ตรวจเช็ค</th>
                            <th>เวลาที่ตรวจเช็ค</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['chk_code'] . "</td>";
                            echo "<td>" . $row['wifi_id'] . "</td>";
                            echo "<td>" . $row['check_date'] . "</td>";
                            echo "<td>" . $row['check_time'] . "</td>";
                            echo "</tr>";
                            $i++;
                        }

                        ?>
                    </tbody>
                </table>
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