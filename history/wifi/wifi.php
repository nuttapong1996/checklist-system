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