<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Information</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/Grow_Digi_Favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                  <a href="index.php" class="text-nowrap logo-img">
                    <img src="assets/images/logos/Grow_Digi_Logo_Width_Wise.png" width="180" alt="" />
                  </a>
                  <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                  </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                  <ul id="sidebarnav">
                    <li class="nav-small-cap">
                      <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                      <span class="hide-menu">Home</span>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link" href="index.php" aria-expanded="false">
                        <span>
                          <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link" href="contact-information.php" aria-expanded="false">
                        <span>
                          <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Contact Information</span>
                      </a>
                    </li>
                  
                </nav>
                <!-- End Sidebar navigation -->
              </div>
              <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start  -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                      <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                        <i class="ti ti-menu-2"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                        <i class="ti ti-bell-ringing"></i>
                        <div class="notification bg-primary rounded-circle"></div>
                      </a>
                    </li>
                  </ul>
                  <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                      <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                          <div class="message-body">
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                              <i class="ti ti-user fs-6"></i>
                              <p class="mb-0 fs-3">My Profile</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                              <i class="ti ti-mail fs-6"></i>
                              <p class="mb-0 fs-3">My Account</p>
                            </a>
                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                              <i class="ti ti-list-check fs-6"></i>
                              <p class="mb-0 fs-3">My Task</p>
                            </a>
                            <a href="authentication-login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </nav>
            </header>
            <!-- Header End  -->

            <!-- <div class="container-fluid">
                <div class="col-lg-12 d-flex ">
                    <div class="card w-50">
                      <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Total Number of Enquiries :
                          <?php
                          $con = mysqli_connect('localhost', 'root', '', 'growdigi');
                          $Record = mysqli_query($con, "SELECT * FROM `contactus`");
                          $row_count = mysqli_num_rows($Record);
                          echo "     $row_count";
                          ?>
                        </h5>
                        </div>
                    </div>
                  </div>
            </div>

 -->


            <div class="container-fluid">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="card w-100">
                      <div class="card-body p-4">
                        <h5 class="card-title fw-semibold mb-4">Contact Information</h5>
                        <div class="table-responsive">
                          <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                              <tr>
                                <th class="border-bottom-0">
                                  <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                  <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                  <h6 class="fw-semibold mb-0">Email</h6>
                                </th>
                                <th class="border-bottom-0">
                                  <h6 class="fw-semibold mb-0">Services</h6>
                                </th>
                                <th class="border-bottom-0">
                                  <h6 class="fw-semibold mb-0">Message</h6>
                                </th>
                                <th class="border-bottom-0">
                                  <h6 class="fw-semibold mb-0">Submission Time</h6>
                                </th>
                                
                              </tr>
                            </thead>
                            <tbody>

                            <?php

                              $con = mysqli_connect('localhost', 'root', '', 'growdigi');
                              $Record = mysqli_query($con, "SELECT * FROM `contactus`");
                              $row_count = mysqli_num_rows($Record);
                              $n = 0;
                              while ($row = mysqli_fetch_array($Record)){
                              echo " 

                              <tr>
                                <td class="?> <?php echo "border-bottom-0";?><?php echo "><h6 class=";?> <?php echo "fw-semibold mb-0";?><?php echo ">"; echo ++$n;?> <?php echo "</h6>
                                </td>"?>
                              
                              <?php echo "
                                <td class="?><?php echo "border-bottom-0";?><?php echo ">
                                    <h6 class=";?><?php echo"fw-semibold mb-1";?><?php echo"> $row[Name] </h6>                       
                                </td>";?>

                              <?php echo "
                                <td class="?><?php echo "border-bottom-0";?><?php echo ">
                                    <h6 class=";?><?php echo"fw-semibold mb-1";?><?php echo"> $row[Email] </h6>                       
                                </td>";?>

                              <?php echo "
                                <td class="?><?php echo "border-bottom-0";?><?php echo ">
                                    <h6 class=";?><?php echo"fw-semibold mb-1";?><?php echo"> $row[Service] </h6>                       
                                </td>";?>

                              <?php echo"
                                <td class=";?><?php echo "border-bottom-0";?><?php echo ">
                                  <div class="?><?php echo "d-flex align-items-center gap-2";?><?php echo">
                                    <span class=";?><?php echo "fw-semibold";?><?php echo "> $row[Message] </span>
                                  </div>
                                </td>";?>

                              <?php echo "
                                <td class="?><?php echo "border-bottom-0";?><?php echo ">
                                    <h6 class=";?><?php echo"fw-semibold mb-1";?><?php echo"> $row[SubmissionTime] </h6>                       
                                </td>";
                                
                              } ?>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>





        </div>
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="assets/js/dashboard.js"></script>
</body>

</html>