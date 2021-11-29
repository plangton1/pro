<?php include('../connection/connect.php');?>
<!DOCTYPE html>
<html lang="en">
    <?php include('./include/head.php');?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('./include/menu.php');?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
            <?php include('./include/top.php');?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php
                if (!isset($_GET['page']) && empty($_GET['page'])) {
                include('dashboard/index.php');
                }elseif (isset($_GET['page']) && $_GET['page'] == 'dashboard') {
                    include('dashboard/index.php');
                }elseif (isset($_GET['page']) && $_GET['page'] == 'tis') {
                    if(isset($_GET['function']) && $_GET['function'] == 'add'){
                        include('tis/insert.php');
                    }else{
                        include('tis/index.php');
                        }
                }elseif (isset($_GET['page']) && $_GET['page'] == 'listtis') {
                    include('listtis/index.php');
                }
                ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
<?php include('./include/logout.php');?>
    <?php include('./include/script.php');?>
</body>

</html>