<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
    <link rel="preconnect" href="<?php echo base_url('https://fonts.googleapis.com/'); ?>">
    <link rel="preconnect" href="<?php echo base_url('https://fonts.gstatic.com/" crossorigin'); ?>">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap'); ?>" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/core/core.css'); ?>">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flatpickr/flatpickr.min.css'); ?>">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/feather-font/css/iconfont.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/demo1/style.min.css'); ?>">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="<?php echo base_url(); ?>" class="sidebar-brand">
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
                        <a href="<?php echo base_url(); ?>" class="nav-link">
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
                                    <a href="<?php echo base_url('latihan/formdatauser'); ?>" class="nav-link">Form & Data User</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/blankpage'); ?>" class="nav-link">Latihan 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/blankpage'); ?>" class="nav-link">Latihan 3</a>
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
                                    <a href="<?php echo base_url('email/inbox'); ?>" class="nav-link">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('email/read'); ?>" class="nav-link">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('email/compose'); ?>" class="nav-link">Compose</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('apps/chat'); ?>" class="nav-link">
                            <i class="link-icon" data-feather="message-square"></i>
                            <span class="link-title">Chat</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('apps/calendar'); ?>" class="nav-link">
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
                                    <a href="<?php echo base_url('uicomponents/accordion'); ?>" class="nav-link">Accordion</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/alerts'); ?>" class="nav-link">Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/badges'); ?>" class="nav-link">Badges</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/breadcrumbs'); ?>" class="nav-link">Breadcrumbs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/buttons'); ?>" class="nav-link">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/buttongroup'); ?>" class="nav-link">Button group</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/cards'); ?>" class="nav-link">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/carousel'); ?>" class="nav-link">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/collapse'); ?>" class="nav-link">Collapse</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/dropdowns'); ?>" class="nav-link">Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/listgroup'); ?>" class="nav-link">List group</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/mediaobject'); ?>" class="nav-link">Media object</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/modal'); ?>" class="nav-link">Modal</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/navs'); ?>" class="nav-link">Navs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/navbar'); ?>" class="nav-link">Navbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/pagination'); ?>" class="nav-link">Pagination</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/popover'); ?>" class="nav-link">Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/progress'); ?>" class="nav-link">Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/scrollbar'); ?>" class="nav-link">Scrollbar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/scrollspy'); ?>" class="nav-link">Scrollspy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/spinners'); ?>" class="nav-link">Spinners</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/tabs'); ?>" class="nav-link">Tabs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('uicomponents/tooltips'); ?>" class="nav-link">Tooltips</a>
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
                                    <a href="<?php echo base_url('advancedui/cropper'); ?>" class="nav-link">Cropper</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('advancedui/owlcarousel'); ?>" class="nav-link">Owl carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('advancedui/sortablejs'); ?>" class="nav-link">SortableJs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('advancedui/sweetalert'); ?>" class="nav-link">Sweet Alert</a>
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
                                    <a href="<?php echo base_url('forms/basicelements'); ?>" class="nav-link">Basic Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('forms/advancedelements'); ?>" class="nav-link">Advanced Elements</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('forms/editors'); ?>" class="nav-link">Editors</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('forms/wizard'); ?>" class="nav-link">Wizard</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#charts" role="button" aria-expanded="false" aria-controls="charts">
                            <i class="link-icon" data-feather="pie-chart"></i>
                            <span class="link-title">Charts</span>
                            <i class="link-arrow" data-feather="chevron-down"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('charts/apex'); ?>" class="nav-link">Apex</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('charts/chartjs'); ?>" class="nav-link">ChartJs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('charts/flot'); ?>" class="nav-link">Flot</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('charts/peity'); ?>" class="nav-link">Peity</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('charts/sparkline'); ?>" class="nav-link">Sparkline</a>
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
                                    <a href="<?php echo base_url('tables/basictable'); ?>" class="nav-link">Basic Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('tables/datatable'); ?>" class="nav-link">Data Table</a>
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
                                    <a href="<?php echo base_url('icons/feathericons'); ?>" class="nav-link">Feather Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('icons/flagicons'); ?>" class="nav-link">Flag Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('icons/mdiicons'); ?>" class="nav-link">Mdi Icons</a>
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
                                    <a href="<?php echo base_url('general/blankpage'); ?>" class="nav-link">Blank page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/faq'); ?>" class="nav-link">Faq</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/invoice'); ?>" class="nav-link">Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/profile'); ?>" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/pricing'); ?>" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('general/timeline'); ?>" class="nav-link">Timeline</a>
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
                                    <a href="<?php echo base_url('auth/login'); ?>" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('auth/register'); ?>" class="nav-link">Register</a>
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
                                    <a href="<?php echo base_url('error404'); ?>" class="nav-link">404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('error500'); ?>" class="nav-link">500</a>
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
                        <img src="<?php echo base_url('assets/images/screenshots/light.jpg'); ?>" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item" href="https://www.nobleui.com/html/template/demo2/dashboard.html">
                        <img src="<?php echo base_url('assets/images/screenshots/dark.jpg'); ?>" alt="light theme">
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
                                        <a href="apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Chat</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="<?php echo base_url('apps/calendar.html'); ?>" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Calendar</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Email</p>
                                        </a>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i>
                                            <p class="tx-12">Profile</p>
                                        </a>
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
                                            <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face2.jpg'); ?>" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face3.jpg'); ?>" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face4.jpg'); ?>" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face5.jpg'); ?>" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face6.jpg'); ?>" alt="userr">
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
                                            <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face6.jpg'); ?>" alt="userr">
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
                                <img class="wd-30 ht-30 rounded-circle" src="<?php echo base_url('assets/images/faces/face1.jpg'); ?>" alt="profile">
                            </a>
                            <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                                <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                                    <div class="mb-3">
                                        <img class="wd-80 ht-80 rounded-circle" src="<?php echo base_url('assets/images/faces/face1.jpg'); ?>" alt="">
                                    </div>
                                    <div class="text-center">
                                        <p class="tx-16 fw-bolder">Amiah Burton</p>
                                        <p class="tx-12 text-muted">amiahburton@gmail.com</p>
                                    </div>
                                </div>
                                <ul class="list-unstyled p-1">
                                    <li class="dropdown-item py-2">
                                        <a href="<?php echo base_url('general/profile'); ?>" class="text-body ms-0">
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
                <div>
                    <h4 class="mb-3 mb-md-3">Data User</h4>
                </div>
                <!-- Card -->
                <div class="mb-12 card">
                    <label class="form-label mx-4 mt-3 ">Filter Status</label>
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <select class="form-select mx-4 mb-3">
                                <option selected>Pilih</option>
                                <option value="1">Active</option>
                                <option value="2">Non Active</option>
                            </select>
                        </div>

                        <!-- Button trigger modal -->
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary mb-3 mx-6 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i data-feather="plus-circle"></i> New User
                            </button>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form User</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                                </div>
                                <!-- Isi Modal -->
                                <div class="modal-body">
                                    <form class="forms-sample">

                                        <div class="row justify-content-between mt-3">
                                            <div class="col-auto">
                                                <div class="mb-3">
                                                    <label for="exampleInputUsername1" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <label for="exampleInputStatus1" class="form-label">Status</label>
                                                <select class="form-select mb-3">
                                                    <option selected>Pilih</option>
                                                    <option value="1">Active</option>
                                                    <option value="2">Non Active</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row justify-content-between mt-3">
                                            <div class="col-auto">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="mb-3">
                                                    <label for="exampleInputDate1" class="form-label" id="exampleDate1" autocomplete="off" placeholder="Birth Date">Birth Date</label> <br>
                                                    <input type="date">
                                                </div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="mb-3 mt-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!-- Akhir isi modal -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        <i data-feather="slash"></i>
                                        Cancel</button>
                                    <button type="button" class="btn btn-primary">
                                        <i data-feather="save"></i>
                                        Save</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- table user -->

                    <div class="table-responsive mx-4">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Giacommo Guilizzani <br> Founder & CEO</td>
                                    <td>Jogja</td>
                                    <td>Active</td>
                                    <td><i data-feather="disc"></i></td>
                                </tr>
                                <tr>
                                    <td>Marco Button <br> Tuttifare</td>
                                    <td>Semarang</td>
                                    <td>Active</td>
                                    <td><i data-feather="check-square"></i></td>
                                </tr>
                                <tr>
                                    <td>Mariah Maclachlan <br> Better Half</td>
                                    <td>Tegal</td>
                                    <td>Active</td>
                                    <td><i data-feather="minus-square"></i></td>
                                </tr>
                                <tr>
                                    <td>Valerie Liberty <br> Head Chef </td>
                                    <td>Kudus</td>
                                    <td>Non Active</td>
                                    <td><i data-feather="check-square"></i></td>
                                </tr>
                            </tbody>
                        </table>
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
    <script src="<?php echo base_url('assets/vendors/core/core.js'); ?>"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('assets/vendors/flatpickr/flatpickr.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/apexcharts/apexcharts.min.js'); ?>"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="<?php echo base_url('assets/vendors/feather-icons/feather.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/template.js'); ?>"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="<?php echo base_url('assets/js/dashboard-light.js'); ?>"></script>
    <!-- End custom js for this page -->

</body>

<!-- Mirrored from www.nobleui.com/html/template/demo1/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2023 11:55:43 GMT -->

</html>