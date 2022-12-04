<?php 
    
    session_start();
    if (strlen($_SESSION['id']) === 0) {
        header('location: index.php');
    } else {
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./sass/icofont/icofont.min.css">
    <link rel="stylesheet" href="./sass/style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="navbar navbar-expand-lg header fixed-top">
            <div class="header-left">
                <a href="./dashboard.php" class="logo d-flex">
                    <img src="./img/logo-removebg-preview.png" alt="logo" class="img-fluid" height="50" width="50">
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
                            <a href="./dashboard.php" class="nav-link active">
                                <i class="fas fa-house-medical"></i>
                                <span class="text-dark" style="margin-left: 10px;">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./available.php" class="nav-link">
                                <i class="fas fa-droplet"></i>
                                <span class="text-dark" style="margin-left: 10px;">Available Blood</span>
                            </a>
                        </li>
                        <li class="nav-item has-submenu">
                            <a href="./donate.php" class="nav-link">
                                <i class="fas fa-list"></i>
                                <span class="text-dark" style="margin-left: 10px;">Donate</span>
                            </a>
                            <!-- <ul class="submenu collapse">
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
                            </ul> -->
                        </li>
                        <li class="nav-item">
                            <a href="./request.php" class="nav-link has-submenu">
                                <i class="fas fa-chart-bar"></i>
                                <span class="text-dark" style="margin-left: 10px;">Request</span>
                            </a>
                            <!-- <ul class="submenu collapse">
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
                            </ul>-->
                        </li>
                        <li class="nav-item">
                            <a href="./inc/logout.inc.php" class="nav-link">
                                <i class="fas fa-right-from-bracket"></i>
                                <span class="text-dark" style="margin-left: 10px;">Log Out</span>
                            </a>
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
                            <h3 class="page-title d-flex">Welcome<?php echo "<h3 class='page-title'>".$_SESSION['name']."</h3>";?></h3>
                            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Dashboard</li>
                                    <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="card bg-light w-100 shadow-sm" style="border-color: #EF233C;">
                            <div class="card-body" style="background-color: rgba(239, 35, 60, 0.5);">
                                <div class="bd-widgets justify-content-between align-items-center d-flex">
                                    <div class="bd-icon">
                                        <i class="fas fa-hand-holding-medical"></i>
                                    </div>
                                    <div class="bd-info align-items-center justify-content-center" style="margin-right: 1rem;">
                                        <h4>Donate Blood</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="./donate.php" class="card-link d-flex" style="text-decoration: none;">
                                    <span>Donate</span>
                                    <i class="fas fa-chevron-right d-flex align-items-center ms-auto justify-content-center"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="card bg-light w-100 shadow-sm" style="border-color: #EF233C;">
                            <div class="card-body" style="background-color: rgba(239, 35, 60, 0.5);">
                                <div class="bd-widgets justify-content-between align-items-center d-flex">
                                    <div class="bd-icon">
                                        <i class="icofont-blood"></i>
                                    </div>
                                    <div class="bd-info align-items-center justify-content-center" style="margin-right: 1rem;">
                                        <h4 class="">View Blood</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="./available.php" class="card-link d-flex" style="text-decoration: none;">
                                    <span>Registered Blood</span>
                                    <i class="fas fa-chevron-right d-flex align-items-center ms-auto justify-content-center"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="card bg-light w-100 shadow-sm" style="border-color: #EF233C;">
                            <div class="card-body" style="background-color: rgba(239, 35, 60, 0.5);">
                                <div class="bd-widgets justify-content-between align-items-center d-flex">
                                    <div class="bd-icon">
                                        <i class="icofont-reply-all"></i>
                                    </div>
                                    <div class="bd-info align-items-center justify-content-center" style="margin-right: 1rem;">
                                        <h4 class="">Request</h4>
                                        <!-- <h6>Requests</h6> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="./request.php" class="card-link d-flex" style="text-decoration: none;">
                                    <span>Request Blood</span>
                                    <i class="fas fa-chevron-right d-flex align-items-center ms-auto justify-content-center"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-sm-12">
                        <div class="card shadow">
                            <div class="card-header bg-info" style="background-color: transparent;">
                                <strong class="h5">Available Blood</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 col-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table table-striped table-responsive">
                                                    <thead class="bg-info">
                                                        <tr>
                                                            <th>Name</th>
                                                            <th class="text-center">Blood Group</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Date Collected</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Blood Groups</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Blood Group A
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="justify-content-between align-items-center bd-widgets d-flex">
                                                                            <div class="bd-icon">
                                                                                <i class="fas fa-a"></i>
                                                                            </div>
                                                                            <div class="bd-info align-items-center">
                                                                                <h3>020</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Blood Group B
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="justify-content-between align-items-center bd-widgets d-flex">
                                                                    <div class="bd-icon">
                                                                        <i class="fas fa-b"></i>
                                                                    </div>
                                                                    <div class="bd-info align-items-center">
                                                                        <h3>020</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Blood Group AB
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="justify-content-between align-items-center bd-widgets d-flex">
                                                                    <div class="bd-icon">
                                                                        <i class="fas fa-a"></i>
                                                                    </div>
                                                                    <div class="bd-info align-items-center">
                                                                        <h3>020</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                                Blood Group O
                                                            </button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="justify-content-between align-items-center bd-widgets d-flex">
                                                                    <div class="bd-icon">
                                                                        <i class="fas fa-o"></i>
                                                                    </div>
                                                                    <div class="bd-info align-items-center">
                                                                        <h3>020</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="./js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>