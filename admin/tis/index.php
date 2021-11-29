<?php
      if(isset($_POST) && !empty($_POST)){
   $Username = $_POST['Username'];
   $Password = $_POST['Password'];
   $Emp_name = $_POST['Emp_name'];
   $Emp_last = $_POST['Emp_last'];
   $Emp_tel = $_POST['Emp_tel'];
   $Emp_add = $_POST['Emp_add'];
   $Emp_date = $_POST['Emp_date'];
   $position = $_POST['position'];
      }
$sql = "SELECT * FROM tis_tb ";
$query = sqlsrv_query($conn, $sql);
?>
<form method="post">
    
    <a>เพิ่มเลข มอก. จาก : </a>
    <br>
    <input id="rati0" value="1" type="radio" onclick="fnc_free(1)" name="radio" ><a>ประชุม</a>
    <input id="rati0" value="1" type="radio" onclick="fnc_free(1)" name="radio" ><a>จดหมาย สมอ.</a>
    <input id="rati0" value="1" type="radio" onclick="fnc_free(1)" name="radio" ><a>ราชกิจจานุเบกษา</a>
            <div style="overflow-x:auto;">
<table class="table table table-dark table-hover table-responsive" >
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">มาตรฐานเลขที่</th>
                            <th class="text-center">ประเภทผลิตภัณฑ์</th>
                            <th class="text-center">กลุ่มผลิตภัณฑ์</th>
                            <th class="text-center">ศูนย์ที่เกี่ยวข้อง</th>
                            <th class="text-center">ที่มา</th>
                            <th class="text-center">ชื่อการประชุม/<br>วาระการประชุม</th>
                            <th class="text-center">แบบสำรวจ</th>
                            <th class="text-center">วันที่รับหนังสือจาก สมอ.</th>
                            <th class="text-center">วันที่ส่งเอกสารไป สมอ.</th>
                            <th class="text-center">หน่วยงานคู่แข่ง</th>
                            <th class="text-center">วันที่ประกาศ<br>ราชกิจจานุเบกษา</th>
                            <th class="text-center">เอกสารแนบ</th>
                            <th class="text-center">วันที่ส่งเอกสารแนบ</th>
                            <th class="text-center">เลข tracking</th>
                            <th class="text-center">หมายเหตุ</th>
                            <th class="text-center">เมนูการจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) : ?>
                    <tr class="text-center">
                            <td class="align-middle"><?= $result['tis_id'] ?></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td><input style="width:200px;" type="text" class="form-control" name="type_id" autocomplete="off"  required></td>
                            <td class="align-middle">
                                <a href="?page=<?= $_GET['page'] ?>&function=add&tis_id=<?= $data['tis_id'] ?>"
                                    class="btn btn-sm btn-primary">ยืนยัน</a>
                            </td>       
                    </tr>
                    <?php endwhile ; ?>
                    </tbody>
</table>
                    </div>
</div>

                    </form>