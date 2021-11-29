<?php
$sql = "SELECT * FROM tis_tb ";
$query = sqlsrv_query($conn, $sql);
?>
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="col-md-12 grid-margin stretch-card">
                <table class="table table-bordered" id="tableall">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">มาตรฐานเลขที่</th>
                            <th scope="col" class="text-center">ประเภทผลิตภัณฑ์</th>
                            <th scope="col" class="text-center">กลุ่มผลิตภัณฑ์</th>
                            <th scope="col" class="text-center">ศูนย์ที่เกี่ยวข้อง</th>
                            <th scope="col" class="text-center">ที่มา</th>
                            <th scope="col" class="text-center">ชื่อการประชุม/วาระการประชุม</th>
                            <th scope="col" class="text-center">แบบสำรวจ</th>
                            <th scope="col" class="text-center">วันที่รับหนังสือจาก สมอ.</th>
                            <th scope="col" class="text-center">วันที่ส่งเอกสารไป สมอ.</th>
                            <th scope="col" class="text-center">หน่วยงานคู่แข่ง</th>
                            <th scope="col" class="text-center">วันที่ประกาศราชกิจจานุเบกษา</th>
                            <th scope="col" class="text-center">เอกสารแนบ</th>
                            <th scope="col" class="text-center">วันที่ส่งเอกสารแนบ</th>
                            <th scope="col" class="text-center">เลข tracking</th>
                            <th scope="col" class="text-center">หมายเหตุ</th>
                            <th scope="col" class="text-center">เมนูการจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) : ?>
                        <tr class="text-center">
                            <td class="align-middle"><?= $result['tis_id'] ?></td>
                            <td class="align-middle"><?= $result['type_id'] ?></td>
                            <td class="align-middle"><?= $result['group_name'] ?></td>
                            <td class="align-middle"><?= $result['center'] ?></td>
                            <td class="align-middle"><?= $result['form'] ?></td>
                            <td class="align-middle"><?= $result['meet_name'] ?></td>
                            <td class="align-middle"><?= $result['survery'] ?></td>
                            <td class="align-middle"><?= $result['receive_date'] ?></td>
                            <td class="align-middle"><?= $result['send_date'] ?></td>
                            <td class="align-middle"><?= $result['rival'] ?></td>
                            <td class="align-middle"><?= $result['gazette_date'] ?></td>
                            <td class="align-middle"><?= $result['file_sub'] ?></td>
                            <td class="align-middle"><?= $result['date_submit'] ?></td>
                            <td class="align-middle"><?= $result['tracking'] ?></td>
                            <td class="align-middle"><?= $result['note'] ?></td>
                            <td class="align-middle">
                                <a href="?page=<?= $_GET['page'] ?>&function=update&id=<?= $result['id'] ?>"
                                    class="btn btn-sm btn-primary">ยืนยันสถานะ</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
            </tbody>
                </table>
                        </div>
                        </div>
                        </div>
                        </div>
            <script type="text/javascript">
$(document).ready(function() {
    $('#tableall').DataTable({
        language: {

            "decimal": "",
            "emptyTable": "ไม่พบข้อมูล",
            "info": "แสดง _START_ to _END_ of _TOTAL_ รายการ",
            "infoEmpty": "แสดง 0 ถึง 0 จากทั้งหมด 0 รายการ",
            "infoFiltered": "(filtered from _MAX_ total entries)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "แสดง _MENU_ รายการ",
            "loadingRecords": "Loading...",
            "processing": "Processing...",
            "search": "ค้นหา:",
            "zeroRecords": "No matching records found",
            "paginate": {
                "first": "First",
                "last": "Last",
                "next": "Next",
                "previous": "Previous"
            },
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }
        }
    });
});
</script>