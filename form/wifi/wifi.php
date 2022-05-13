<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/differenceHours.js"></script>
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
                        <form id="form-check" action="form/wifi/wifi-check.php" method="post">
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
                                        <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="check_ping" name="check_ping" value="1" required></div>
                                        <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> Ping ได้</span>                                         
                                    </div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-text"><input type="radio" id="check_ping" name="check_ping" value="0" required></div>
                                        <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> Ping ไม่ได้</span>
                                    </div> 
                                </li>

                                <li class="list-group-item">
                                    <div class="card-title"><h5>สถานะไฟ LED <i class="fa fa-lightbulb-o"></i></h5></div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : LAN </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="lan_led" name="lan_led" value="1" required></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="lan_led" name="lan_led" value="0" required></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : 2.4 Ghz</div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="24g_led" name="24g_led" value="1" required></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="24g_led" name="24g_led" value="0" required></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : 5.0 Ghz</div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="5g_led" name="5g_led" value="1" required></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="5g_led" name="5g_led" value="0" required></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> LED : Power</div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="power_led" name="power_led" value="1" required></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>                                         
                                            </div>
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" id="power_led" name="power_led" value="0" required></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div> 
                                        </div>
                                    </div>
                                </li>                             

                                <li class="list-group-item">
                                <div class="card-title"><h5>เวลาทำงานของ WIFI <i class="fa fa-clock-o"></i></h5></div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-refresh"></i>&nbsp; Restart</span></div>
                                        <input type="time" class="form-control form-control-sm" id="re_time" name="re_time" required>
                                    </div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend"><span class="input-group-text">Uptime : </span></div>                                
                                        <span type="text" class="form-control form-control-sm" id="uptime" name="uptime" style="text-align:center; padding: 8px 0px 4px 0px;" >00h:00m</span>
                                    </div>
                                </li>

                                <li class="list-group-item">                                    
                                    <div class="card-title"><h5>สายไฟ <i class="fa fa-plug" aria-hidden="true"></i></h5></div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> สาย LAN </div>  
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="lan_wire" name="lan_wire" value="1" required></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>
                                            </div>                                            
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="lan_wire" name="lan_wire" value="0" required></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div>
                                        </div>
                                    </div>                                    
                                </li>

                                <li class="list-group-item">                                    
                                    <div class="card-title"><h5>ตัวกล่องเราท์เตอร์</h5></div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                        <div class="card-title"> ฝุ่น </div>  
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="dust" name="dust" value="1" required></div>
                                                <span class="form-control form-control-sm " ><i class="fa fa-check" style="color:green;"></i> ปกติ</span>
                                            </div>                                            
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-text"><input type="radio" class="form-check-input mt-0" id="dust" name="dust" value="0" required></div>
                                                <span class="form-control form-control-sm"><i class="fa fa-times" style="color:red;"></i> ผิดปกติ</span>
                                            </div>
                                        </div>
                                    </div>                                   
                                </li>

                            </ul>
                        </div>
                </div> <!-- card -->     
                            
                <div class="card-footer" > 
                    <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" >ยกเลิก</button>
                    <input type="submit" class="btn btn-primary"  value="ตกลง">
                    </form> 
                </div>                                
            </div>
            <div class="col"></div>
        </div>           
    </div>
</body>
</html>


<!-- Modal ยกเลิก -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:white; font-weight:bold;">ยกเลิก</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        คุณต้องการยกเลิกใช่หรือไม่ ?
      </div>
      <div class="modal-footer">
          <a class="btn btn-danger" href="?page-home">ยกเลิก</a>
        <button type="button" class="btn btn-primary"data-bs-dismiss="modal">ไม่</button>
      </div>
    </div>
  </div>
</div>





<script>$('input').on('keyup change',function () {differenceHours.diff_hours('re_time', 'check_time', 'uptime')});</script>