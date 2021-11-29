<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
        <meta charset="UTF-8">
    <title>Title</title>
    <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../static/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../static/js/bootstrap.js"></script>
    < >
function fnc_free($data){
			if ($data=="1"){
				document.getElementById("w1").readOnly=false;
				document.getElementById("h1").readOnly=false;
				document.getElementById("p1").readOnly=true;
			}else if ($data=="2"){
				document.getElementById("w1").readOnly=true;
				document.getElementById("h1").readOnly=true;
				document.getElementById("p1").readOnly=false;
			}
		}
</script>





</head>
<body>

                           <div class="row">
                                    <div class="col-md-4" >
                                        <label class="control-label"><b>ปรับขนาดของรูป :  </b>
                                        &ensp;<input id="rati0" value="1" type="radio" onclick="fnc_free(1)" name="radio" ><span class="checkmark"></span>
                                        </label>
                                    </div>

                                    <div class="col-md-3"><br><br>
                                        <input type="number" required="" id="w1" name="weight" autocomplete="off" placeholder="กว้าง (weight)" class="form-control" value="{{s[0]}}"  multiple readonly>
                                    </div>

                                    <div class="col-md-3 col-md-offset-4"><br>
                                        <input type="number" required="" id="h1" name="height" autocomplete="off" placeholder="สูง (height)" class="form-control" value="{{s[1]}}" multiple readonly>
                                    </div>
                           </div>
                           <div class="row">
                                    <div class="col-md-4"><br>
                                        <label class="control-label"><b>ปรับขนาดเป็น %:  </b></label>
                                        &ensp;<input id="rati2" value="2" type="radio"  onclick="fnc_free(2)" name="radio"><span class="checkmark"></span>
                                    </div>
                                    <div class="col-md-3"><br>
                                        <input id="p1" type="number" min="1" max="100" required="" name="percent" autocomplete="off"  placeholder="ใส่ตัวเลข 1-100" class="form-control" value="100" multiple readonly>
                                    </div>
                           </div>


</body>
</html>