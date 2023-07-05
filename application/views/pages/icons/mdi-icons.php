<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">

<!-- Mirrored from www.nobleui.com/html/template/demo1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 11:55:23 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="<?php echo base_url ('https://fonts.googleapis.com/'); ?>">
  <link rel="preconnect" href="<?php echo base_url ('https://fonts.gstatic.com/" crossorigin'); ?>">
  <link href="<?php echo base_url ('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap'); ?>" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo base_url ('assets/vendors/core/core.css'); ?>">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo base_url ('assets/fonts/feather-font/css/iconfont.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url ('assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="<?php echo base_url ('assets/css/demo1/style.min.css'); ?>">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="<?php echo base_url ('assets/images/favicon.png'); ?>" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="<?php echo base_url () ; ?>" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="<?php echo base_url (); ?>" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item nav-category">Latihan</li>
          <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#latihan" role="button" aria-expanded="false" aria-controls="latihan">
           <i class="link-icon" data-feather="file-text"></i>
           <span class="link-title">Latihan</span>
           <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="latihan">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url (); ?>" class="nav-link">Latihan 1</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url (); ?>" class="nav-link">Latihan 2</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url (); ?>" class="nav-link">Latihan 3</a>
                </li>
              </ul>
            </div>

          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('email/inbox'); ?>" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('email/read'); ?>" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('email/compose'); ?>" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url ('apps/chat'); ?>" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url ('apps/calendar'); ?>" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item nav-category">Components</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">UI Kit</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/accordion'); ?>" class="nav-link">Accordion</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/alerts'); ?>" class="nav-link">Alerts</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/badges'); ?>" class="nav-link">Badges</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/breadcrumbs'); ?>" class="nav-link">Breadcrumbs</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/buttons'); ?>" class="nav-link">Buttons</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/buttongroup'); ?>" class="nav-link">Button group</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/cards'); ?>" class="nav-link">Cards</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/carousel'); ?>" class="nav-link">Carousel</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url ('uicomponents/collapse'); ?>" class="nav-link">Collapse</a>
                  </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/dropdowns'); ?>" class="nav-link">Dropdowns</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/listgroup'); ?>" class="nav-link">List group</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/mediaobject'); ?>" class="nav-link">Media object</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/modal'); ?>" class="nav-link">Modal</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/navs'); ?>" class="nav-link">Navs</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/navbar'); ?>" class="nav-link">Navbar</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/pagination'); ?>" class="nav-link">Pagination</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/popover'); ?>" class="nav-link">Popovers</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/progress'); ?>" class="nav-link">Progress</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/scrollbar'); ?>" class="nav-link">Scrollbar</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/scrollspy'); ?>" class="nav-link">Scrollspy</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/spinners'); ?>" class="nav-link">Spinners</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/tabs'); ?>" class="nav-link">Tabs</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('uicomponents/tooltips'); ?>" class="nav-link">Tooltips</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
              <i class="link-icon" data-feather="anchor"></i>
              <span class="link-title">Advanced UI</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="advancedUI">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('advancedui/cropper'); ?>" class="nav-link">Cropper</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('advancedui/owlcarousel'); ?>" class="nav-link">Owl carousel</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('advancedui/sortablejs'); ?>" class="nav-link">SortableJs</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('advancedui/sweetalert'); ?>" class="nav-link">Sweet Alert</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Forms</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="forms">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('forms/basicelements');?>" class="nav-link">Basic Elements</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('forms/advancedelements');?>" class="nav-link">Advanced Elements</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('forms/editors');?>" class="nav-link">Editors</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('forms/wizard');?>" class="nav-link">Wizard</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link"  data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
              <i class="link-icon" data-feather="pie-chart"></i>
              <span class="link-title">Charts</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('charts/apex');?>" class="nav-link">Apex</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('charts/chartjs');?>" class="nav-link">ChartJs</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('charts/flot');?>" class="nav-link">Flot</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('charts/peity');?>" class="nav-link">Peity</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('charts/sparkline');?>" class="nav-link">Sparkline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Table</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('tables/basictable');?>" class="nav-link">Basic Tables</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('tables/datatable');?>" class="nav-link">Data Table</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" role="button" aria-expanded="false" aria-controls="icons">
              <i class="link-icon" data-feather="smile"></i>
              <span class="link-title">Icons</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('icons/feathericons');?>" class="nav-link">Feather Icons</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('icons/flagicons');?>" class="nav-link">Flag Icons</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('icons/mdiicons');?>" class="nav-link">Mdi Icons</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button" aria-expanded="false" aria-controls="general-pages">
              <i class="link-icon" data-feather="book"></i>
              <span class="link-title">Special pages</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('general/blankpage'); ?>" class="nav-link">Blank page</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('general/faq'); ?>" class="nav-link">Faq</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('general/invoice'); ?>" class="nav-link">Invoice</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('general/profile'); ?>" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('general/pricing'); ?>" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('general/timeline'); ?>" class="nav-link">Timeline</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
              <i class="link-icon" data-feather="unlock"></i>
              <span class="link-title">Authentication</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="authPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('auth/login'); ?>" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('auth/register'); ?>" class="nav-link">Register</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
              <i class="link-icon" data-feather="cloud-off"></i>
              <span class="link-title">Error</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="errorPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="<?php echo base_url ('error404'); ?>" class="nav-link">404</a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url ('error500'); ?>" class="nav-link">500</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Docs</li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="hash"></i>
              <span class="link-title">Documentation</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
            <label class="form-check-label" for="sidebarLight">
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
            <label class="form-check-label" for="sidebarDark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="dashboard.html">
            <img src="<?php echo base_url ('assets/images/screenshots/light.jpg'); ?>" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="https://www.nobleui.com/html/template/demo2/dashboard.html">
            <img src="<?php echo base_url ('assets/images/screenshots/dark.jpg'); ?>" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
							</div>
            </li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p class="mb-0 fw-bold">Web Apps</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
                <div class="row g-0 p-1">
                  <div class="col-3 text-center">
                    <a href="apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="<?php echo base_url ('apps/calendar.html'); ?>" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
                  </div>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face2.jpg'); ?>" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Leonardo Payne</p>
                        <p class="tx-12 text-muted">Project status</p>
                      </div>
                      <p class="tx-12 text-muted">2 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face3.jpg'); ?>" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Carl Henson</p>
                        <p class="tx-12 text-muted">Client meeting</p>
                      </div>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face4.jpg'); ?>" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Jensen Combs</p>
                        <p class="tx-12 text-muted">Project updates</p>
                      </div>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face5.jpg'); ?>" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Amiah Burton</p>
                        <p class="tx-12 text-muted">Project deatline</p>
                      </div>
                      <p class="tx-12 text-muted">2 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face6.jpg'); ?>" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Yaretzi Mayo</p>
                        <p class="tx-12 text-muted">New record</p>
                      </div>
                      <p class="tx-12 text-muted">5 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New Order Recieved</p>
											<p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Server Limit Reached!</p>
											<p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face6.jpg'); ?>" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New customer registered</p>
											<p class="tx-12 text-muted">2 sec ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Apps are ready for update</p>
											<p class="tx-12 text-muted">5 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Download completed</p>
											<p class="tx-12 text-muted">6 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url ('assets/images/faces/face1.jpg'); ?>" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="<?php echo base_url ('assets/images/faces/face1.jpg'); ?>" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder">Amiah Burton</p>
										<p class="tx-12 text-muted">amiahburton@gmail.com</p>
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="<?php echo base_url ('general/profile'); ?>" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>Switch User</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Icons</a></li>
						<li class="breadcrumb-item active" aria-current="page">Mdi Icons</li>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Mdi Icons</h6>
                                <p class="text-muted mb-3">Visit the <a href="https://materialdesignicons.com/" target="_blank"> Official Material Design Icons Documentation </a>.</p>                
                                <p class="text-muted mb-3">Usage example : &lt;i class="mdi mdi-star"&gt;&lt;/i&gt;</p>
                                <div class="container">
                                    <div class="row icons-list">
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-access-point"></i> mdi mdi-access-point
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-access-point-network"></i> mdi mdi-access-point-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account"></i> mdi mdi-account
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-box"></i> mdi mdi-account-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-box-outline"></i> mdi mdi-account-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-details"></i> mdi mdi-account-details
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-check"></i> mdi mdi-account-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-circle"></i> mdi mdi-account-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-convert"></i> mdi mdi-account-convert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-key"></i> mdi mdi-account-key
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-minus"></i> mdi mdi-account-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-multiple"></i> mdi mdi-account-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-multiple-minus"></i> mdi mdi-account-multiple-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-multiple-outline"></i> mdi mdi-account-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-multiple-plus"></i> mdi mdi-account-multiple-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-network"></i> mdi mdi-account-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-off"></i> mdi mdi-account-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-outline"></i> mdi mdi-account-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-plus"></i> mdi mdi-account-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-remove"></i> mdi mdi-account-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-search"></i> mdi mdi-account-search
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-settings"></i> mdi mdi-account-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-star"></i> mdi mdi-account-star
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-account-switch"></i> mdi mdi-account-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-adjust"></i> mdi mdi-adjust
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-air-conditioner"></i> mdi mdi-air-conditioner
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-airballoon"></i> mdi mdi-airballoon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-airplane"></i> mdi mdi-airplane
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-airplane-landing"></i> mdi mdi-airplane-landing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-airplane-off"></i> mdi mdi-airplane-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-airplane-takeoff"></i> mdi mdi-airplane-takeoff
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alarm"></i> mdi mdi-alarm
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alarm-check"></i> mdi mdi-alarm-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alarm-multiple"></i> mdi mdi-alarm-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alarm-off"></i> mdi mdi-alarm-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alarm-plus"></i> mdi mdi-alarm-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-album"></i> mdi mdi-albums
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alert"></i> mdi mdi-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alert-box"></i> mdi mdi-alert-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alert-circle"></i> mdi mdi-alert-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alert-circle-outline"></i> mdi mdi-alert-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alert-octagon"></i> mdi mdi-alert-octagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alert-outline"></i> mdi mdi-alert-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alpha"></i> mdi mdi-alpha
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-alphabetical"></i> mdi mdi-alphabetical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-altimeter"></i> mdi mdi-altimeter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ambulance"></i> mdi mdi-ambulance
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-amplifier"></i> mdi mdi-amplifier
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-anchor"></i> mdi mdi-anchor
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-android"></i> mdi mdi-android
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-android-studio"></i> mdi mdi-android-studio
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-animation"></i> mdi mdi-animation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple"></i> mdi mdi-apple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-finder"></i> mdi mdi-apple-finder
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-ios"></i> mdi mdi-apple-ios
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-keyboard-caps"></i> mdi mdi-apple-keyboard-caps
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-keyboard-command"></i> mdi mdi-apple-keyboard-command
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-keyboard-control"></i> mdi mdi-apple-keyboard-control
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-keyboard-option"></i> mdi mdi-apple-keyboard-option
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-keyboard-shift"></i> mdi mdi-apple-keyboard-shift
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apple-safari"></i> mdi mdi-apple-safari
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-application"></i> mdi mdi-application
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-apps"></i> mdi mdi-apps
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-archive"></i> mdi mdi-archive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrange-bring-forward"></i> mdi mdi-arrange-bring-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrange-bring-to-front"></i> mdi mdi-arrange-bring-to-front
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrange-send-backward"></i> mdi mdi-arrange-send-backward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrange-send-to-back"></i> mdi mdi-arrange-send-to-back
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-all"></i> mdi mdi-arrow-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-bottom-left"></i> mdi mdi-arrow-bottom-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-bottom-right"></i> mdi mdi-arrow-bottom-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down"></i> mdi mdi-arrow-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down"></i> mdi mdi-arrow-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down-bold-circle"></i> mdi mdi-arrow-down-bold-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down-bold-circle-outline"></i> mdi mdi-arrow-down-bold-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down-bold-hexagon-outline"></i> mdi mdi-arrow-down-bold-hexagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down-drop-circle"></i> mdi mdi-arrow-down-drop-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-down-drop-circle-outline"></i> mdi mdi-arrow-down-drop-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-expand"></i> mdi mdi-arrow-expand
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-expand-all"></i> mdi mdi-arrow-expand-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left"></i> mdi mdi-arrow-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left-bold"></i> mdi mdi-arrow-left-bold
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left-bold-circle"></i> mdi mdi-arrow-left-bold-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left-bold-circle-outline"></i> mdi mdi-arrow-left-bold-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left-bold-hexagon-outline"></i> mdi mdi-arrow-left-bold-hexagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left-drop-circle"></i> mdi mdi-arrow-left-drop-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-left-drop-circle-outline"></i> mdi mdi-arrow-left-drop-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right"></i> mdi mdi-arrow-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right-bold"></i> mdi mdi-arrow-right-bold
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right-bold-circle"></i> mdi mdi-arrow-right-bold-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right-bold-circle-outline"></i> mdi mdi-arrow-right-bold-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right-bold-hexagon-outline"></i> mdi mdi-arrow-right-bold-hexagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right-drop-circle"></i> mdi mdi-arrow-right-drop-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-right-drop-circle-outline"></i> mdi mdi-arrow-right-drop-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-top-left"></i> mdi mdi-arrow-top-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-top-right"></i> mdi mdi-arrow-top-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up"></i> mdi mdi-arrow-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up-bold"></i> mdi mdi-arrow-up-bold
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up-bold-circle"></i> mdi mdi-arrow-up-bold-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up-bold-circle-outline"></i> mdi mdi-arrow-up-bold-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up-bold-hexagon-outline"></i> mdi mdi-arrow-up-bold-hexagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up-drop-circle"></i> mdi mdi-arrow-up-drop-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-arrow-up-drop-circle-outline"></i> mdi mdi-arrow-up-drop-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-assistant"></i> mdi mdi-assistant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-at"></i> mdi mdi-at
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-attachment"></i> mdi mdi-attachment
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-auto-fix"></i> mdi mdi-auto-fix
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-auto-upload"></i> mdi mdi-auto-upload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-autorenew"></i> mdi mdi-autorenew
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-av-timer"></i> mdi mdi-av-timer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-baby"></i> mdi mdi-baby
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-backburger"></i> mdi mdi-backburger
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-backspace"></i> mdi mdi-backspace
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-backup-restore"></i> mdi mdi-backup-restore
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bank"></i> mdi mdi-bank
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-barcode"></i> mdi mdi-barcode
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-barcode-scan"></i> mdi mdi-barcode-scan
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-barley"></i> mdi mdi-barley
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-barrel"></i> mdi mdi-barrel
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-basket"></i> mdi mdi-basket
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-basket-fill"></i> mdi mdi-basket-fill
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-basket-unfill"></i> mdi mdi-basket-unfill
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery"></i> mdi mdi-battery
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-10"></i> mdi mdi-battery-10
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-20"></i> mdi mdi-battery-20
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-30"></i> mdi mdi-battery-30
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-40"></i> mdi mdi-battery-40
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-50"></i> mdi mdi-battery-50
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-60"></i> mdi mdi-battery-60
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-70"></i> mdi mdi-battery-70
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-80"></i> mdi mdi-battery-80
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-90"></i> mdi mdi-battery-90
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-alert"></i> mdi mdi-battery-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging"></i> mdi mdi-battery-charging
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-100"></i> mdi mdi-battery-charging-100
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-20"></i> mdi mdi-battery-charging-20
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-30"></i> mdi mdi-battery-charging-30
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-40"></i> mdi mdi-battery-charging-40
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-60"></i> mdi mdi-battery-charging-60
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-80"></i> mdi mdi-battery-charging-80
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-charging-90"></i> mdi mdi-battery-charging-90
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-minus"></i> mdi mdi-battery-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-negative"></i> mdi mdi-battery-negative
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-outline"></i> mdi mdi-battery-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-plus"></i> mdi mdi-battery-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-positive"></i> mdi mdi-battery-positive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-battery-unknown"></i> mdi mdi-battery-unknown
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-beach"></i> mdi mdi-beach
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bed"></i> mdi mdi-bed
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-beer"></i> mdi mdi-beer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-beer-outline"></i> mdi mdi-beer-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell"></i> mdi mdi-bell
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell-off"></i> mdi mdi-bell-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell-outline"></i> mdi mdi-bell-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell-plus"></i> mdi mdi-bell-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell-ring"></i> mdi mdi-bell-ring
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell-ring-outline"></i> mdi mdi-bell-ring-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bell-sleep"></i> mdi mdi-bell-sleep
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-beta"></i> mdi mdi-beta
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-biathlon"></i> mdi mdi-biathlon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bike"></i> mdi mdi-bike
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-billboard"></i> mdi mdi-billboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-binoculars"></i> mdi mdi-binoculars
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bio"></i> mdi mdi-bio
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-biohazard"></i> mdi mdi-biohazard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bitbucket"></i> mdi mdi-bitbucket
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-black-mesa"></i> mdi mdi-black-mesa
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bitcoin"></i> mdi mdi-bitcoin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blender"></i> mdi mdi-blender
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blinds"></i> mdi mdi-blinds
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-block-helper"></i> mdi mdi-block-helper
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blogger"></i> mdi mdi-blogger
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bluetooth"></i> mdi mdi-bluetooth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bluetooth-audio"></i> mdi mdi-bluetooth-audio
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bluetooth-connect"></i> mdi mdi-bluetooth-connect
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bluetooth-off"></i> mdi mdi-bluetooth-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bluetooth-settings"></i> mdi mdi-bluetooth-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bluetooth-transfer"></i> mdi mdi-bluetooth-transfer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blur"></i> mdi mdi-blur
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blur-linear"></i> mdi mdi-blur-linear
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blur-off"></i> mdi mdi-blur-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-blur-radial"></i> mdi mdi-blur-radial
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bone"></i> mdi mdi-bone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book"></i> mdi mdi-book
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-minus"></i> mdi mdi-book-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-multiple"></i> mdi mdi-book-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-multiple-variant"></i> mdi mdi-book-multiple-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-open"></i> mdi mdi-book-open
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-open-page-variant"></i> mdi mdi-book-open-page-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-open-variant"></i> mdi mdi-book-open-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-plus"></i> mdi mdi-book-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-book-variant"></i> mdi mdi-book-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark"></i> mdi mdi-bookmark
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark-check"></i> mdi mdi-bookmark-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark-music"></i> mdi mdi-bookmark-music
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark-outline"></i> mdi mdi-bookmark-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark-plus"></i> mdi mdi-bookmark-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark-plus-outline"></i> mdi mdi-bookmark-plus-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bookmark-remove"></i> mdi mdi-bookmark-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-boombox"></i> mdi mdi-boombox
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-all"></i> mdi mdi-border-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-bottom"></i> mdi mdi-border-bottom
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-color"></i> mdi mdi-border-color
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-horizontal"></i> mdi mdi-border-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-inside"></i> mdi mdi-border-inside
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-left"></i> mdi mdi-border-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-none"></i> mdi mdi-border-none
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-outside"></i> mdi mdi-border-outside
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-right"></i> mdi mdi-border-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-style"></i> mdi mdi-border-style
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-top"></i> mdi mdi-border-top
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-border-vertical"></i> mdi mdi-border-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bowl"></i> mdi mdi-bowl
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bowling"></i> mdi mdi-bowling
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-box"></i> mdi mdi-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-box-cutter"></i> mdi mdi-box-cutter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-box-shadow"></i> mdi mdi-box-shadow
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bridge"></i> mdi mdi-bridge
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-briefcase"></i> mdi mdi-briefcase
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-briefcase-check"></i> mdi mdi-briefcase-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-briefcase-download"></i> mdi mdi-briefcase-download
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-briefcase-upload"></i> mdi mdi-briefcase-upload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-1"></i> mdi mdi-brightness-1
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-2"></i> mdi mdi-brightness-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-3"></i> mdi mdi-brightness-3
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-4"></i> mdi mdi-brightness-4
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-5"></i> mdi mdi-brightness-5
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-6"></i> mdi mdi-brightness-6
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-7"></i> mdi mdi-brightness-7
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brightness-auto"></i> mdi mdi-brightness-auto
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-broom"></i> mdi mdi-broom
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-brush"></i> mdi mdi-brush
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bug"></i> mdi mdi-bug
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bulletin-board"></i> mdi mdi-bulletin-board
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bullhorn"></i> mdi mdi-bullhorn
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bullseye"></i> mdi mdi-bullseye
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-bus"></i> mdi mdi-bus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cached"></i> mdi mdi-cached
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cake"></i> mdi mdi-cake
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cake-layered"></i> mdi mdi-cake-layered
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cake-variant"></i> mdi mdi-cake-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calculator"></i> mdi mdi-calculator
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar"></i> mdi mdi-calendar
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-blank"></i> mdi mdi-calendar-blank
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-check"></i> mdi mdi-calendar-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-clock"></i> mdi mdi-calendar-clock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-multiple"></i> mdi mdi-calendar-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-multiple-check"></i> mdi mdi-calendar-multiple-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-plus"></i> mdi mdi-calendar-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-remove"></i> mdi mdi-calendar-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-text"></i> mdi mdi-calendar-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-calendar-today"></i> mdi mdi-calendar-today
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-call-made"></i> mdi mdi-call-made
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-call-merge"></i> mdi mdi-call-merge
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-call-missed"></i> mdi mdi-call-missed
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-call-received"></i> mdi mdi-call-received
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-call-split"></i> mdi mdi-call-split
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camcorder"></i> mdi mdi-camcorder
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camcorder-off"></i> mdi mdi-camcorder-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera"></i> mdi mdi-camera
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-enhance"></i> mdi mdi-camera-enhance
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-front"></i> mdi mdi-camera-front
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-front-variant"></i> mdi mdi-camera-front-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-iris"></i> mdi mdi-camera-iris
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-off"></i> mdi mdi-camera-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-party-mode"></i> mdi mdi-camera-party-mode
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-rear"></i> mdi mdi-camera-rear
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-rear-variant"></i> mdi mdi-camera-rear-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-switch"></i> mdi mdi-camera-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-camera-timer"></i> mdi mdi-camera-timer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-candle"></i> mdi mdi-candle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-candycane"></i> mdi mdi-candycane
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-car"></i> mdi mdi-car
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-car-battery"></i> mdi mdi-car-battery
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-car-connected"></i> mdi mdi-car-connected
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-car-wash"></i> mdi mdi-car-wash
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cards"></i> mdi mdi-cards
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cards-outline"></i> mdi mdi-cards-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cards-playing-outline"></i> mdi mdi-cards-playing-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-carrot"></i> mdi mdi-carrot
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cart"></i> mdi mdi-cart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cart-off"></i> mdi mdi-cart-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cart-outline"></i> mdi mdi-cart-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cart-plus"></i> mdi mdi-cart-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-case-sensitive-alt"></i> mdi mdi-case-sensitive-alt
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cash"></i> mdi mdi-cash
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cash-100"></i> mdi mdi-cash-100
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cash-multiple"></i> mdi mdi-cash-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cast"></i> mdi mdi-cast
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cast-connected"></i> mdi mdi-cast-connected
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-castle"></i> mdi mdi-castle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cat"></i> mdi mdi-cat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cellphone"></i> mdi mdi-cellphone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cellphone-basic"></i> mdi mdi-cellphone-basic
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cellphone-dock"></i> mdi mdi-cellphone-dock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cellphone-link"></i> mdi mdi-cellphone-link
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cellphone-link-off"></i> mdi mdi-cellphone-link-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cellphone-settings"></i> mdi mdi-cellphone-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-certificate"></i> mdi mdi-certificate
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chair-school"></i> mdi mdi-chair-school
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-arc"></i> mdi mdi-chart-arc
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-areaspline"></i> mdi mdi-chart-areaspline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-bar"></i> mdi mdi-chart-bar
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-bubble"></i> mdi mdi-chart-bubble
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-gantt"></i> mdi mdi-chart-gantt
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-gantt"></i> mdi mdi-chart-gantt
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-histogram"></i> mdi mdi-chart-histogram
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-line"></i> mdi mdi-chart-line
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chart-pie"></i> mdi mdi-chart-pie
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-check"></i> mdi mdi-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-check-all"></i> mdi mdi-check-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-check-circle"></i> mdi mdi-check-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-check-circle-outline"></i> mdi mdi-check-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-blank"></i> mdi mdi-checkbox-blank
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-blank-circle"></i> mdi mdi-checkbox-blank-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-blank-circle-outline"></i> mdi mdi-checkbox-blank-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-blank-outline"></i> mdi mdi-checkbox-blank-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-marked"></i> mdi mdi-checkbox-marked
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-marked-circle"></i> mdi mdi-checkbox-marked-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-marked-circle-outline"></i> mdi mdi-checkbox-marked-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-marked-outline"></i> mdi mdi-checkbox-marked-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-blank"></i> mdi mdi-checkbox-multiple-blank
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-blank-circle"></i> mdi mdi-checkbox-multiple-blank-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-blank-circle-outline"></i> mdi mdi-checkbox-multiple-blank-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-blank-outline"></i> mdi mdi-checkbox-multiple-blank-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-marked"></i> mdi mdi-checkbox-multiple-marked
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-marked-circle"></i> mdi mdi-checkbox-multiple-marked-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-marked-circle-outline"></i> mdi mdi-checkbox-multiple-marked-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkbox-multiple-marked-outline"></i> mdi mdi-checkbox-multiple-marked-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-checkerboard"></i> mdi mdi-checkerboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chemical-weapon"></i> mdi mdi-chemical-weapon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chemical-weapon"></i> mdi mdi-chemical-weapon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-double-down"></i> mdi mdi-chevron-double-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-double-left"></i> mdi mdi-chevron-double-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-double-right"></i> mdi mdi-chevron-double-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-double-up"></i> mdi mdi-chevron-double-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-down"></i> mdi mdi-chevron-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-left"></i> mdi mdi-chevron-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-right"></i> mdi mdi-chevron-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chevron-up"></i> mdi mdi-chevron-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-chip"></i> mdi mdi-chip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-church"></i> mdi mdi-church
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cisco-webex"></i> mdi mdi-cisco-webex
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-city"></i> mdi mdi-city
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard"></i> mdi mdi-clipboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-account"></i> mdi mdi-clipboard-account
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-alert"></i> mdi mdi-clipboard-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-arrow-down"></i> mdi mdi-clipboard-arrow-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-arrow-left"></i> mdi mdi-clipboard-arrow-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-check"></i> mdi mdi-clipboard-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-outline"></i> mdi mdi-clipboard-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clipboard-text"></i> mdi mdi-clipboard-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clippy"></i> mdi mdi-clippy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock"></i> mdi mdi-clock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock-alert"></i> mdi mdi-clock-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock-end"></i> mdi mdi-clock-end
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock-fast"></i> mdi mdi-clock-fast
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock-in"></i> mdi mdi-clock-in
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock-out"></i> mdi mdi-clock-out
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-clock-start"></i> mdi mdi-clock-start
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close"></i> mdi mdi-close
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-box"></i> mdi mdi-close-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-box-outline"></i> mdi mdi-close-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-circle"></i> mdi mdi-close-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-circle-outline"></i> mdi mdi-close-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-network"></i> mdi mdi-close-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-octagon"></i> mdi mdi-close-octagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-close-octagon-outline"></i> mdi mdi-close-octagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-closed-caption"></i> mdi mdi-closed-caption
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud"></i> mdi mdi-cloud
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-check"></i> mdi mdi-cloud-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-circle"></i> mdi mdi-cloud-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-download"></i> mdi mdi-cloud-download
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-outline"></i> mdi mdi-cloud-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-outline-off"></i> mdi mdi-cloud-outline-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-print"></i> mdi mdi-cloud-print
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-print-outline"></i> mdi mdi-cloud-print-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-sync"></i> mdi mdi-cloud-sync
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cloud-upload"></i> mdi mdi-cloud-upload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-array"></i> mdi mdi-code-array
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-braces"></i> mdi mdi-code-braces
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-brackets"></i> mdi mdi-code-brackets
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-equal"></i> mdi mdi-code-equal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-greater-than"></i> mdi mdi-code-greater-than
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-greater-than-or-equal"></i> mdi mdi-code-greater-than-or-equal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-less-than"></i> mdi mdi-code-less-than
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-less-than-or-equal"></i> mdi mdi-code-less-than-or-equal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-not-equal"></i> mdi mdi-code-not-equal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-not-equal-variant"></i> mdi mdi-code-not-equal-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-parentheses"></i> mdi mdi-code-parentheses
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-string"></i> mdi mdi-code-string
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-code-tags"></i> mdi mdi-code-tags
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-codepen"></i> mdi mdi-codepen
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-coffee"></i> mdi mdi-coffee
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-coffee-to-go"></i> mdi mdi-coffee-to-go
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-coffin"></i> mdi mdi-coffin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-collage"></i> mdi mdi-collage
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-color-helper"></i> mdi mdi-color-helper
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment"></i> mdi mdi-comment
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-account"></i> mdi mdi-comment-account
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-account-outline"></i> mdi mdi-comment-account-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-alert"></i> mdi mdi-comment-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-alert-outline"></i> mdi mdi-comment-alert-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-check"></i> mdi mdi-comment-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-check-outline"></i> mdi mdi-comment-check-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-multiple-outline"></i> mdi mdi-comment-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-outline"></i> mdi mdi-comment-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-plus-outline"></i> mdi mdi-comment-plus-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-processing"></i> mdi mdi-comment-processing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-processing-outline"></i> mdi mdi-comment-processing-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-question-outline"></i> mdi mdi-comment-question-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-remove-outline"></i> mdi mdi-comment-remove-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-text"></i> mdi mdi-comment-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-comment-text-outline"></i> mdi mdi-comment-text-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-compare"></i> mdi mdi-compare
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-compass"></i> mdi mdi-compass
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-compass-outline"></i> mdi mdi-compass-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-console"></i> mdi mdi-console
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-contacts"></i> mdi mdi-contacts
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-copy"></i> mdi mdi-content-copy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-cut"></i> mdi mdi-content-cut
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-duplicate"></i> mdi mdi-content-duplicate
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-paste"></i> mdi mdi-content-paste
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-save"></i> mdi mdi-content-save
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-save-all"></i> mdi mdi-content-save-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-content-save-settings"></i> mdi mdi-content-save-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-contrast"></i> mdi mdi-contrast
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-contrast-box"></i> mdi mdi-contrast-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-contrast-circle"></i> mdi mdi-contrast-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cookie"></i> mdi mdi-cookie
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-copyright"></i> mdi mdi-copyright
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-counter"></i> mdi mdi-counter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cow"></i> mdi mdi-cow
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-credit-card"></i> mdi mdi-credit-card
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-credit-card-multiple"></i> mdi mdi-credit-card-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-credit-card-off"></i> mdi mdi-credit-card-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-credit-card-scan"></i> mdi mdi-credit-card-scan
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crop"></i> mdi mdi-crop
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crop-free"></i> mdi mdi-crop-free
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crop-landscape"></i> mdi mdi-crop-landscape
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crop-portrait"></i> mdi mdi-crop-portrait
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crop-square"></i> mdi mdi-crop-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crosshairs"></i> mdi mdi-crosshairs
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crosshairs-gps"></i> mdi mdi-crosshairs-gps
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-crown"></i> mdi mdi-crown
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cube"></i> mdi mdi-cube
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cube-outline"></i> mdi mdi-cube-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cube-send"></i> mdi mdi-cube-send
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cube-unfolded"></i> mdi mdi-cube-unfolded
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cup"></i> mdi mdi-cup
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cup-off"></i> mdi mdi-cup-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cup-water"></i> mdi mdi-cup-water
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-btc"></i> mdi mdi-currency-btc
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-eur"></i> mdi mdi-currency-eur
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-gbp"></i> mdi mdi-currency-gbp
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-inr"></i> mdi mdi-currency-inr
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-ngn"></i> mdi mdi-currency-ngn
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-rub"></i> mdi mdi-currency-rub
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-try"></i> mdi mdi-currency-try
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-currency-usd"></i> mdi mdi-currency-usd
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cursor-default"></i> mdi mdi-cursor-default
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cursor-default-outline"></i> mdi mdi-cursor-default-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cursor-move"></i> mdi mdi-cursor-move
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cursor-pointer"></i> mdi mdi-cursor-pointer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-cursor-text"></i> mdi mdi-cursor-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-database"></i> mdi mdi-database
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-database-minus"></i> mdi mdi-database-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-database-plus"></i> mdi mdi-database-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-debug-step-into"></i> mdi mdi-debug-step-into
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-debug-step-out"></i> mdi mdi-debug-step-out
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-debug-step-over"></i> mdi mdi-debug-step-over
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-decimal-decrease"></i> mdi mdi-decimal-decrease
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-delete"></i> mdi mdi-delete
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-delete-forever"></i> mdi mdi-delete-forever
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-delete-sweep"></i> mdi mdi-delete-sweep
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-delete-variant"></i> mdi mdi-delete-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-delta"></i> mdi mdi-delta
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-deskphone"></i> mdi mdi-deskphone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-desktop-tower"></i> mdi mdi-desktop-tower
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-details"></i> mdi mdi-details
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-deviantart"></i> mdi mdi-deviantart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dialpad"></i> mdi mdi-dialpad
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-diamond"></i> mdi mdi-diamond
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-1"></i> mdi mdi-dice-1
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-2"></i> mdi mdi-dice-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-3"></i> mdi mdi-dice-3
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-4"></i> mdi mdi-dice-4
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-5"></i> mdi mdi-dice-5
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-6"></i> mdi mdi-dice-6
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-d20"></i> mdi mdi-dice-d20
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-d4"></i> mdi mdi-dice-d4
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-d6"></i> mdi mdi-dice-d6
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dice-d8"></i> mdi mdi-dice-d8
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dip-switch"></i> mdi mdi-dip-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-directions"></i> mdi mdi-directions
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-directions-fork"></i> mdi mdi-directions-fork
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dishwasher"></i> mdi mdi-dishwasher
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dishwasher-alert"></i> mdi mdi-dishwasher-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-disqus"></i> mdi mdi-disqus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-diving-scuba"></i> mdi mdi-diving-scuba
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-division"></i> mdi mdi-division
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-division-box"></i> mdi mdi-division-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dns"></i> mdi mdi-dns
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-domain"></i> mdi mdi-domain
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dots-horizontal"></i> mdi mdi-dots-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dots-vertical"></i> mdi mdi-dots-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-download"></i> mdi mdi-download
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drag"></i> mdi mdi-drag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drag-horizontal"></i> mdi mdi-drag-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drag-vertical"></i> mdi mdi-drag-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drawing"></i> mdi mdi-drawing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drawing-box"></i> mdi mdi-drawing-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dresser"></i> mdi mdi-dresser
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dresser-outline"></i> mdi mdi-dresser-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drone"></i> mdi mdi-drone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dropbox"></i> mdi mdi-dropbox
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-drupal"></i> mdi mdi-drupal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-duck"></i> mdi mdi-duck
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-dumbbell"></i> mdi mdi-dumbbell
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-earth"></i> mdi mdi-earth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-earth-off"></i> mdi mdi-earth-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eject"></i> mdi mdi-eject
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-elevation-decline"></i> mdi mdi-elevation-decline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-elevation-rise"></i> mdi mdi-elevation-rise
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-elevator"></i> mdi mdi-elevator
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-email"></i> mdi mdi-email
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-email-open"></i> mdi mdi-email-open
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-email-open-outline"></i> mdi mdi-email-open-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-email-outline"></i> mdi mdi-email-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-email-variant"></i> mdi mdi-email-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon"></i> mdi mdi-emoticon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-cool"></i> mdi mdi-emoticon-cool
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-devil"></i> mdi mdi-emoticon-devil
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-happy"></i> mdi mdi-emoticon-happy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-neutral"></i> mdi mdi-emoticon-neutral
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-poop"></i> mdi mdi-emoticon-poop
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-sad"></i> mdi mdi-emoticon-sad
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-emoticon-tongue"></i> mdi mdi-emoticon-tongue
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-engine"></i> mdi mdi-engine
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-engine-outline"></i> mdi mdi-engine-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-equal"></i> mdi mdi-equal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-equal-box"></i> mdi mdi-equal-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eraser"></i> mdi mdi-eraser
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eraser-variant"></i> mdi mdi-eraser-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-escalator"></i> mdi mdi-escalator
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ethernet"></i> mdi mdi-ethernet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ethernet-cable"></i> mdi mdi-ethernet-cable
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ethernet-cable-off"></i> mdi mdi-ethernet-cable-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ev-station"></i> mdi mdi-ev-station
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-evernote"></i> mdi mdi-evernote
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-exclamation"></i> mdi mdi-exclamation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-exit-to-app"></i> mdi mdi-exit-to-app
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-export"></i> mdi mdi-export
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eye"></i> mdi mdi-eye
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eye-off"></i> mdi mdi-eye-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eyedropper"></i> mdi mdi-eyedropper
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-eyedropper-variant"></i> mdi mdi-eyedropper-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-face-man"></i> mdi mdi-face-man
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-face-man-profile"></i> mdi mdi-face-man-profile
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-facebook"></i> mdi mdi-facebook
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-facebook-gaming"></i> mdi mdi-facebook-gaming
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-facebook-messenger"></i> mdi mdi-facebook-messenger
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-factory"></i> mdi mdi-factory
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fan"></i> mdi mdi-fan
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fast-forward"></i> mdi mdi-fast-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fax"></i> mdi mdi-fax
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ferry"></i> mdi mdi-ferry
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file"></i> mdi mdi-file
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-chart"></i> mdi mdi-file-chart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-check"></i> mdi mdi-file-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-cloud"></i> mdi mdi-file-cloud
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-delimited"></i> mdi mdi-file-delimited
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-document"></i> mdi mdi-file-document
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-document-box"></i> mdi mdi-file-document-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-excel"></i> mdi mdi-file-excel
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-excel-box"></i> mdi mdi-file-excel-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-export"></i> mdi mdi-file-export
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-find"></i> mdi mdi-file-find
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-hidden"></i> mdi mdi-file-hidden
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-image"></i> mdi mdi-file-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-import"></i> mdi mdi-file-import
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-lock"></i> mdi mdi-file-lock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-multiple"></i> mdi mdi-file-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-music"></i> mdi mdi-file-music
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-outline"></i> mdi mdi-file-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-pdf"></i> mdi mdi-file-pdf
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-pdf-box"></i> mdi mdi-file-pdf-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-powerpoint"></i> mdi mdi-file-powerpoint
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-powerpoint-box"></i> mdi mdi-file-powerpoint-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-restore"></i> mdi mdi-file-restore
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-send"></i> mdi mdi-file-send
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-tree"></i> mdi mdi-file-tree
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-video"></i> mdi mdi-file-video
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-word"></i> mdi mdi-file-word
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-word-box"></i> mdi mdi-file-word-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-file-xml"></i> mdi mdi-file-xml
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-film"></i> mdi mdi-film
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filmstrip"></i> mdi mdi-filmstrip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filmstrip-off"></i> mdi mdi-filmstrip-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filter"></i> mdi mdi-filter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filter-outline"></i> mdi mdi-filter-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filter-remove"></i> mdi mdi-filter-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filter-remove-outline"></i> mdi mdi-filter-remove-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-filter-variant"></i> mdi mdi-filter-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fingerprint"></i> mdi mdi-fingerprint
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fire"></i> mdi mdi-fire
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-firefox"></i> mdi mdi-firefox
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fish"></i> mdi mdi-fish
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flag"></i> mdi mdi-flag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flag-checkered"></i> mdi mdi-flag-checkered
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flag-outline"></i> mdi mdi-flag-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flag-remove"></i> mdi mdi-flag-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flag-triangle"></i> mdi mdi-flag-triangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flag-variant"></i> mdi mdi-flag-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flash"></i> mdi mdi-flash
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flash-auto"></i> mdi mdi-flash-auto
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flash-off"></i> mdi mdi-flash-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flashlight"></i> mdi mdi-flashlight
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flashlight-off"></i> mdi mdi-flashlight-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flask"></i> mdi mdi-flask
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flask-empty"></i> mdi mdi-flask-empty
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flask-empty-outline"></i> mdi mdi-flask-empty-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flask-outline"></i> mdi mdi-flask-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flip-to-back"></i> mdi mdi-flip-to-back
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flip-to-front"></i> mdi mdi-flip-to-front
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-floppy"></i> mdi mdi-floppy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-flower"></i> mdi mdi-flower
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder"></i> mdi mdi-folder
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-account"></i> mdi mdi-folder-account
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-download"></i> mdi mdi-folder-download
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-google-drive"></i> mdi mdi-folder-google-drive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-image"></i> mdi mdi-folder-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-lock"></i> mdi mdi-folder-lock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-lock-open"></i> mdi mdi-folder-lock-open
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-move"></i> mdi mdi-folder-move
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-multiple"></i> mdi mdi-folder-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-multiple-image"></i> mdi mdi-folder-multiple-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-multiple-outline"></i> mdi mdi-folder-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-outline"></i> mdi mdi-folder-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-plus"></i> mdi mdi-folder-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-remove"></i> mdi mdi-folder-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-folder-upload"></i> mdi mdi-folder-upload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-food"></i> mdi mdi-food
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-food-apple"></i> mdi mdi-food-apple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-food-fork-drink"></i> mdi mdi-food-fork-drink
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-food-off"></i> mdi mdi-food-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-food-variant"></i> mdi mdi-food-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-football"></i> mdi mdi-football
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-football-australian"></i> mdi mdi-football-australian
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-football-helmet"></i> mdi mdi-football-helmet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-align-center"></i> mdi mdi-format-align-center
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-align-justify"></i> mdi mdi-format-align-justify
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-align-left"></i> mdi mdi-format-align-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-align-right"></i> mdi mdi-format-align-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-annotation-plus"></i> mdi mdi-format-annotation-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-bold"></i> mdi mdi-format-bold
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-clear"></i> mdi mdi-format-clear
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-color-fill"></i> mdi mdi-format-color-fill
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-float-center"></i> mdi mdi-format-float-center
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-float-left"></i> mdi mdi-format-float-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-float-none"></i> mdi mdi-format-float-none
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-float-right"></i> mdi mdi-format-float-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-1"></i> mdi mdi-format-header-1
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-2"></i> mdi mdi-format-header-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-3"></i> mdi mdi-format-header-3
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-4"></i> mdi mdi-format-header-4
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-5"></i> mdi mdi-format-header-5
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-6"></i> mdi mdi-format-header-6
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-decrease"></i> mdi mdi-format-header-decrease
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-equal"></i> mdi mdi-format-header-equal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-increase"></i> mdi mdi-format-header-increase
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-header-pound"></i> mdi mdi-format-header-pound
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-horizontal-align-center"></i> mdi mdi-format-horizontal-align-center
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-horizontal-align-left"></i> mdi mdi-format-horizontal-align-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-horizontal-align-right"></i> mdi mdi-format-horizontal-align-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-indent-decrease"></i> mdi mdi-format-indent-decrease
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-indent-increase"></i> mdi mdi-format-indent-increase
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-italic"></i> mdi mdi-format-italic
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-line-spacing"></i> mdi mdi-format-line-spacing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-line-style"></i> mdi mdi-format-line-style
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-line-weight"></i> mdi mdi-format-line-weight
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-list-bulleted"></i> mdi mdi-format-list-bulleted
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-list-bulleted-type"></i> mdi mdi-format-list-bulleted-type
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-list-numbered"></i> mdi mdi-format-list-numbered
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-paint"></i> mdi mdi-format-paint
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-paragraph"></i> mdi mdi-format-paragraph
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-rotate-90"></i> mdi mdi-format-rotate-90
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-size"></i> mdi mdi-format-size
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-strikethrough"></i> mdi mdi-format-strikethrough
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-strikethrough-variant"></i> mdi mdi-format-strikethrough-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-subscript"></i> mdi mdi-format-subscript
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-superscript"></i> mdi mdi-format-superscript
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-text"></i> mdi mdi-format-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-textdirection-l-to-r"></i> mdi mdi-format-textdirection-l-to-r
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-textdirection-r-to-l"></i> mdi mdi-format-textdirection-r-to-l
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-title"></i> mdi mdi-format-title
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-underline"></i> mdi mdi-format-underline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-vertical-align-bottom"></i> mdi mdi-format-vertical-align-bottom
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-vertical-align-center"></i> mdi mdi-format-vertical-align-center
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-vertical-align-top"></i> mdi mdi-format-vertical-align-top
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-wrap-inline"></i> mdi mdi-format-wrap-inline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-wrap-square"></i> mdi mdi-format-wrap-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-wrap-tight"></i> mdi mdi-format-wrap-tight
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-format-wrap-top-bottom"></i> mdi mdi-format-wrap-top-bottom
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-forum"></i> mdi mdi-forum
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-forward"></i> mdi mdi-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fountain-pen-tip"></i> mdi mdi-fountain-pen-tip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fridge"></i> mdi mdi-fridge
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fridge-alert"></i> mdi mdi-fridge-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fridge-bottom"></i> mdi mdi-fridge-bottom
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fridge-top"></i> mdi mdi-fridge-top
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fullscreen"></i> mdi mdi-fullscreen
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-fullscreen-exit"></i> mdi mdi-fullscreen-exit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-function"></i> mdi mdi-function
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gamepad"></i> mdi mdi-gamepad
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gamepad-variant"></i> mdi mdi-gamepad-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gas-cylinder"></i> mdi mdi-gas-cylinder
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gas-station"></i> mdi mdi-gas-station
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gate"></i> mdi mdi-gate
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gauge"></i> mdi mdi-gauge
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gavel"></i> mdi mdi-gavel
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gender-female"></i> mdi mdi-gender-female
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gender-male"></i> mdi mdi-gender-male
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gender-male-female"></i> mdi mdi-gender-male-female
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gender-transgender"></i> mdi mdi-gender-transgender
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ghost"></i> mdi mdi-ghost
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gift"></i> mdi mdi-gift
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-git"></i> mdi mdi-git
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-github"></i> mdi mdi-github
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gitlab"></i> mdi mdi-gitlab
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-glass-flute"></i> mdi mdi-glass-flute
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-glass-mug"></i> mdi mdi-glass-mug
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-glass-stange"></i> mdi mdi-glass-stange
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-glass-tulip"></i> mdi mdi-glass-tulip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-glass-mug"></i> mdi mdi-glass-mug
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-glasses"></i> mdi mdi-glasses
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gmail"></i> mdi mdi-gmail
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-gnome"></i> mdi mdi-gnome
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google"></i> mdi mdi-google
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-cardboard"></i> mdi mdi-google-cardboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-chrome"></i> mdi mdi-google-chrome
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-circles"></i> mdi mdi-google-circles
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-circles-communities"></i> mdi mdi-google-circles-communities
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-circles-extended"></i> mdi mdi-google-circles-extended
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-circles-group"></i> mdi mdi-google-circles-group
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-drive"></i> mdi mdi-google-drive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-earth"></i> mdi mdi-google-earth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-glass"></i> mdi mdi-google-glass
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-maps"></i> mdi mdi-google-maps
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-nearby"></i> mdi mdi-google-nearby
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-play"></i> mdi mdi-google-play
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-plus"></i> mdi mdi-google-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-spreadsheet"></i> mdi mdi-google-spreadsheet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-google-translate"></i> mdi mdi-google-translate
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-grease-pencil"></i> mdi mdi-grease-pencil
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-grid"></i> mdi mdi-grid
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-grid-off"></i> mdi mdi-grid-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-group"></i> mdi mdi-group
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-grid-off"></i> mdi mdi-grid-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-group"></i> mdi mdi-group
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-guitar-electric"></i> mdi mdi-guitar-electric
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-guitar-pick"></i> mdi mdi-guitar-pick
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-guitar-pick-outline"></i> mdi mdi-guitar-pick-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-guy-fawkes-mask"></i> mdi mdi-guy-fawkes-mask
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hammer"></i> mdi mdi-hammer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hand-pointing-right"></i> mdi mdi-hand-pointing-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hanger"></i> mdi mdi-hanger
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hard-hat"></i> mdi mdi-hard-hat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-harddisk"></i> mdi mdi-harddisk
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-headphones"></i> mdi mdi-headphones
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-headphones-box"></i> mdi mdi-headphones-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-headphones-settings"></i> mdi mdi-headphones-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-headset"></i> mdi mdi-headset
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-headset-dock"></i> mdi mdi-headset-dock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-headset-off"></i> mdi mdi-headset-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-heart"></i> mdi mdi-heart
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-heart-box"></i> mdi mdi-heart-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-heart-box-outline"></i> mdi mdi-heart-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-heart-broken"></i> mdi mdi-heart-broken
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-heart-outline"></i> mdi mdi-heart-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-heart-pulse"></i> mdi mdi-heart-pulse
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-help"></i> mdi mdi-help
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-help-circle"></i> mdi mdi-help-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-help-circle-outline"></i> mdi mdi-help-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hexagon"></i> mdi mdi-hexagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hexagon-outline"></i> mdi mdi-hexagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-highway"></i> mdi mdi-highway
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-history"></i> mdi mdi-history
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hololens"></i> mdi mdi-hololens
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-home"></i> mdi mdi-home
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-home-map-marker"></i> mdi mdi-home-map-marker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-home-modern"></i> mdi mdi-home-modern
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-home-variant"></i> mdi mdi-home-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hops"></i> mdi mdi-hops
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hospital"></i> mdi mdi-hospital
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hospital-building"></i> mdi mdi-hospital-building
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hospital-marker"></i> mdi mdi-hospital-marker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hot-tub"></i> mdi mdi-hot-tub
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hours-24"></i> mdi mdi-hours-24
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-hubspot"></i> mdi mdi-hubspot
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human"></i> mdi mdi-human
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-child"></i> mdi mdi-human-child
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-female"></i> mdi mdi-human-female
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-greeting"></i> mdi mdi-human-greeting
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-handsdown"></i> mdi mdi-human-handsdown
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-handsup"></i> mdi mdi-human-handsup
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-male"></i> mdi mdi-human-male
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-male-female"></i> mdi mdi-human-male-female
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-human-pregnant"></i> mdi mdi-human-pregnant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image"></i> mdi mdi-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-album"></i> mdi mdi-image-album
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-area"></i> mdi mdi-image-area
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-area-close"></i> mdi mdi-image-area-close
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-broken"></i> mdi mdi-image-broken
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-broken-variant"></i> mdi mdi-image-broken-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter"></i> mdi mdi-image-filter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-black-white"></i> mdi mdi-image-filter-black-white
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-center-focus"></i> mdi mdi-image-filter-center-focus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-center-focus-weak"></i> mdi mdi-image-filter-center-focus-weak
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-drama"></i> mdi mdi-image-filter-drama
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-frames"></i> mdi mdi-image-filter-frames
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-hdr"></i> mdi mdi-image-filter-hdr
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-none"></i> mdi mdi-image-filter-none
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-tilt-shift"></i> mdi mdi-image-filter-tilt-shift
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-filter-vintage"></i> mdi mdi-image-filter-vintage
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-image-multiple"></i> mdi mdi-image-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-import"></i> mdi mdi-import
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-inbox"></i> mdi mdi-inbox
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-incognito"></i> mdi mdi-incognito
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-information"></i> mdi mdi-information
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-information-outline"></i> mdi mdi-information-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-information-variant"></i> mdi mdi-information-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-instagram"></i> mdi mdi-instagram
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-instrument-triangle"></i> mdi mdi-instrument-triangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-invert-colors"></i> mdi mdi-invert-colors
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-jeepney"></i> mdi mdi-jeepney
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-jira"></i> mdi mdi-jira
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-jsfiddle"></i> mdi mdi-jsfiddle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-kabaddi"></i> mdi mdi-kabaddi
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keg"></i> mdi mdi-keg
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-kettle"></i> mdi mdi-kettle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-key"></i> mdi mdi-key
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-key-change"></i> mdi mdi-key-change
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-key-minus"></i> mdi mdi-key-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-key-plus"></i> mdi mdi-key-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-key-remove"></i> mdi mdi-key-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-key-variant"></i> mdi mdi-key-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard"></i> mdi mdi-keyboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-backspace"></i> mdi mdi-keyboard-backspace
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-caps"></i> mdi mdi-keyboard-caps
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-close"></i> mdi mdi-keyboard-close
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-off"></i> mdi mdi-keyboard-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-return"></i> mdi mdi-keyboard-return
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-tab"></i> mdi mdi-keyboard-tab
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-keyboard-variant"></i> mdi mdi-keyboard-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-kodi"></i> mdi mdi-kodi
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-label"></i> mdi mdi-label
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-label-outline"></i> mdi mdi-label-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lambda"></i> mdi mdi-lambda
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lan"></i> mdi mdi-lan
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lan-connect"></i> mdi mdi-lan-connect
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lan-disconnect"></i> mdi mdi-lan-disconnect
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lan-pending"></i> mdi mdi-lan-pending
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-c"></i> mdi mdi-language-c
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-cpp"></i> mdi mdi-language-cpp
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-csharp"></i> mdi mdi-language-csharp
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-css3"></i> mdi mdi-language-css3
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-html5"></i> mdi mdi-language-html5
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-javascript"></i> mdi mdi-language-javascript
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-php"></i> mdi mdi-language-php
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-python"></i> mdi mdi-language-python
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-language-typescript"></i> mdi mdi-language-typescript
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-laptop"></i> mdi mdi-laptop
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lasso"></i> mdi mdi-lasso
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-launch"></i> mdi mdi-launch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-layers"></i> mdi mdi-layers
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-layers-off"></i> mdi mdi-layers-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lead-pencil"></i> mdi mdi-lead-pencil
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-leaf"></i> mdi mdi-leaf
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-led-off"></i> mdi mdi-led-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-led-on"></i> mdi mdi-led-on
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-led-outline"></i> mdi mdi-led-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-led-variant-off"></i> mdi mdi-led-variant-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-led-variant-on"></i> mdi mdi-led-variant-on
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-led-variant-outline"></i> mdi mdi-led-variant-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-library"></i> mdi mdi-library
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-library-shelves"></i> mdi mdi-library-shelves
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lifebuoy"></i> mdi mdi-lifebuoy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-light-switch"></i> mdi mdi-light-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lightbulb"></i> mdi mdi-lightbulb
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lightbulb-outline"></i> mdi mdi-lightbulb-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-link"></i> mdi mdi-link
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-link-off"></i> mdi mdi-link-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-link-variant"></i> mdi mdi-link-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-link-variant-off"></i> mdi mdi-link-variant-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-linkedin"></i> mdi mdi-linkedin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-linux"></i> mdi mdi-linux
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lock"></i> mdi mdi-lock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lock-open"></i> mdi mdi-lock-open
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lock-open-outline"></i> mdi mdi-lock-open-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lock-outline"></i> mdi mdi-lock-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lock-plus"></i> mdi mdi-lock-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-login"></i> mdi mdi-login
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-login-variant"></i> mdi mdi-login-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-logout"></i> mdi mdi-logout
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-logout-variant"></i> mdi mdi-logout-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-looks"></i> mdi mdi-looks
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-loupe"></i> mdi mdi-loupe
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-lumx"></i> mdi mdi-lumx
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-magnet"></i> mdi mdi-magnet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-magnet-on"></i> mdi mdi-magnet-on
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-magnify"></i> mdi mdi-magnify
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-magnify-minus"></i> mdi mdi-magnify-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-magnify-plus"></i> mdi mdi-magnify-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-mailbox"></i> mdi mdi-mailbox
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map"></i> mdi mdi-map
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker"></i> mdi mdi-map-marker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker-circle"></i> mdi mdi-map-marker-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker-minus"></i> mdi mdi-map-marker-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker-multiple"></i> mdi mdi-map-marker-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker-off"></i> mdi mdi-map-marker-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker-plus"></i> mdi mdi-map-marker-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-map-marker-radius"></i> mdi mdi-map-marker-radius
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-margin"></i> mdi mdi-margin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-marker"></i> mdi mdi-marker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-marker-check"></i> mdi mdi-marker-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-material-design"></i> mdi mdi-material-design
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-material-ui"></i> mdi mdi-material-ui
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-math-compass"></i> mdi mdi-math-compass
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-matrix"></i> mdi mdi-matrix
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-medal"></i> mdi mdi-medal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-medical-bag"></i> mdi mdi-medical-bag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-memory"></i> mdi mdi-memory
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-menu"></i> mdi mdi-menu
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-menu-down"></i> mdi mdi-menu-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-menu-left"></i> mdi mdi-menu-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-menu-right"></i> mdi mdi-menu-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-menu-up"></i> mdi mdi-menu-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message"></i> mdi mdi-message
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-alert"></i> mdi mdi-message-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-draw"></i> mdi mdi-message-draw
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-image"></i> mdi mdi-message-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-outline"></i> mdi mdi-message-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-plus"></i> mdi mdi-message-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-processing"></i> mdi mdi-message-processing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-reply"></i> mdi mdi-message-reply
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-reply-text"></i> mdi mdi-message-reply-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-text"></i> mdi mdi-message-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-text-outline"></i> mdi mdi-message-text-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-message-video"></i> mdi mdi-message-video
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-meteor"></i> mdi mdi-meteor
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microphone"></i> mdi mdi-microphone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microphone-off"></i> mdi mdi-microphone-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microphone-outline"></i> mdi mdi-microphone-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microphone-settings"></i> mdi mdi-microphone-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microphone-variant"></i> mdi mdi-microphone-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microphone-variant-off"></i> mdi mdi-microphone-variant-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microscope"></i> mdi mdi-microscope
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-microsoft"></i> mdi mdi-microsoft
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-minecraft"></i> mdi mdi-minecraft
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-minus"></i> mdi mdi-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-minus-box"></i> mdi mdi-minus-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-minus-circle"></i> mdi mdi-minus-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-minus-circle-outline"></i> mdi mdi-minus-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-minus-network"></i> mdi mdi-minus-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-mirror"></i> mdi mdi-mirror
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-monitor"></i> mdi mdi-monitor
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-monitor-multiple"></i> mdi mdi-monitor-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-more"></i> mdi mdi-more
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-motorbike"></i> mdi mdi-motorbike
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-mouse"></i> mdi mdi-mouse
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-mouse-off"></i> mdi mdi-mouse-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-mouse-variant"></i> mdi mdi-mouse-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-mouse-variant-off"></i> mdi mdi-mouse-variant-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-move-resize"></i> mdi mdi-move-resize
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-move-resize-variant"></i> mdi mdi-move-resize-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-movie"></i> mdi mdi-movie
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-multiplication"></i> mdi mdi-multiplication
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-multiplication-box"></i> mdi mdi-multiplication-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-box"></i> mdi mdi-music-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-box-outline"></i> mdi mdi-music-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-circle"></i> mdi mdi-music-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note"></i> mdi mdi-music-note
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-bluetooth"></i> mdi mdi-music-note-bluetooth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-bluetooth-off"></i> mdi mdi-music-note-bluetooth-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-eighth"></i> mdi mdi-music-note-eighth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-half"></i> mdi mdi-music-note-half
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-off"></i> mdi mdi-music-note-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-quarter"></i> mdi mdi-music-note-quarter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-sixteenth"></i> mdi mdi-music-note-sixteenth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-music-note-whole"></i> mdi mdi-music-note-whole
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nature"></i> mdi mdi-nature
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nature-people"></i> mdi mdi-nature-people
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-navigation"></i> mdi mdi-navigation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-near-me"></i> mdi mdi-near-me
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-needle"></i> mdi mdi-needle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nest-protect"></i> mdi mdi-nest-protect
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nest-thermostat"></i> mdi mdi-nest-thermostat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-new-box"></i> mdi mdi-new-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-newspaper"></i> mdi mdi-newspaper
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nfc"></i> mdi mdi-nfc
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nfc-tap"></i> mdi mdi-nfc-tap
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nfc-variant"></i> mdi mdi-nfc-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nodejs"></i> mdi mdi-nodejs
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-note"></i> mdi mdi-note
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-note-outline"></i> mdi mdi-note-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-note-plus"></i> mdi mdi-note-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-note-plus-outline"></i> mdi mdi-note-plus-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-note-text"></i> mdi mdi-note-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-notification-clear-all"></i> mdi mdi-notification-clear-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric"></i> mdi mdi-numeric
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-0-box"></i> mdi mdi-numeric-0-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-0-box-multiple-outline"></i> mdi mdi-numeric-0-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-0-box-outline"></i> mdi mdi-numeric-0-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-1-box"></i> mdi mdi-numeric-1-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-1-box-multiple-outline"></i> mdi mdi-numeric-1-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-1-box-outline"></i> mdi mdi-numeric-1-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-2-box"></i> mdi mdi-numeric-2-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-2-box-multiple-outline"></i> mdi mdi-numeric-2-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-2-box-outline"></i> mdi mdi-numeric-2-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-3-box"></i> mdi mdi-numeric-3-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-3-box-multiple-outline"></i> mdi mdi-numeric-3-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-3-box-outline"></i> mdi mdi-numeric-3-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-4-box"></i> mdi mdi-numeric-4-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-4-box-multiple-outline"></i> mdi mdi-numeric-4-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-4-box-outline"></i> mdi mdi-numeric-4-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-5-box"></i> mdi mdi-numeric-5-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-5-box-multiple-outline"></i> mdi mdi-numeric-5-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-5-box-outline"></i> mdi mdi-numeric-5-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-6-box"></i> mdi mdi-numeric-6-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-6-box-multiple-outline"></i> mdi mdi-numeric-6-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-6-box-outline"></i> mdi mdi-numeric-6-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-7-box"></i> mdi mdi-numeric-7-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-7-box-multiple-outline"></i> mdi mdi-numeric-7-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-7-box-outline"></i> mdi mdi-numeric-7-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-8-box"></i> mdi mdi-numeric-8-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-8-box-multiple-outline"></i> mdi mdi-numeric-8-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-8-box-outline"></i> mdi mdi-numeric-8-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-9-box"></i> mdi mdi-numeric-9-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-9-box-multiple-outline"></i> mdi mdi-numeric-9-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-9-box-outline"></i> mdi mdi-numeric-9-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-9-plus-box"></i> mdi mdi-numeric-9-plus-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-9-plus-box-multiple-outline"></i> mdi mdi-numeric-9-plus-box-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-numeric-9-plus-box-outline"></i> mdi mdi-numeric-9-plus-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-nutrition"></i> mdi mdi-nutrition
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-octagon"></i> mdi mdi-octagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-octagon-outline"></i> mdi mdi-octagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-odnoklassniki"></i> mdi mdi-odnoklassniki
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-office-building"></i> mdi mdi-office-building
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-oil"></i> mdi mdi-oil
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-oil-temperature"></i> mdi mdi-oil-temperature
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-omega"></i> mdi mdi-omega
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-one-up"></i> mdi mdi-one-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-opacity"></i> mdi mdi-opacity
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-open-in-app"></i> mdi mdi-open-in-app
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-open-in-new"></i> mdi mdi-open-in-new
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-openid"></i> mdi mdi-openid
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-opera"></i> mdi mdi-opera
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ornament"></i> mdi mdi-ornament
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ornament-variant"></i> mdi mdi-ornament-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-owl"></i> mdi mdi-owl
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-package"></i> mdi mdi-package
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-package-down"></i> mdi mdi-package-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-package-up"></i> mdi mdi-package-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-package-variant"></i> mdi mdi-package-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-package-variant-closed"></i> mdi mdi-package-variant-closed
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-page-first"></i> mdi mdi-page-first
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-page-last"></i> mdi mdi-page-last
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-palette"></i> mdi mdi-palette
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-palette-advanced"></i> mdi mdi-palette-advanced
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-panda"></i> mdi mdi-panda
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pandora"></i> mdi mdi-pandora
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-panorama"></i> mdi mdi-panorama
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-panorama-fisheye"></i> mdi mdi-panorama-fisheye
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-panorama-horizontal"></i> mdi mdi-panorama-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-panorama-vertical"></i> mdi mdi-panorama-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-panorama-wide-angle"></i> mdi mdi-panorama-wide-angle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-paper-cut-vertical"></i> mdi mdi-paper-cut-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-paperclip"></i> mdi mdi-paperclip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-parking"></i> mdi mdi-parking
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pause"></i> mdi mdi-pause
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pause-circle"></i> mdi mdi-pause-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pause-circle-outline"></i> mdi mdi-pause-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pause-octagon"></i> mdi mdi-pause-octagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pause-octagon-outline"></i> mdi mdi-pause-octagon-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-paw"></i> mdi mdi-paw
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-paw-off"></i> mdi mdi-paw-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pen"></i> mdi mdi-pen
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pencil"></i> mdi mdi-pencil
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pencil-box"></i> mdi mdi-pencil-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pencil-box-outline"></i> mdi mdi-pencil-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pencil-lock"></i> mdi mdi-pencil-lock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pencil-off"></i> mdi mdi-pencil-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-percent"></i> mdi mdi-percent
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pharmacy"></i> mdi mdi-pharmacy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone"></i> mdi mdi-phone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-bluetooth"></i> mdi mdi-phone-bluetooth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-classic"></i> mdi mdi-phone-classic
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-forward"></i> mdi mdi-phone-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-hangup"></i> mdi mdi-phone-hangup
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-in-talk"></i> mdi mdi-phone-in-talk
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-incoming"></i> mdi mdi-phone-incoming
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-log"></i> mdi mdi-phone-log
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-minus"></i> mdi mdi-phone-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-missed"></i> mdi mdi-phone-missed
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-outgoing"></i> mdi mdi-phone-outgoing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-paused"></i> mdi mdi-phone-paused
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-plus"></i> mdi mdi-phone-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-settings"></i> mdi mdi-phone-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-phone-voip"></i> mdi mdi-phone-voip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pi"></i> mdi mdi-pi
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pi-box"></i> mdi mdi-pi-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pig"></i> mdi mdi-pig
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pill"></i> mdi mdi-pill
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pin"></i> mdi mdi-pin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pin-off"></i> mdi mdi-pin-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pine-tree"></i> mdi mdi-pine-tree
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pine-tree-box"></i> mdi mdi-pine-tree-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pinterest"></i> mdi mdi-pinterest
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pinwheel"></i> mdi mdi-pinwheel
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pizza"></i> mdi mdi-pizza
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-play"></i> mdi mdi-play
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-play-box-outline"></i> mdi mdi-play-box-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-play-circle"></i> mdi mdi-play-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-play-circle-outline"></i> mdi mdi-play-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-play-pause"></i> mdi mdi-play-pause
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-play-protected-content"></i> mdi mdi-play-protected-content
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-playlist-check"></i> mdi mdi-playlist-check
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-playlist-minus"></i> mdi mdi-playlist-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-playlist-play"></i> mdi mdi-playlist-play
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-playlist-plus"></i> mdi mdi-playlist-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-playlist-remove"></i> mdi mdi-playlist-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plex"></i> mdi mdi-plex
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus"></i> mdi mdi-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus-box"></i> mdi mdi-plus-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus-circle"></i> mdi mdi-plus-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus-circle-multiple-outline"></i> mdi mdi-plus-circle-multiple-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus-circle-outline"></i> mdi mdi-plus-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus-network"></i> mdi mdi-plus-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-plus-one"></i> mdi mdi-plus-one
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-podcast"></i> mdi mdi-podcast
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pokeball"></i> mdi mdi-pokeball
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-polaroid"></i> mdi mdi-polaroid
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-poll"></i> mdi mdi-poll
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-polymer"></i> mdi mdi-polymer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pool"></i> mdi mdi-pool
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-popcorn"></i> mdi mdi-popcorn
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pot"></i> mdi mdi-pot
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pot-mix"></i> mdi mdi-pot-mix
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pound"></i> mdi mdi-pound
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pound-box"></i> mdi mdi-pound-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-power"></i> mdi mdi-power
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-power-settings"></i> mdi mdi-power-settings
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-power-socket"></i> mdi mdi-power-socket
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-presentation"></i> mdi mdi-presentation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-presentation-play"></i> mdi mdi-presentation-play
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-printer"></i> mdi mdi-printer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-printer-3d"></i> mdi mdi-printer-3d
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-printer-alert"></i> mdi mdi-printer-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-priority-high"></i> mdi mdi-priority-high
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-priority-low"></i> mdi mdi-priority-low
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-professional-hexagon"></i> mdi mdi-professional-hexagon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-projector"></i> mdi mdi-projector
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-projector-screen"></i> mdi mdi-projector-screen
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-pulse"></i> mdi mdi-pulse
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-puzzle"></i> mdi mdi-puzzle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-qqchat"></i> mdi mdi-qqchat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-qrcode"></i> mdi mdi-qrcode
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-qrcode-scan"></i> mdi mdi-qrcode-scan
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-quadcopter"></i> mdi mdi-quadcopter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-quality-high"></i> mdi mdi-quality-high
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-quicktime"></i> mdi mdi-quicktime
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radar"></i> mdi mdi-radar
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radiator"></i> mdi mdi-radiator
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radio"></i> mdi mdi-radio
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radio-handheld"></i> mdi mdi-radio-handheld
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radio-tower"></i> mdi mdi-radio-tower
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radioactive"></i> mdi mdi-radioactive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radiobox-blank"></i> mdi mdi-radiobox-blank
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radiobox-marked"></i> mdi mdi-radiobox-marked
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ray-end"></i> mdi mdi-ray-end
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ray-end-arrow"></i> mdi mdi-ray-end-arrow
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ray-start-end"></i> mdi mdi-ray-start-end
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ray-vertex"></i> mdi mdi-ray-vertex
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-radio"></i> mdi mdi-radio
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-read"></i> mdi mdi-read
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-receipt"></i> mdi mdi-receipt
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-record"></i> mdi mdi-record
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-record-rec"></i> mdi mdi-record-rec
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-recycle"></i> mdi mdi-recycle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-reddit"></i> mdi mdi-reddit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-redo"></i> mdi mdi-redo
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-redo-variant"></i> mdi mdi-redo-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-refresh"></i> mdi mdi-refresh
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-regex"></i> mdi mdi-regex
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-relative-scale"></i> mdi mdi-relative-scale
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-reload"></i> mdi mdi-reload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-remote"></i> mdi mdi-remote
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rename-box"></i> mdi mdi-rename-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-repeat"></i> mdi mdi-repeat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-repeat-off"></i> mdi mdi-repeat-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-repeat-once"></i> mdi mdi-repeat-once
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-replay"></i> mdi mdi-replay
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-reply"></i> mdi mdi-reply
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-reply-all"></i> mdi mdi-reply-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-reproduction"></i> mdi mdi-reproduction
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-resize-bottom-right"></i> mdi mdi-resize-bottom-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-responsive"></i> mdi mdi-responsive
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rewind"></i> mdi mdi-rewind
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ribbon"></i> mdi mdi-ribbon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-road"></i> mdi mdi-road
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-road-variant"></i> mdi mdi-road-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rocket"></i> mdi mdi-rocket
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-3d"></i> mdi mdi-rotate-3d
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-left"></i> mdi mdi-rotate-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-left-variant"></i> mdi mdi-rotate-left-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-right"></i> mdi mdi-rotate-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rotate-right-variant"></i> mdi mdi-rotate-right-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rounded-corner"></i> mdi mdi-rounded-corner
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-router-wireless"></i> mdi mdi-router-wireless
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-routes"></i> mdi mdi-routes
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rowing"></i> mdi mdi-rowing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rss"></i> mdi mdi-rss
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-rss-box"></i> mdi mdi-rss-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ruler"></i> mdi mdi-ruler
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-run"></i> mdi mdi-run
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sale"></i> mdi mdi-sale
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-satellite"></i> mdi mdi-satellite
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-satellite-variant"></i> mdi mdi-satellite-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-saxophone"></i> mdi mdi-saxophone
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-scale"></i> mdi mdi-scale
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-scale-balance"></i> mdi mdi-scale-balance
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-scale-bathroom"></i> mdi mdi-scale-bathroom
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-school"></i> mdi mdi-school
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-screen-rotation"></i> mdi mdi-screen-rotation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-screen-rotation-lock"></i> mdi mdi-screen-rotation-lock
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-screwdriver"></i> mdi mdi-screwdriver
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-script"></i> mdi mdi-script
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sd"></i> mdi mdi-sd
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seal"></i> mdi mdi-seal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-flat"></i> mdi mdi-seat-flat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-flat-angled"></i> mdi mdi-seat-flat-angled
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-individual-suite"></i> mdi mdi-seat-individual-suite
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-legroom-extra"></i> mdi mdi-seat-legroom-extra
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-legroom-normal"></i> mdi mdi-seat-legroom-normal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-legroom-reduced"></i> mdi mdi-seat-legroom-reduced
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-recline-extra"></i> mdi mdi-seat-recline-extra
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-seat-recline-normal"></i> mdi mdi-seat-recline-normal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-security"></i> mdi mdi-security
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-security-network"></i> mdi mdi-security-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-select"></i> mdi mdi-select
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-select-all"></i> mdi mdi-select-all
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-select-inverse"></i> mdi mdi-select-inverse
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-select-off"></i> mdi mdi-select-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-selection"></i> mdi mdi-selection
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-send"></i> mdi mdi-send
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-serial-port"></i> mdi mdi-serial-port
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server"></i> mdi mdi-server
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-minus"></i> mdi mdi-server-minus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-network"></i> mdi mdi-server-network
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-network-off"></i> mdi mdi-server-network-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-off"></i> mdi mdi-server-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-plus"></i> mdi mdi-server-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-remove"></i> mdi mdi-server-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-server-security"></i> mdi mdi-server-security
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-set-center"></i> mdi mdi-set-center
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shape"></i> mdi mdi-shape
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shape-circle-plus"></i> mdi mdi-shape-circle-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shape-plus"></i> mdi mdi-shape-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shape-polygon-plus"></i> mdi mdi-shape-polygon-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shape-rectangle-plus"></i> mdi mdi-shape-rectangle-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shape-square-plus"></i> mdi mdi-shape-square-plus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-share"></i> mdi mdi-share
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-share-variant"></i> mdi mdi-share-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shield"></i> mdi mdi-shield
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shield-outline"></i> mdi mdi-shield-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shopping"></i> mdi mdi-shopping
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shopping-music"></i> mdi mdi-shopping-music
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shredder"></i> mdi mdi-shredder
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shuffle"></i> mdi mdi-shuffle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shuffle-disabled"></i> mdi mdi-shuffle-disabled
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-shuffle-variant"></i> mdi mdi-shuffle-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sigma"></i> mdi mdi-sigma
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sigma-lower"></i> mdi mdi-sigma-lower
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sign-caution"></i> mdi mdi-sign-caution
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-signal"></i> mdi mdi-signal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-signal-variant"></i> mdi mdi-signal-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-silverware"></i> mdi mdi-silverware
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-silverware-fork"></i> mdi mdi-silverware-fork
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-silverware-spoon"></i> mdi mdi-silverware-spoon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-silverware-variant"></i> mdi mdi-silverware-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sim"></i> mdi mdi-sim
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sim-alert"></i> mdi mdi-sim-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sim-off"></i> mdi mdi-sim-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sitemap"></i> mdi mdi-sitemap
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-backward"></i> mdi mdi-skip-backward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-forward"></i> mdi mdi-skip-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-next"></i> mdi mdi-skip-next
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-next-circle"></i> mdi mdi-skip-next-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-next-circle-outline"></i> mdi mdi-skip-next-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-previous"></i> mdi mdi-skip-previous
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-previous-circle"></i> mdi mdi-skip-previous-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skip-previous-circle-outline"></i> mdi mdi-skip-previous-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skype"></i> mdi mdi-skype
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-skype-business"></i> mdi mdi-skype-business
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-slack"></i> mdi mdi-slack
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sleep"></i> mdi mdi-sleep
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sleep-off"></i> mdi mdi-sleep-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-smoking"></i> mdi mdi-smoking
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-smoking-off"></i> mdi mdi-smoking-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-snapchat"></i> mdi mdi-snapchat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-snowman"></i> mdi mdi-snowman
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-soccer"></i> mdi mdi-soccer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sofa"></i> mdi mdi-sofa
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sort"></i> mdi mdi-sort
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sort-alphabetical-ascending"></i> mdi mdi-sort-alphabetical-ascending
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sort-ascending"></i> mdi mdi-sort-ascending
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sort-descending"></i> mdi mdi-sort-descending
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sort-numeric"></i> mdi mdi-sort-numeric
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sort-variant"></i> mdi mdi-sort-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-soundcloud"></i> mdi mdi-soundcloud
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-source-branch"></i> mdi mdi-source-branch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-source-fork"></i> mdi mdi-source-fork
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-source-merge"></i> mdi mdi-source-merge
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-source-pull"></i> mdi mdi-source-pull
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-speaker"></i> mdi mdi-speaker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-speaker-off"></i> mdi mdi-speaker-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-speedometer"></i> mdi mdi-speedometer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spellcheck"></i> mdi mdi-spellcheck
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spotify"></i> mdi mdi-spotify
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spotlight"></i> mdi mdi-spotlight
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spotlight-beam"></i> mdi mdi-spotlight-beam
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-spray"></i> mdi mdi-spray
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sprout"></i> mdi mdi-sprout
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-square-circle"></i> mdi mdi-square-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stack-exchange"></i> mdi mdi-stack-exchange
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stack-overflow"></i> mdi mdi-stack-overflow
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stairs"></i> mdi mdi-stairs
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-star"></i> mdi mdi-star
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-star-circle"></i> mdi mdi-star-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-star-half"></i> mdi mdi-star-half
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-star-off"></i> mdi mdi-star-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-star-outline"></i> mdi mdi-star-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-steam"></i> mdi mdi-steam
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-steering"></i> mdi mdi-steering
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-step-backward"></i> mdi mdi-step-backward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-step-backward-2"></i> mdi mdi-step-backward-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-step-forward"></i> mdi mdi-step-forward
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-step-forward-2"></i> mdi mdi-step-forward-2
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stethoscope"></i> mdi mdi-stethoscope
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sticker"></i> mdi mdi-sticker
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stocking"></i> mdi mdi-stocking
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stop"></i> mdi mdi-stop
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stop-circle"></i> mdi mdi-stop-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stop-circle-outline"></i> mdi mdi-stop-circle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-store"></i> mdi mdi-store
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-store-24-hour"></i> mdi mdi-store-24-hour
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-stove"></i> mdi mdi-stove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-subdirectory-arrow-left"></i> mdi mdi-subdirectory-arrow-left
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-subdirectory-arrow-right"></i> mdi mdi-subdirectory-arrow-right
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-subway"></i> mdi mdi-subway
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sunglasses"></i> mdi mdi-sunglasses
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-surround-sound"></i> mdi mdi-surround-sound
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-swap-horizontal"></i> mdi mdi-swap-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-swap-vertical"></i> mdi mdi-swap-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-swim"></i> mdi mdi-swim
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-switch"></i> mdi mdi-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sword"></i> mdi mdi-sword
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sync"></i> mdi mdi-sync
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sync-alert"></i> mdi mdi-sync-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-sync-off"></i> mdi mdi-sync-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tab"></i> mdi mdi-tab
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tab-unselected"></i> mdi mdi-tab-unselected
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table"></i> mdi mdi-table
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-column-plus-after"></i> mdi mdi-table-column-plus-after
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-column-plus-before"></i> mdi mdi-table-column-plus-before
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-column-remove"></i> mdi mdi-table-column-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-column-width"></i> mdi mdi-table-column-width
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-edit"></i> mdi mdi-table-edit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-large"></i> mdi mdi-table-large
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-row-height"></i> mdi mdi-table-row-height
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-row-plus-after"></i> mdi mdi-table-row-plus-after
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-row-plus-before"></i> mdi mdi-table-row-plus-before
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-table-row-remove"></i> mdi mdi-table-row-remove
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tablet"></i> mdi mdi-tablet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tablet-android"></i> mdi mdi-tablet-android
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tablet-ipad"></i> mdi mdi-tablet-ipad
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tag"></i> mdi mdi-tag
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tag-faces"></i> mdi mdi-tag-faces
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tag-multiple"></i> mdi mdi-tag-multiple
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tag-outline"></i> mdi mdi-tag-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tag-text-outline"></i> mdi mdi-tag-text-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-target"></i> mdi mdi-target
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-taxi"></i> mdi mdi-taxi
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-teamviewer"></i> mdi mdi-teamviewer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-telegram"></i> mdi mdi-telegram
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-television"></i> mdi mdi-television
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-television-guide"></i> mdi mdi-television-guide
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-temperature-celsius"></i> mdi mdi-temperature-celsius
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-temperature-fahrenheit"></i> mdi mdi-temperature-fahrenheit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-temperature-kelvin"></i> mdi mdi-temperature-kelvin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tennis"></i> mdi mdi-tennis
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tent"></i> mdi mdi-tent
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-terrain"></i> mdi mdi-terrain
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-test-tube"></i> mdi mdi-test-tube
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-text-shadow"></i> mdi mdi-text-shadow
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-text-box"></i> mdi mdi-text-box
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-texture"></i> mdi mdi-texture
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-theater"></i> mdi mdi-theater
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-theme-light-dark"></i> mdi mdi-theme-light-dark
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thermometer"></i> mdi mdi-thermometer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thermometer-lines"></i> mdi mdi-thermometer-lines
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thumb-down"></i> mdi mdi-thumb-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thumb-down-outline"></i> mdi mdi-thumb-down-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thumb-up"></i> mdi mdi-thumb-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thumb-up-outline"></i> mdi mdi-thumb-up-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-thumbs-up-down"></i> mdi mdi-thumbs-up-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ticket"></i> mdi mdi-ticket
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ticket-account"></i> mdi mdi-ticket-account
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ticket-confirmation"></i> mdi mdi-ticket-confirmation
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tie"></i> mdi mdi-tie
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timelapse"></i> mdi mdi-timelapse
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timer"></i> mdi mdi-timer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timer-10"></i> mdi mdi-timer-10
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timer-3"></i> mdi mdi-timer-3
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timer-off"></i> mdi mdi-timer-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timer-sand"></i> mdi mdi-timer-sand
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-timetable"></i> mdi mdi-timetable
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-toggle-switch"></i> mdi mdi-toggle-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-toggle-switch-off"></i> mdi mdi-toggle-switch-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooltip"></i> mdi mdi-tooltip
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooltip-edit"></i> mdi mdi-tooltip-edit
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooltip-image"></i> mdi mdi-tooltip-image
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooltip-outline"></i> mdi mdi-tooltip-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooltip-plus-outline"></i> mdi mdi-tooltip-plus-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooltip-text"></i> mdi mdi-tooltip-text
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tooth"></i> mdi mdi-tooth
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tractor"></i> mdi mdi-tractor
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-traffic-light"></i> mdi mdi-traffic-light
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-train"></i> mdi mdi-train
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tram"></i> mdi mdi-tram
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-transcribe"></i> mdi mdi-transcribe
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-transcribe-close"></i> mdi mdi-transcribe-close
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-transfer"></i> mdi mdi-transfer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-translate"></i> mdi mdi-translate
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tree"></i> mdi mdi-tree
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trello"></i> mdi mdi-trello
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trending-down"></i> mdi mdi-trending-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trending-neutral"></i> mdi mdi-trending-neutral
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trending-up"></i> mdi mdi-trending-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-triangle"></i> mdi mdi-triangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-triangle-outline"></i> mdi mdi-triangle-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trophy"></i> mdi mdi-trophy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trophy-award"></i> mdi mdi-trophy-award
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trophy-outline"></i> mdi mdi-trophy-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trophy-variant"></i> mdi mdi-trophy-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-trophy-variant-outline"></i> mdi mdi-trophy-variant-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-truck"></i> mdi mdi-truck
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-truck-delivery"></i> mdi mdi-truck-delivery
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tshirt-crew"></i> mdi mdi-tshirt-crew
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tshirt-v"></i> mdi mdi-tshirt-v
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tumble-dryer"></i> mdi mdi-tumble-dryer
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tumble-dryer-alert"></i> mdi mdi-tumble-dryer-alert
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tune"></i> mdi mdi-tune
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-tune-vertical"></i> mdi mdi-tune-vertical
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-twitch"></i> mdi mdi-twitch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-twitter"></i> mdi mdi-twitter
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-twitter-retweet"></i> mdi mdi-twitter-retweet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ubuntu"></i> mdi mdi-ubuntu
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-umbraco"></i> mdi mdi-umbraco
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-umbrella"></i> mdi mdi-umbrella
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-umbrella-outline"></i> mdi mdi-umbrella-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-undo"></i> mdi mdi-undo
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-undo-variant"></i> mdi mdi-undo-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-unfold-less-horizontal"></i> mdi mdi-unfold-less-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-unfold-more-horizontal"></i> mdi mdi-unfold-more-horizontal
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-ungroup"></i> mdi mdi-ungroup
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-untappd"></i> mdi mdi-untappd
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-upload"></i> mdi mdi-upload
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-usb"></i> mdi mdi-usb
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-arrange-above"></i> mdi mdi-vector-arrange-above
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-arrange-below "></i> mdi mdi-vector-arrange-below
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-circle"></i> mdi mdi-vector-circle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-circle-variant"></i> mdi mdi-vector-circle-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-combine"></i> mdi mdi-vector-combine
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-curve"></i> mdi mdi-vector-curve
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-difference"></i> mdi mdi-vector-difference
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-difference-ab"></i> mdi mdi-vector-difference-ab
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-difference-ba"></i> mdi mdi-vector-difference-ba
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-intersection"></i> mdi mdi-vector-intersection
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-line"></i> mdi mdi-vector-line
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-point"></i> mdi mdi-vector-point
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-polygon"></i> mdi mdi-vector-polygon
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-polyline "></i> mdi mdi-vector-polyline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-rectangle"></i> mdi mdi-vector-rectangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-selection "></i> mdi mdi-vector-selection
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-square"></i> mdi mdi-vector-square
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-triangle"></i> mdi mdi-vector-triangle
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vector-union"></i> mdi mdi-vector-union
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vibrate "></i> mdi mdi-vibrate
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-video"></i> mdi mdi-video
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-video-off"></i> mdi mdi-video-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-video-switch"></i> mdi mdi-video-switch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-agenda"></i> mdi mdi-view-agenda
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-array"></i> mdi mdi-view-array
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-carousel"></i> mdi mdi-view-carousel
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-column"></i> mdi mdi-view-column
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-dashboard"></i> mdi mdi-view-dashboard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-day"></i> mdi mdi-view-day
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-grid"></i> mdi mdi-view-grid
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-headline"></i> mdi mdi-view-headline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-list"></i> mdi mdi-view-list
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-module"></i> mdi mdi-view-module
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-quilt"></i> mdi mdi-view-quilt
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-stream"></i> mdi mdi-view-stream
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-view-week"></i> mdi mdi-view-week
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vimeo "></i> mdi mdi-vimeo
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-violin"></i> mdi mdi-violin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-virus"></i> mdi mdi-virus
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vk"></i> mdi mdi-vk
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vlc"></i> mdi mdi-vlc
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-voice-off"></i> mdi mdi-voice-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-voicemail"></i> mdi mdi-voicemail
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-volume-high"></i> mdi mdi-volume-high
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-volume-low"></i> mdi mdi-volume-low
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-volume-medium"></i> mdi mdi-volume-medium
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-volume-off"></i> mdi mdi-volume-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-vpn"></i> mdi mdi-vpn
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-walk"></i> mdi mdi-walk
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wallet"></i> mdi mdi-wallet
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wallet-giftcard"></i> mdi mdi-wallet-giftcard
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wallet-membership"></i> mdi mdi-wallet-membership
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wallet-travel"></i> mdi mdi-wallet-travel
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wan"></i> mdi mdi-wan
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-watch"></i> mdi mdi-watch
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-watch-export"></i> mdi mdi-watch-export
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-watch-import"></i> mdi mdi-watch-import
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-water"></i> mdi mdi-water
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-water-off"></i> mdi mdi-water-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-water-percent"></i> mdi mdi-water-percent
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-water-pump"></i> mdi mdi-water-pump
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-watermark"></i> mdi mdi-watermark
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-cloudy"></i> mdi mdi-weather-cloudy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-fog"></i> mdi mdi-weather-fog
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-hail"></i> mdi mdi-weather-hail
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-lightning"></i> mdi mdi-weather-lightning
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-night"></i> mdi mdi-weather-night
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-partly-cloudy"></i> mdi mdi-weather-partly-cloudy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-pouring"></i> mdi mdi-weather-pouring
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-rainy"></i> mdi mdi-weather-rainy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-snowy"></i> mdi mdi-weather-snowy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-sunny"></i> mdi mdi-weather-sunny
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-sunset "></i> mdi mdi-weather-sunset
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-sunset-down"></i> mdi mdi-weather-sunset-down
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-sunset-up"></i> mdi mdi-weather-sunset-up
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-windy"></i> mdi mdi-weather-windy
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weather-windy-variant"></i> mdi mdi-weather-windy-variant
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-web"></i> mdi mdi-web
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-webcam"></i> mdi mdi-webcam
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-webhook"></i> mdi mdi-webhook
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wechat"></i> mdi mdi-wechat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weight"></i> mdi mdi-weight
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-weight-kilogram"></i> mdi mdi-weight-kilogrammdi-whatsapp
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-whatsapp"></i> mdi mdi-whatsapp
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wheelchair-accessibility "></i> mdi mdi-wheelchair-accessibility
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-white-balance-auto"></i> mdi mdi-white-balance-auto
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-white-balance-incandescent "></i> mdi mdi-white-balance-incandescent
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-white-balance-iridescent"></i> mdi mdi-white-balance-iridescent
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-white-balance-sunny"></i> mdi mdi-white-balance-sunny
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wifi"></i> mdi mdi-wifi
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wifi-off"></i> mdi mdi-wifi-off
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wifi-strength-1"></i> mdi mdi-wifi-strength-1
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wikipedia"></i> mdi mdi-wikipedia
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-window-close"></i> mdi mdi-window-close
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-window-closed"></i> mdi mdi-window-closed
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-window-maximize"></i> mdi mdi-window-maximize
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-window-minimize"></i> mdi mdi-window-minimize
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-window-open"></i> mdi mdi-window-open
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-window-restore"></i> mdi mdi-window-restore
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wizard-hat"></i> mdi mdi-wizard-hat
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wordpress"></i> mdi mdi-wordpress
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wrap "></i> mdi mdi-wrap
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wrench"></i> mdi mdi-wrench
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-wrench-outline"></i> mdi mdi-wrench-outline
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-xamarin"></i> mdi mdi-xamarin
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-xing"></i> mdi mdi-xing
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-xml"></i> mdi mdi-xml
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-yeast"></i> mdi mdi-yeast
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-yin-yang"></i> mdi mdi-yin-yang
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-youtube"></i> mdi mdi-youtube
                                        </div>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <i class="mdi mdi-zip-box"></i> mdi mdi-zip-box
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>

			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com/" target="_blank">NobleUI</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo base_url ('assets/vendors/core/core.js'); ?>"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="<?php echo base_url ('assets/vendors/feather-icons/feather.min.js'); ?>"></script>
	<script src="<?php echo base_url ('assets/js/template.js'); ?>"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  
	<!-- End custom js for this page -->

</body>

<!-- Mirrored from www.nobleui.com/html/template/demo1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 11:55:43 GMT -->
</html>    