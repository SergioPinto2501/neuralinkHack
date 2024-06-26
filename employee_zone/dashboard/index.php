<?php 
    session_start();
    $first_name = $_SESSION['logged_user']['first_name'];
    $last_name = $_SESSION['logged_user']['last_name'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Dashboard Neuralink</title>
<link rel="icon" href="img/favicon.png" type="image/png">

<link rel="stylesheet" href="css/bootstrap1.min.css" />

<link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="vendors/swiper_slider/css/swiper.min.css" />

<link rel="stylesheet" href="vendors/select2/css/select2.min.css" />

<link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="vendors/morris/morris.css">

<link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="css/metisMenu.css">

<link rel="stylesheet" href="css/style1.css" />
<link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<nav class="sidebar">
<div class="logo d-flex justify-content-between">
<a href="index.php"><img src="img/logoN.png" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li class="side_menu_title">
<span>Dashboard</span>
</li>
<li class="mm-active">
<a class="has-arrow" href="index.php" aria-expanded="false">

<img src="img/menu-icon/1.svg" alt>
<a href="index.php"><span>Dashboard</span></a>
</a>
<ul>
<li><a class="active" href="index.php">Dashboard</a></li>
</ul>
</li>
<li class="side_menu_title">
<span>Projects and Research</span>
</li>
<li class>
<a class="has-arrow" href="index.php" aria-expanded="false">
<img src="img/menu-icon/2.svg" alt>
<span>Project</span>
</a>
<ul>
<li><a href="index.php">Recent Project</a></li>
<li><a href="index.php">New Project</a></li>
<li><a href="index.php">Status Project</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="index.php" aria-expanded="false">
<img src="img/menu-icon/3.svg" alt>
<span>Device</span>
</a>
<ul>
<li><a href="index.php">Telepathy</a></li>
</ul>
</li>
<li class="side_menu_title">
<span>Activity</span>
</li>
<li class>
<a class="has-arrow" href="index.php" aria-expanded="false">
<img src="img/menu-icon/4.svg" alt>
<span>Communication</span>
</a>
<ul>
<li><a href="index.php">Chat</a>
<ul>
<li><a href="index.php">Discussion Groups</a></li>
</ul>
</li>
</li>
</ul>
</li>
</nav>


<section class="main_content dashboard_part">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<div class="serach_field-area">
<div class="search_inner">
<form action="index.html#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
</form>
</div>
</div>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<a href="index.php"> <img src="img/icon/bell.svg" alt> </a>
</li>
<li>
<a href="index.php"> <img src="img/icon/msg.svg" alt> </a>
</li>
</div>
<div class="profile_info">
<img src="img/staf/user.png" alt="#">
<div class="profile_info_iner">
<p>Employee</p>
<h5>
    <?php echo $first_name . " " . $last_name; ?>
</h5>
<div class="profile_info_details">
<a href="index.php">My Profile <i class="ti-user"></i></a>
<a href="index.php">Settings <i class="ti-settings"></i></a>
<a href="../../config/controller/logout.php">Log Out <i class="ti-shift-left"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="single_element">
<div class="quick_activity">
<div class="row">
<div class="col-12">
<div class="quick_activity_wrap">
<div class="single_quick_activity d-flex">
<div class="icon">
<img src="img/icon/man.svg" alt>
</div>
<div class="count_content">
<h3><span class="counter">520</span> </h3>
<p>Doctors</p>
</div>
</div>
<div class="single_quick_activity d-flex">
<div class="icon">
<img src="img/icon/cap.svg" alt>
</div>
<div class="count_content">
<h3><span class="counter">6969</span> </h3>
<p>Nurses</p>
</div>
</div>
<div class="single_quick_activity d-flex">
<div class="icon">
<img src="img/icon/wheel.svg" alt>
</div>
<div class="count_content">
<h3><span class="counter">7510</span> </h3>
<p>Patients</p>
</div>
</div>
<div class="single_quick_activity d-flex">
<div class="icon">
<img src="img/icon/pharma.svg" alt>
</div>
<div class="count_content">
<h3><span class="counter">2110</span> </h3>
<p>Pharmacusts</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-xl-12">
<div class="white_box mb_30 ">
<div class="box_header border_bottom_1px  ">
<div class="main-title">
<h3 class="mb_25">Hospital Survey</h3>
</div>
</div>
<div class="income_servay">
<div class="row">
<div class="col-md-3">
<div class="count_content">
<h3>$ <span class="counter">305</span> </h3>
<p>Today's Income</p>
</div>
</div>
<div class="col-md-3">
<div class="count_content">
<h3>$ <span class="counter">1005</span> </h3>
<p>This Week's Income</p>
</div>
</div>
<div class="col-md-3">
<div class="count_content">
<h3>$ <span class="counter">5505</span> </h3>
<p>This Month's Income</p>
</div>
</div>
<div class="col-md-3">
<div class="count_content">
<h3>$ <span class="counter">155615</span> </h3>
<p>This Year's Income</p>
</div>
</div>
</div>
</div>
<div id="bar_wev"></div>
</div>
</div>
<div class="col-xl-7">
<div class="white_box QA_section card_height_100">
<div class="white_box_tittle list_header m-0 align-items-center">
<div class="main-title mb-sm-15">
<h3 class="m-0 nowrap">Patients</h3>
</div>
<div class="box_right d-flex lms_block">
<div class="serach_field-area2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
</div>
</div>
<div class="QA_table ">

<table class="table lms_table_active2">
<thead>
<tr>
<th scope="col">Patients Name</th>
<th scope="col">department</th>
<th scope="col">Appointment Date</th>
<th scope="col">Serial Number</th>
<th scope="col">Amount</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/pataint.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/2.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/3.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/4.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/5.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/6.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
<tr>
<th scope="row">
<div class="patient_thumb d-flex align-items-center">
<div class="student_list_img mr_20">
<img src="img/patient/6.png" alt https://demo.dashboardpack.com/hospital-html/srcset>
</div>
<p>Jhon Kural</p>
</div>
</th>
<td>Monte Carlo</td>
<td>11/03/2020</td>
<td>MDC65454</td>
<td>
<div class="amoutn_action d-flex align-items-center">
$29,192
<div class="dropdown ms-4">
<a class=" dropdown-toggle hide_pils" href="index.php" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-ellipsis-v"></i>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="index.php">View</a>
<a class="dropdown-item" href="index.php">Edit</a>
<a class="dropdown-item" href="index.php">Delete</a>
</div>
</div>
</div> </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-xl-5 ">
<div class="white_box card_height_50 mb_30">
<div class="box_header border_bottom_1px  ">
<div class="main-title">
<h3 class="mb_25">Total Recover Report</h3>
</div>
</div>
<div id="chart-7"></div>
<div class="row text-center mt-3">
<div class="col-sm-6">
<h6 class="heading_6 d-block">Last Month</h6>
<p class="m-0">358</p>
</div>
<div class="col-sm-6">
<h6 class="heading_6 d-block">Current Month</h6>
<p class="m-0">194</p>
</div>
</div>
</div>
<div class="white_box card_height_50 mb_30">
<div class="box_header border_bottom_1px  ">
<div class="main-title">
<h3 class="mb_25">Total Death Report</h3>
</div>
</div>
<div id="chart-8"></div>
<div class="row text-center mt-3">
<div class="col-sm-6">
<h6 class="heading_6 d-block">Last Month</h6>
<p class="m-0">358</p>
</div>
<div class="col-sm-6">
<h6 class="heading_6 d-block">Current Month</h6>
<p class="m-0">194</p>
</div>
</div>
</div>
</div>
<div class="col-xl-12">
<div class="white_box card_height_100">
<div class="box_header border_bottom_1px  ">
<div class="main-title">
<h3 class="mb_25">Hospital Staff</h3>
</div>
</div>
<div class="staf_list_wrapper sraf_active owl-carousel">

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/1.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/2.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/3.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/4.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/5.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/1.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/2.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>

<div class="single_staf">
<div class="staf_thumb">
<img src="img/staf/3.png" alt>
</div>
<h4>Dr. Sysla J Smith</h4>
<p>Doctor</p>
</div>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="white_box card_height_100">
<div class="box_header border_bottom_1px  ">
<div class="main-title">
<h3 class="mb_25">Recent Activity</h3>
</div>
</div>
<div class="Activity_timeline">
<ul>
<li>
<div class="activity_bell"></div>
<div class="activity_wrap">
<h6>5 min ago</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
</p>
</div>
</li>
<li>
<div class="activity_bell"></div>
<div class="activity_wrap">
<h6>5 min ago</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
</p>
</div>
</li>
<li>
<div class="activity_bell"></div>
<div class="activity_wrap">
<h6>5 min ago</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
</p>
</div>
</li>
<li>
<div class="activity_bell"></div>
<div class="activity_wrap">
<h6>5 min ago</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque
</p>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="col-xl-6">
<div class="white_box mb_30">
<div class="box_header border_bottom_1px  ">
<div class="main-title">
<h3 class="mb_25">Recent Activity</h3>
</div>
</div>
<div class="activity_progressbar">
<div class="single_progressbar">
<h6>USA</h6>
<div id="bar1" class="barfiller">
<div class="tipWrap">
<span class="tip"></span>
</div>
<span class="fill" data-percentage="95"></span>
</div>
</div>
<div class="single_progressbar">
<h6>AFRICA</h6>
<div id="bar2" class="barfiller">
<div class="tipWrap">
<span class="tip"></span>
</div>
<span class="fill" data-percentage="75"></span>
</div>
</div>
<div class="single_progressbar">
<h6>UK</h6>
<div id="bar3" class="barfiller">
<div class="tipWrap">
<span class="tip"></span>
</div>
<span class="fill" data-percentage="55"></span>
</div>
</div>
<div class="single_progressbar">
<h6>CANADA</h6>
<div id="bar4" class="barfiller">
<div class="tipWrap">
<span class="tip"></span>
</div>
<span class="fill" data-percentage="25"></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="footer_part">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer_iner text-center">
<p>2024 © Fake Dashboard - Designed by Pinto Sergio</p>
</div>
</div>
</div>
</div>
</div>
</section>

<script src="js/jquery1-3.4.1.min.js"></script>

<script src="js/popper1.min.js"></script>

<script src="js/bootstrap1.min.js"></script>

<script src="js/metisMenu.js"></script>

<script src="vendors/count_up/jquery.waypoints.min.js"></script>

<script src="vendors/chartlist/Chart.min.js"></script>

<script src="vendors/count_up/jquery.counterup.min.js"></script>

<script src="vendors/swiper_slider/js/swiper.min.js"></script>

<script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="vendors/gijgo/gijgo.min.js"></script>

<script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatable/js/buttons.flash.min.js"></script>
<script src="vendors/datatable/js/jszip.min.js"></script>
<script src="vendors/datatable/js/pdfmake.min.js"></script>
<script src="vendors/datatable/js/vfs_fonts.js"></script>
<script src="vendors/datatable/js/buttons.html5.min.js"></script>
<script src="vendors/datatable/js/buttons.print.min.js"></script>
<script src="js/chart.min.js"></script>

<script src="vendors/progressbar/jquery.barfiller.js"></script>

<script src="vendors/tagsinput/tagsinput.js"></script>

<script src="vendors/text_editor/summernote-bs4.js"></script>
<script src="vendors/apex_chart/apexcharts.js"></script>

<script src="js/custom.js"></script>
<script src="vendors/apex_chart/bar_active_1.js"></script>
<script src="vendors/apex_chart/apex_chart_list.js"></script>

</body>
</html>
