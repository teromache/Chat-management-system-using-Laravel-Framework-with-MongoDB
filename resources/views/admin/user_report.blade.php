<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Table Chatroom</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
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
            <a class="navbar-brand ps-3" href="index.html"><span class="fas fa-vr-cardboard"></span> Virtual Buddy App</a></a>
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
                            <a class="nav-link" href="/home">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Chat Room Info</div>
                            <a class="nav-link collapsed" href="/chatroom">
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
                                    <a class="nav-link" href="/admin">Admin</a>
                                    <a class="nav-link" href="/VB_User_Admin">VB User</a>
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
                                    <a class="nav-link" href="/user_report_admin">User Report</a>
                                    <a class="nav-link" href="/report_analytic_admin">Report Analytics</a>
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
                        <h1 class="mt-4">User Report Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/superAdmin">Dashboard</a></li>
                            <li class="breadcrumb-item active">User Report</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                User Report Information
                            </div>
                            <div class="card-body">
                            <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Offender Name</th>
                                            <th>Offender Email</th>
                                            <th style="text-align:center">Status</th>
                                            <th style="text-align:center">Action</th>
                                        </tr>
                                    </thead> 
                                    
                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach($report as $data )
                                        
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $data->offenders_name }}</td>
                                        <td>{{ $data->offenders_email}}</td>
                                           @if ( $data->status == true )
                                             <td style="color:green;text-align:center"><b>User Banned</b></td>  
                                           @else
                                             <td style="color:gray;text-align:center"><b>No action taken</b></td>
                                           @endif 
                                        <td style="text-align:center"> 
                                        <a href="{!! route('report.detail.admin', ['email'=>$data->offenders_email]) !!}" type="button" class="btn btn-info"><span class="fa fa-eye"></span> Details</a>
                                        </td>
                                    </tr>
                                        @include('super_admin.modal')
                                        <?php $no++;?>    
                                        @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; <span style="color:blue"><b>Virtual Buddy App</b></span> 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
