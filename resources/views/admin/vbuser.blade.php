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
        <link  rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons">


        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>

            .modal-confirm {
                color: #636363;
                width: 400px;
            }

            .modal-confirm .modal-content {
                padding: 20px;
                border-radius: 5px;
                border: none;
                text-align: center;
                font-size: 14px;
            }

            .modal-confirm .modal-header {
                border-bottom: none;
                position: relative;
            }

            .modal-confirm h4 {
                text-align: center;
                font-size: 26px;
                margin: 30px 0 -10px;
            }

            .modal-confirm .close {
                position: absolute;
                top: -5px;
                right: -2px;
            }

            .modal-confirm .modal-body {
                color: #999;
            }

            .modal-confirm .modal-footer {
                border: none;
                text-align: center;
                border-radius: 5px;
                font-size: 13px;
                padding: 10px 15px 25px;
            }

            .modal-confirm .modal-footer a {
                color: #999;
            }

            .modal-confirm .icon-box {
                width: 80px;
                height: 80px;
                margin: 0 auto;
                border-radius: 50%;
                z-index: 9;
                text-align: center;
                border: 3px solid #f15e5e;
            }

            .modal-confirm .icon-box i {
                color: #f15e5e;
                font-size: 46px;
                display: inline-block;
                margin-top: 13px;
            }

            .modal-confirm .btn,
            .modal-confirm .btn:active {
                color: #fff;
                border-radius: 4px;
                background: #60c7c1;
                text-decoration: none;
                transition: all 0.4s;
                line-height: normal;
                min-width: 120px;
                border: none;
                min-height: 40px;
                border-radius: 3px;
                margin: 0 5px;
            }

            .modal-confirm .btn-secondary {
                background: #c1c1c1;
            }

            .modal-confirm .btn-secondary:hover,
            .modal-confirm .btn-secondary:focus {
                background: #a8a8a8;
            }

            .modal-confirm .btn-danger {
                background: #f15e5e;
            }

            .modal-confirm .btn-danger:hover,
            .modal-confirm .btn-danger:focus {
                background: #ee3535;
            }

            .trigger-btn {
                display: inline-block;
                margin: 100px auto;
            }

        </style>

            <style>
            /* Custom style to set icon size */
            .alert i[class^="bi-"]{
            font-size: 1.5em;
            line-height: 1;
            }
            </style>
    
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
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
                        <div class="small">Logged in as : {{ Auth::user()->name }}</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </symbol>
                            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </symbol>
                            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </symbol>
                    </svg>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Virtual Buddy User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/superAdmin">Dashboard</a></li>
                            <li class="breadcrumb-item active">Admin</li>
                        </ol>
                        @if(\Session::has('success'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div>
                                    <strong class="mx-2">Success!</strong> {{ \Session::get('success') }}. 
                                    </div>
                                </div>
                            @endif
                            
                            @if(\Session::has('delete'))
                                <div class="alert alert-success d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                                    <div>
                                    <strong class="mx-2">Success!</strong> {{ \Session::get('delete') }}. 
                                    </div>
                                </div>
                            @endif 
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-users"></i>
                                Virtual Buddy User List 
                            </div>
                          
                            <div class="card-body">
                            
                            <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Program</th>
                                            <th>Semester</th>
                                            <th>Faculty</th>
                                            <th>Role</th>
                                            <th style="text-align:center">Status</th>  
                                            <th style="text-align:center">Action</th>
                                        </tr>
                                    </thead> 
                                    
                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach($user as $data )     
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email}}</td>
                                        <td>{{ $data->program }}</td>
                                        <td>{{ $data->semester }}</td>
                                        <td>{{ $data->faculty}}</td>
                                        
                                        @if ( $data->is_vb == true )
                                        <td>Virtual Buddy</td>
                                        @else
                                        <td>Student</td>
                                        @endif

                                        @if ($data->isBan == true)
                                        <td style="text-align:center;color:red"><b>Banned</b></td> 
                                        @else
                                        <td style="text-align:center;color:green"><b>Active</b></td>     
                                        @endif
                                        <td style="text-align:center">   
                                        <button class="btn btn-info" data-toggle="modal" type="button" data-target="#userModal{{ $data->id }}"><span class="fa fa-eye"></span></button>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{$data->id}}"><span class="fa fa-edit"></span></button>

                                        </td>
                                    </tr>
                                        @include('admin.testModal')
                                        <?php $no++;?>    
                                        @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                     <!-- Add Admin Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{url('add')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            
                            <div class="form-group">
                                <strong><label class="col-form-label">Name:</label></strong>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <strong><label class="col-form-label">Email:</label></strong>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <strong><label class="col-form-label">Role:</label></strong><br>
                                <select name="role" id="role" class="form-control">
                                    <option value="">--Please Select Below Option--</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <strong><label class="col-form-label">Password:</label></strong>
                                <input type="password" class="form-control" name="password">
                            </div>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>  
                        </div>
                    </div>
                    </div>
                 <!-- End of Add Admin Modal-->
                 
  

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
