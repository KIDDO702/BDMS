<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../sass/icofont/icofont.min.css">
    <link rel="stylesheet" href="../sass/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="navbar navbar-expand-lg header fixed-top">
            <div class="header-left">
                <a href="./dashboard.php" class="logo d-flex">
                    <img src="../img/logo-removebg-preview.png" alt="logo" class="img-fluid" height="50" width="50">
                    <span class="text-dark ms-auto" style="font-size: 20px; font-weight: 600; text-decoration:none;">BloodDonORG</span>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <a href="#" id="toogle_btn">
                    <i class="fas fa-align-left"></i>
                </a>
                <div class="top-nav-search mx-auto" style="margin-left: 4rem;">
                    <form action="#" class="input-group">
                        <input type="text" class="form-control" placeholder="Search" style="border-radius: 30px 0 0 30px;">
                        <button class="btn btn-primary" type="button" style="border-radius: 0 30px 30px 0;">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <ul class="nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class=" far fa-bell" style="font-size: 20px; color: #8D99AE;"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="user-img">
                                <img src="" alt="" class="rounded-circle">
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-menu">
                    <ul class="nav flex-column pt-4 nav-tabs" id="nav_accordion">
                        <li class="menu-item" style="font-size: 14px; font-weight:600;color: #9e9e9e;">
                            Main Menu
                        </li>
                        <li class="nav-item">
                            <a href="./dashboard.php" class="nav-link">
                                <i class="fas fa-house-medical"></i>
                                <span class="text-dark" style="margin-left: 10px;">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./bloodbank.php" class="nav-link">
                                <i class="fas fa-droplet"></i>
                                <span class="text-dark" style="margin-left: 10px;">Blood Bank</span>
                            </a>
                        </li>
                        <li class="nav-item has-submenu">
                            <a href="" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span class="text-dark" style="margin-left: 10px;">Donors</span>
                            </a>
                            <ul class="submenu collapse">
                                <li><a href="./adddonor.php" class="nav-link">
                                        <i class="fas fa-user-plus"></i>
                                        <span class="text-dark" style="margin-left: 5px;">Add Donor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./viewdonor.php" class="nav-link">
                                        <i class="fas fa-eye"></i>
                                        <span class="text-dark" style="margin-left: 5px;">View Donors</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link has-submenu active">
                                <i class="fas fa-chart-bar"></i>
                                <span class="text-dark" style="margin-left: 10px;">Requests</span>
                            </a>
                            <ul class="submenu collapse">
                                <li><a href="./addrequest.php" class="nav-link">
                                        <i class="fas fa-user-plus"></i>
                                        <span class="text-dark" style="margin-left: 5px;">Add Request</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./viewrequest.php" class="nav-link">
                                        <i class="fas fa-eye"></i>
                                        <span class="text-dark" style="margin-left: 5px;">View Requests</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="page-wrapper" style="min-height: 708px;">
            <div class="container-fluid content">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin</h3>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="./dashboard.php" style="text-decoration: none;">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Request</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <strong class="h6">Request Infromation</strong>
                                <!-- <h5 class="form-title">
                                    <span>Donor Infromation</span>
                                </h5> -->
                            </div>
                            <div class="card-body">
                                <form action="#" method="#">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Full Name</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Contact</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Gender</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Male</option>
                                                    <option value="1">Female</option>
                                                    <option value="2">Other</option>
                                                    <!-- <option value="3">Three</option> -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Date Of Birth</label>
                                                <input type="date" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Weight</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Blood Group</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Blood Qunatity</label>
                                                <input type="text" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group mb-3">
                                                <label style="display: inline-block; margin-bottom: .2rem; font-weight:500;">Collection Date</label>
                                                <input type="date" class="form-control" name="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <button class="btn btn-primary ms-auto">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="../js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>