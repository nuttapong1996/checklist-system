<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check list Wifi</title>
</head>
<body>
    <div class="contrainer">
        <div class="row mt-5">
            
            <div class="col-sm-5 ">
                <div class="card" >
                    <div class="card-header"><h5>Check-list : WIFI</h5></div>
                    <form action="method">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="card-title"> วันที่และเวลา</div>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
                                        <input type="date" class="form-control-sm mb-3" name="check_date">                                        
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o" aria-hidden="true"></i></span></div>
                                        <input type="time" class="form-control-sm mb-3" name="check_time">
                                    </div>                                    
                                </li>
                                <li class="list-group-item">
                                    <div class="card-title">ชื่อ WIFI</div>
                                    <select class="form-control-sm mb-3" name="Wifi_name" id="Wifi_name">
                                        <option value="">เลือก Wifi</option>
                                        <option value="">Wifi 1</option>
                                        <option value="">Wifi 2</option>
                                        <option value="">Wifi 3</option>
                                        <option value="">Wifi 4</option>
                                    </select>
                                </li>
                                <li class="list-group-item">
                                    <div class="card-title">การ Ping</div>
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                                <input type="radio" class="form-control-sm" name="ping_status" value="1">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <input type="button" class="btn btn-primary" value="ตกลง">
                        </div>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>