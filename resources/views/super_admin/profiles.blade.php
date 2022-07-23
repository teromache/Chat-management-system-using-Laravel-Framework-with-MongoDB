<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <style>
            .avatar {
            vertical-align: middle;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            }

            .logo {
            vertical-align: middle;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            }
        </style>
   
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/superAdmin"><span class="fas fa-vr-cardboard"></span> Virtual Buddy App</a></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                                    <i class="fas fa-user-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                        <hr class="dropdown-divider" />
                        <a class="dropdown-item" href="{{ route('logout') }}" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/superAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Chat Room Info</div>
                            <a class="nav-link collapsed" href="/chatroom_superAdmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment-dots"></i></div>
                                Chat Room 
                            </a>
                            <div class="sb-sidenav-menu-heading">User Info</div>                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                User
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminlist_superAdmin">Admin</a>
                                    <a class="nav-link" href="/VB_User_SuperAdmin">VB User</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Report</div>                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReports" aria-expanded="false" aria-controls="collapseReports">
                                <div class="sb-nav-link-icon"><i class="fa fa-line-chart"></i></div>
                                Report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseReports" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/user_report">User Report</a>
                                    <a class="nav-link" href="/report_analytic">Report Analytics</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"><img class="avatar" src="/users/images/{{ \Auth::user()->picture }}" alt="">&nbsp;&nbsp; <span style="font-size:15px">{{ Auth::user()->name }}</span></div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/superAdmin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                @extends('super_admin.profile_layout')
                @section('title','Profile')

                @section('content')
    
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle admin_picture" src="/users/images/{{ \Auth::user()->picture}}" alt="User profile picture">
                                </div>
                
                                <h3 class="profile-username text-center admin_name">{{Auth::user()->name}}</h3>
                
                                <p class="text-muted text-center">{{Auth::user()->role}}</p>

                                <input type="file" name="admin_image" id="admin_image" style="opacity: 0;height:1px;display:none">
                                <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Change picture</b></a>
                                
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                
                        
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>
                                </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="personal_info">
                                    <form class="form-horizontal" method="POST" action="{{ route('superAdminProfile') }}" id="AdminInfoForm">
                                        <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{ Auth::user()->name }}" name="name" required>

                                            <span class="text-danger error-text name_error"></span>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}" name="email" required>
                                            <span class="text-danger error-text email_error" ></span>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputName2" class="col-sm-2 col-form-label">Phone Number</label>
                                        <div class="col-sm-10">
                                            <input type="phone" class="form-control" id="inputName2" placeholder="Phone number" value="{{ Auth::user()->phone }}" name="phone" required>
                                            <span class="text-danger error-text phone_error"></span>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="inputName3" class="col-sm-2 col-form-label">Position</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName3" placeholder="Position" value="{{ Auth::user()->position }}" name="position" required>
                                            <span class="text-danger error-text name_error"></span>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Save Changes</button>
                                        </div>
                                        </div>
                                    </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div class="tab-pane" id="change_password">
                                        <form class="form-horizontal" action="{{ route('superAdminChangePassword') }}" method="POST" id="changePasswordAdminForm">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                                            <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputName" placeholder="Enter current password" name="oldpassword">
                                            <span class="text-danger error-text oldpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                            <input type="password" class="form-control" id="newpassword" placeholder="Enter new password" name="newpassword">
                                            <span class="text-danger error-text newpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Confirm New Password</label>
                                            <div class="col-sm-10">
                                            <input type="password" class="form-control" id="cnewpassword" placeholder="ReEnter new password" name="cnewpassword">
                                            <span class="text-danger error-text cnewpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Update Password</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->
                </div>


 
                   
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <span style="color:blue"><b>Virtual Buddy Application</b></span> 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                @endsection
         <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                        </div>
                    </div>
                </div>
            </div>       

        
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        
        
    </body>
</html>
