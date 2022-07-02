<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/pp.jpg">

    <title>Dashboard V2</title>

    <!-- Style Bootstrap/Plugin -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assetdb/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assetdb/darkmode/darkmode.css') }}">
</head>

<body class="bg-light bg-light_bg-darkmode" id="bodyDarkmode">
    <nav class="navbar navbar-expand-sm bg-white bg-white_fg-darkmode navbar-white shadow-sm sticky-top">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" id="toggler">
                        <i class="fa-solid fa-bars fs-2 text-dark text-dark_text-darkmode icon-toggler" id="icon-toggler1"></i>
                    </a>
                </li>
            </ul>

            <div class="d-flex ms-auto">
                <div>
                    <a class="nav-link text-dark" href="javascript:void(0);" id="darkmode">
                        <i class="fa-solid fa-moon fs-2 text-warning" id="icon-darkmode"></i>
                    </a>
                </div>

                <div>
                    <div class="dropdown">
                        <a class="nav-link text-dark" href="javascript:void(0)" data-bs-toggle="dropdown">
                            <img src="img/pp.jpg" class="rounded-circle me-2" width="30">
                            <span class="name-display text-darkmode">Apip Rahman Syahidan</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn animate__faster fg-darkmode border-darkmode">
                            <li class="">
                                <a class="dropdown-item btn-darkmode" href="javascript:void(0);">
                                    <i class="fa-solid fa-gear me-2"></i> Setting
                                </a>
                            </li>
                            <li class="">
                                <a class="dropdown-item btn-darkmode" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                    <i class="fa-solid fa-sign-in-alt me-2"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <div class="sidebar bg-white bg-white_fg-darkmode border-darkmode shadow-sm" id="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <h4 class="sidebar-title">Dashboard v2</h4>
                </li>
                <hr>
                <li class="nav-item p-2">
                    <span class="sidebar-sub-title"><i class="fa-solid fa-pager"></i> Pages</span>
                </li>
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-light btn-hover text-start btn-light_btn-darkmode w-100">
                        <i class="fa-solid fa-gauge me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-light btn-hover text-start btn-light_btn-darkmode w-100">
                        <i class="fa-solid fa-code me-2"></i> Snippets
                    </a>
                </li>
            </ul>
        </div>

        <div class="wrapper flex-fill">
            <div class="content-wrapper">
                <div class="card mx-auto fg-darkmode shadow-sm">
                    <div class="card-body table-responsive">
                        Content
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 m-1">
                            <div class="card mx-auto fg-darkmode">
                                <div class="card-body">
                                    <a class="btn btn-light btn-light_btn-darkmode w-100 text-start mb-2" id="profileInformation">
                                        <i class="fa-solid fa-user me-3"></i> Profile Information
                                    </a>
    
                                    <a class="btn btn-light btn-light_btn-darkmode w-100 text-start mb-2" id="accountSetting">
                                        <i class="fa-solid fa-gear me-3"></i> Account Setting
                                    </a>
    
                                    <a class="btn btn-light btn-light_btn-darkmode w-100 text-start mb-2" id="securitySetting">
                                        <i class="fa-solid fa-shield me-3"></i> Security
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-7 m-1">
                            <div class="card fg-darkmode" id="profileContainer">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="">Name</label>
                                        <input type="text" id="name" class="form-control input-darkmode mt-3" value="Apip Rahman Syahidan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Email</label>
                                        <input type="text" id="email" class="form-control input-darkmode mt-3" value="apipskaxx@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Bio</label>
                                        <textarea id="bio" rows="7" class="form-control input-darkmode mt-3">Menjadi Baik adalah sebuah tujuan.</textarea>
                                    </div>

                                    <button class="btn btn-primary rounded-0" id="saveProfile">Save</button>
                                </div>
                            </div>
                            <div class="card d-none fg-darkmode" id="accountContainer">
                                <div class="card-body">
                                    <p class="text-danger">Delete Account</p>

                                    <p>
                                        Jika anda menghapus akun anda, maka akun anda tidak akan kembali lagi, karena 
                                        <br>
                                        penghapusan ini bersifat permanen.
                                    </p>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control input-darkmode" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>

                                    <button class="btn btn-danger rounded-0" id="deleteAccount">Delete Account</button>
                                </div>
                            </div>
                            <div class="card d-none fg-darkmode" id="securityContainer">
                                <div class="card-body">
                                    <p>Change Password</p>

                                    <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control input-darkmode" id="password" placeholder="Password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="form-floating mt-3 mb-3">
                                        <input type="text" class="form-control input-darkmode" id="confirm_password" placeholder="Confirm Password">
                                        <label for="confirm_password">Confirm Password</label>
                                    </div>

                                    <button class="btn btn-primary rounded-0" id="changePassword">Change Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="bg-white bg-white_fg-darkmode p-3">
                    <span class="text-secondary">Dashboard V2</span>
                </div>
            </footer>

            <button class="btn btn-info text-white btn-scroll" id="btnScrollTop">
                <i class="fa-solid fa-chevron-up"></i>
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="container">
        <!-- Logout -->
        <div class="modal modal-alert py-5" style="margin-top: 180px;" id="logoutModal">
            <div class="modal-dialog">
                <div class="modal-content rounded-4 shadow fg-darkmode">
                    <div class="modal-body p-4 text-center">
                        <h5 class="mb-0">Apakah anda yakin ingin logout ?</h5>
                        <p class="mb-0"></p>
                    </div>
                    <div class="modal-footer flex-nowrap p-0">
                        <a href="#" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-right"><strong>Ya</strong></a>
                        <a href="javascript:void(0);" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">Tidak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Main JS Dashboard -->
<script src="{{ asset('assetdb/darkmode/darkmode.js') }}"></script>
<script src="{{ asset('assetdb/main.js') }}"></script>
</html>