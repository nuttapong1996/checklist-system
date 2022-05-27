<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
       
    ?>
    <title>ประวัติ Checklist</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col"></div>
            <div class="col-sm-12">
                <div class="col-sm-5">
                    <div class="input-group">
                    <select class="form-control form-control-sm" name="" id="">
                    <option value="">เดือน</option>
                    <option value="01"> มกราคม</option>
                    <option value="02"> กุมภาพันธ์</option>
                    <option value="03"> มีนาคม</option>
                    <option value="04"> เมษายน</option>
                    <option value="05"> พฤษภาคม</option>
                    <option value="06"> มิถุนายน</option>
                    <option value="07"> กรกฎาคม</option>
                    <option value="08"> สิงหาคม</option>
                    <option value="09"> กันยายน</option>
                    <option value="10"> ตุลาคม</option>
                    <option value="11"> พฤศจิกายน</option>
                    <option value="12"> ธันวาคม</option>
                </select>
                <?php 
                $current_year = date("Y");
                $earliest_year = 2021;
                $last_year =date("Y");

                echo "<select class='form-control form-control-sm' name='' id=''>";
                echo "<option value=''>ปี</option>";
                foreach(range($last_year, $earliest_year) as $r){
                    echo "<option value='$r'>$r</option>";
                }
                echo "</select>";
                ?>
                    </div>
                </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>

<script>
    $(document).ready(function () {
    $('#example').DataTable({
        order: [[3, 'desc']],
    });
});
</script>