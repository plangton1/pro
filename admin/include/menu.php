     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">ระบบติดตามเอกสาร</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link active <?php echo isset($_GET['page']) && ($_GET['page']) == 'dashboard' ? 'active' : '' ?>" href="?page=dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>หน้าหลัก</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>เอกสาร มอก.</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">หัวหลัก:</h6>
            <a class="collapse-item active <?php echo isset($_GET['page']) && ($_GET['page']) == 'tis' ? 'active' : '' ?>"
                            href="?page=tis">เอกสาร</a>
            <a class="collapse-item active <?php echo isset($_GET['page']) && ($_GET['page']) == 'dashboard' ? 'active' : '' ?>"
                            href="?page=listtis">หน้ารายการเอกสาร</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>รายการสถานะ มอก.</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">รายการสถานะ:</h6>
            <a class="collapse-item" href="login.html">รายการท้งหมด</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>รายงาน</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse -header">รายงาน:</h6>
            <a class="collapse-item" href="utilities-color.html">รายงานรายศูนย์</a>
            <a class="collapse-item" href="utilities-border.html">รายงานช่วงเวลา</a>
            <a class="collapse-item" href="utilities-animation.html">รายงานรายสถานะ</a>
            <a class="collapse-item" href="utilities-other.html">รายงานตามคู่แข่ง</a>
        </div>
    </div>
</li>

</ul>
<!-- End of Sidebar -->