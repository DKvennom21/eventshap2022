 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-4">EVENTSHAP Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="admin.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            DATA
        </div>

        <!-- Nav Item - EVENTS -->
        <li class="nav-item">
            <a class="nav-link" href="event.php">
                <i class="fas fa-fw fa-hotel"></i>
                <span>Events</span></a>
        </li>
        <!-- Nav Item - USERS -->
        <li class="nav-item">
            <a class="nav-link" href="user.php">
                <i class="fas fa-fw fa-glass-martini"></i>
                <span>Users</span></a>
        </li> 
        <!-- Nav Item - AREA -->
        <li class="nav-item">
            <a class="nav-link" href="area.php">
                <i class="fas fa-fw fa-home"></i>
            <span>Area</span></a>
        </li>
        <!-- Nav Item - FEEDBACK -->
        <li class="nav-item">
            <a class="nav-link" href="feedback.php">
                <i class="fas fa-fw fa-home"></i>
                <span>Feedback</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!-- <div class="sidebar-heading">
            Profile
        </div> -->
        <!-- Nav Item - Tables -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-pen"></i>
                <span>Register</span></a>
             -->
        <!-- Divider -->
        <!-- <hr class="sidebar-divider d-none d-md-block">   -->

        </ul>
        <!-- End of Sidebar -->


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"  style="color: black">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body" style="color: black">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="includes/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>