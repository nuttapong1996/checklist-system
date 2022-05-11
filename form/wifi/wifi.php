<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check list Wifi</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5"> 
            <div class="col"></div>           
            <div class="col-sm-5 ">
                <div class="card" >
                        <div class="card-header">
                            <h5>Check-list : WIFI <i class="fa fa-wifi"></i></h5>
                        </div>
                        <form action="#" action="post">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="card-title"> <h5>วันที่และเวลา</h5></div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" ></i></span></div>
                                        <input type="date" class="form-control form-control-sm" id="check_date" name="check_date" value="<?php echo date("Y-m-d"); ?>">                                   
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-clock-o" ></i></span></div>
                                        <input type="time" class="form-control form-control-sm" id="check_time" name="check_time" value="<?php echo date("H:i"); ?>">
                                    </div>                                    
                                </li>

                                <li class="list-group-item">
                                    <div class="card-title"><h5>ชื่อ WIFI</h5></div>
                                    <div class="input-group mb-3 input-group-sm ">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-wifi" ></i></span></div>
                                        <select class="form-control form-control-sm" name="Wifi_name" id="Wifi_name" required>
                                            <option value="">เลือก Wifi</option>
                                            <option value="">Wifi 1</option>
                                            <option value="">Wifi 2</option>
                                            <option value="">Wifi 3</option>
                                            <option value="">Wifi 4</option>
                                        </select>
                                    </div>        
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="card-title"><h5>สถานะ Ping <i class="fa fa-signal"></i></h5></div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="check_ping" name="check_ping" value="1"></div>
                                        <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> Ping ได้</span>                                         
                                    </div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-text"><input type="radio" id="check_ping" name="check_ping" value="0"></div>
                                        <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> Ping ไม่ได้</span>
                                    </div> 
                                </li>

                                <li class="list-group-item">
                                    <div class="card-title"><h5>สถานะไฟ LED <i class="fa fa-lightbulb-o"></i></h5></div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : LAN </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="lan_led" name="lan_led" value="1"></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="lan_led" name="lan_led" value="0"></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : 2.4 Ghz</div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="24g_led" name="24g_led" value="1"></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="24g_led" name="24g_led" value="0"></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : 5.0 Ghz</div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="5g_led" name="5g_led" value="1"></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="5g_led" name="5g_led" value="0"></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : Power</div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="power_led" name="power_led" value="1"></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="power_led" name="power_led" value="0"></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>
                                </li>                             

                                <li class="list-group-item">
                                <div class="card-title"><h5>เวลาทำงานของ WIFI <i class="fa fa-clock-o"></i></h5></div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-refresh"></i>&nbsp; Restart</span></div>
                                        <input type="time" class="form-control form-control-sm" id="re_time" name="re_time" onchange="disDiff()">
                                    </div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text">Uptime : </span></div>
                                        <input type="text" class="form-control form-control-sm" id="uptime" name="uptime" readonly>
                                    </div>
                                </li>

                            </ul>
                        </div>
                </div> <!-- card -->                 
                <div class="card-footer"><input type="submit" class="btn btn-primary" value="ตกลง"></div> </form>                                    
            </div>
            <div class="col"></div>
        </div>           
    </div>
</body>
</html>

<script>

var time_start = document.getElementById('check_time').value;
var time_restart = document.getElementById('re_time').value;
var up_time = document.getElementById('uptime');

function diff(time_start, time_restart) {
    time_start = time_start.split(":");
    time_restart = time_restart.split(":");
    var startDate = new Date(0, 0, 0, time_start[0], time_start[1], 0);
    var endDate = new Date(0, 0, 0, time_restart[0], time_restart[1], 0);
    var diff = endDate.getTime() - startDate.getTime();
    var hours = Math.floor(diff / 1000 / 60 / 60);
    diff -= hours * 1000 * 60 * 60;
    var minutes = Math.floor(diff / 1000 / 60);
    
    return  hours +(hours > 0 ? "h" : "")  + ":" + (minutes < 9 ? "0" : "") + minutes+"m";
}

function disDiff(){
    up_time.value = diff(time_start, time_restart);
}


</script>