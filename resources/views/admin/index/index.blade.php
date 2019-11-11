<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>好客租房</title>
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ staticPath() }}assets/js/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ staticPath() }}assets/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="{{ staticPath() }}assets/js/vendor/morris/morris.css">
    <!-- project main css files -->
    <link rel="stylesheet" href="{{ staticPath() }}assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
<div id="wrap" class="animsition">
    <!-- HEADER Content -->
    <div id="header">
        <header class="clearfix">
            <!-- Branding -->
            <div class="branding">
                <a class="brand" href="index.html">
                    <span>Falcon</span>
                </a>
                <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!-- Branding end -->

            <!-- Left-side navigation -->
            <ul class="nav-left pull-left list-unstyled list-inline">
                <li class="leftmenu-collapse">
                    <a role="button" tabindex="0" class="collapse-leftmenu">
                        <i class="fa fa-outdent"></i>
                    </a>
                </li>
                <li class="dropdown leftmenu-collapse">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-plus mr-5"></i>New
                    </a>
                    <div class="dropdown-menu pull-left panel panel-default" role="menu">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">New Campaign</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-area-chart"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">Generate Report</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">Add New User</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" class="media">
                                        <span class="pull-left media-object">
                                            <i class="fa fa-file-text"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">Create Page</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- Left-side navigation end -->
            <div class="search" id="main-search">
                <input type="text" class="form-control underline-input" placeholder="Explore Falcon...">
            </div>
            <!-- Search end -->

            <!-- Right-side navigation -->
            <ul class="nav-right pull-right list-inline">
                <li class="dropdown users">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-th"></i>
                    </a>
                    <div class="dropdown-menu pull-right panel panel-default" role="menu">
                        <ul class="app-sortcut">
                            <li>
                                <a href="#" class="connection-item">
                                    <i class="fa fa-umbrella"></i>
                                    <span class="block">Weather</span>
                                </a>
                            </li>
                            <li>
                                <a href="ui-widgets.html" class="connection-item">
                                    <i class="fa fa-object-ungroup"></i>
                                    <span class="block">Widget</span>
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html" class="connection-item">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span class="block">calendar</span>
                                </a>
                            </li>
                            <li>
                                <a href="maps-google.html" class="connection-item">
                                    <i class="fa fa-map-o"></i>
                                    <span class="block">map</span>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html" class="connection-item">
                                    <i class="fa fa-comments-o"></i>
                                    <span class="block">chat</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="connection-item">
                                    <i class="fa fa-book"></i>
                                    <span class="block">contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown messages">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <div class="notify">
                            <span class="heartbit"></span>
                            <span class="point"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu pull-right panel panel-default" role="menu">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object thumb thumb-sm">
                                            <img src="{{ staticPath() }}assets/images/pi-avatar.jpg" alt="" > </span>
                                    <div class="media-body">
                                        <span class="block">Lucas sent you a message</span>
                                        <small class="text-muted">9 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                            <img src="{{ staticPath() }}assets/images/Jane-avatar.jpg" alt="" > </span>
                                    <div class="media-body">
                                        <span class="block">Jane sent you a message</span>
                                        <small class="text-muted">27 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                            <img src="{{ staticPath() }}assets/images/random-avatar1.jpg" alt="" > </span>
                                    <div class="media-body">
                                        <span class="block">Lee sent you a message</span>
                                        <small class="text-muted">2 hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object  thumb thumb-sm">
                                            <img src="{{ staticPath() }}assets/images/random-avatar3.jpg" alt="" > </span>
                                    <div class="media-body">
                                        <span class="block">Rihtik sent you a message</span>
                                        <small class="text-muted">8 hours ago</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="panel-footer">
                            <a role="button" tabindex="0">Show all messages
                                <i class="pull-right fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown notifications">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <div class="notify">
                            <span class="heartbit"></span>
                            <span class="point"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu pull-right panel panel-default">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-ban"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">User Lucas cancelled account</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-spotify"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">2 voice mails</span>
                                        <small class="text-muted">Neque porro quisquam est</small>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a role="button" tabindex="0" class="media">
                                        <span class="pull-left media-object media-icon">
                                            <i class="fa fa-whatsapp"></i>
                                        </span>
                                    <div class="media-body">
                                        <span class="block">8 voice messanger</span>
                                        <small class="text-muted">8 texts</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="panel-footer">
                            <a role="button" tabindex="0">Show all notifications
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="dropdown nav-profile">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ staticPath() }}assets/images/profile-photo.jpg" alt="" class="0 size-30x30"> </a>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <li>
                            <div class="user-info">
                                <div class="user-name">Alexander</div>
                                <div class="user-position online">Available</div>
                            </div>
                        </li>
                        <li>
                            <a href="profile.html" role="button" tabindex="0">
                                <span class="label label-success pull-right">80%</span>
                                <i class="fa fa-user"></i>Profile</a>
                        </li>
                        <li>
                            <a role="button" tabindex="0">
                                <span class="label label-info pull-right">new</span>
                                <i class="fa fa-check"></i>Tasks</a>
                        </li>
                        <li>
                            <a role="button" tabindex="0">
                                <i class="fa fa-cog"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="locked.html" role="button" tabindex="0">
                                <i class="fa fa-lock"></i>Lock</a>
                        </li>
                        <li>
                            <a href="login.html" role="button" tabindex="0">
                                <i class="fa fa-sign-out"></i>Logout</a>
                        </li>
                    </ul>
                </li>
                <li class="toggle-right-leftmenu">
                    <a role="button" tabindex="0">
                        <i class="fa fa-align-left"></i>
                    </a>
                </li>
            </ul>
            <!-- Right-side navigation end -->
        </header>
    </div>
    <!--/ HEADER Content  -->
    <div id="controls">
        <aside id="leftmenu">
            <div id="leftmenu-wrap">
                <div class="panel-group slim-scroll" role="tablist">
                    <div class="panel panel-default">
                        <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <!--  NAVIGATION Content -->
                                <ul id="navigation">
                                    <li class="active open">
                                        <a href="index.html">
                                            <i class="fa fa-dashboard"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-envelope"></i>
                                            <span>Mail Box</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="mail-inbox.html">
                                                    <i class="fa fa-angle-right"></i> Inbox
                                                    <span class="label label-success">new</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mail-compose.html">
                                                    <i class="fa fa-angle-right"></i> Compose Mail</a>
                                            </li>
                                            <li>
                                                <a href="mail-single.html">
                                                    <i class="fa fa-angle-right"></i> Single Mail</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="material.html">
                                            <i class="fa fa-arrow-right"></i>
                                            <span>Material UI</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-list"></i>
                                            <span>Form Elements</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="form-common.html">
                                                    <i class="fa fa-angle-right"></i> Common Elements</a>
                                            </li>
                                            <li>
                                                <a href="form-validate.html">
                                                    <i class="fa fa-angle-right"></i>Validation Elements</a>
                                            </li>
                                            <li>
                                                <a href="form-wizard.html">
                                                    <i class="fa fa-angle-right"></i>Form Wizard
                                                    <span class="badge br-10 badge-success">13</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="form-upload.html">
                                                    <i class="fa fa-angle-right"></i>File Upload</a>
                                            </li>
                                            <li>
                                                <a href="form-imgcrop.html">
                                                    <i class="fa fa-angle-right"></i>Image Crop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-leaf"></i>
                                            <span>Falcon UI</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="ui-general.html">
                                                    <i class="fa fa-angle-right"></i>General Elements</a>
                                            </li>
                                            <li>
                                                <a href="ui-navigation.html">
                                                    <i class="fa fa-angle-right"></i>Nav & Accordions</a>
                                            </li>
                                            <li>
                                                <a href="ui-widgets.html">
                                                    <i class="fa fa-angle-right"></i>Widgets</a>
                                            </li>
                                            <li>
                                                <a href="ui-lists.html">
                                                    <i class="fa fa-angle-right"></i>Lists</a>
                                            </li>
                                            <li>
                                                <a href="ui-modals.html">
                                                    <i class="fa fa-angle-right"></i>Modals</a>
                                            </li>
                                            <li>
                                                <a href="ui-icons.html">
                                                    <i class="fa fa-angle-right"></i>Icons</a>
                                            </li>
                                            <li>
                                                <a href="ui-typography.html">
                                                    <i class="fa fa-angle-right"></i>Typography</a>
                                            </li>
                                            <li>
                                                <a href="ui-boxss.html">
                                                    <i class="fa fa-angle-right"></i>boxss</a>
                                            </li>
                                            <li>
                                                <a href="ui-portlets.html">
                                                    <i class="fa fa-angle-right"></i>Portlets</a>
                                            </li>
                                            <li>
                                                <a href="ui-grid.html">
                                                    <i class="fa fa-angle-right"></i>Grid</a>
                                            </li>
                                            <li>
                                                <a href="ui-alerts.html">
                                                    <i class="fa fa-angle-right"></i>Alerts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="charts.html">
                                            <i class="fa fa-bar-chart-o"></i>
                                            <span>Charts</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-delicious"></i>
                                            <span>Layouts Format</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="layout-boxed.html">
                                                    <i class="fa fa-angle-right"></i>Boxed layout</a>
                                            </li>
                                            <li>
                                                <a href="layout-fullwidth.html">
                                                    <i class="fa fa-angle-right"></i>Full-width layout
                                                    <span class="label  label-success">new</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layout-offcanvas.html">
                                                    <i class="fa fa-angle-right"></i>Off-canvas leftmenu</a>
                                            </li>
                                            <li>
                                                <a href="layout-rtl.html">
                                                    <i class="fa fa-angle-right"></i>RTL layout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-table"></i>
                                            <span>Tables</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="tables-bootstrap.html">
                                                    <i class="fa fa-angle-right"></i>Bootstrap Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-static.html">
                                                    <i class="fa fa-angle-right"></i>Static Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-footable.html">
                                                    <i class="fa fa-angle-right"></i>FooTable</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-map-o"></i>
                                            <span>Maps</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="maps-vector.html">
                                                    <i class="fa fa-angle-right"></i>Vector Maps</a>
                                            </li>
                                            <li>
                                                <a href="maps-google.html">
                                                    <i class="fa fa-angle-right"></i>Google Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-lock"></i>
                                            <span>Authentication</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="login.html">
                                                    <i class="fa fa-angle-right"></i>Login Page</a>
                                            </li>
                                            <li>
                                                <a href="signup.html">
                                                    <i class="fa fa-angle-right"></i>Signup Page</a>
                                            </li>
                                            <li>
                                                <a href="forgotpass.html">
                                                    <i class="fa fa-angle-right"></i>Forgot Password</a>
                                            </li>
                                            <li>
                                                <a href="page-offline.html">
                                                    <i class="fa fa-angle-right"></i>Page Offline</a>
                                            </li>
                                            <li>
                                                <a href="locked.html">
                                                    <i class="fa fa-angle-right"></i>Locked Screen</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-desktop"></i>
                                            <span>Extra Pages</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="page404.html">
                                                    <i class="fa fa-angle-right"></i>Page 404</a>
                                            </li>
                                            <li>
                                                <a href="page500.html">
                                                    <i class="fa fa-angle-right"></i>Page 500</a>
                                            </li>
                                            <li>
                                                <a href="gallery.html">
                                                    <i class="fa fa-angle-right"></i>Gallery</a>
                                            </li>
                                            <li>
                                                <a href="timeline.html">
                                                    <i class="fa fa-angle-right"></i>Timeline</a>
                                            </li>
                                            <li>
                                                <a href="chat.html">
                                                    <i class="fa fa-angle-right"></i>Chat</a>
                                            </li>
                                            <li>
                                                <a href="invoices.html">
                                                    <i class="fa fa-angle-right"></i>Invoices</a>
                                            </li>
                                            <li>
                                                <a href="search-results.html">
                                                    <i class="fa fa-angle-right"></i>   Search Results</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="profile.html">
                                            <i class="fa fa-user"></i>
                                            <span>User Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="calendar.html">
                                            <i class="fa fa-calendar-check-o"></i>
                                            <span>Calendar</span>
                                            <span class="label label-primary">new events</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-magic"></i>
                                            <span>Menu Levels</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a role="button" tabindex="0">
                                                    <i class="fa fa-angle-right"></i> Menu Level 1.1</a>
                                                <ul>
                                                    <li>
                                                        <a role="button" tabindex="0">
                                                            <i class="fa fa-angle-right"></i> Menu Level 2.1</a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0">
                                                            <i class="fa fa-angle-right"></i> Menu Level 2.2</a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0">
                                                            <i class="fa fa-angle-right"></i> Menu Level 2.3</a>
                                                        <ul>
                                                            <li>
                                                                <a role="button" tabindex="0">
                                                                    <i class="fa fa-angle-right"></i> Menu Level 3.1</a>
                                                            </li>
                                                            <li>
                                                                <a role="button" tabindex="0">
                                                                    <i class="fa fa-angle-right"></i> Menu Level 3.2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0">
                                                    <i class="fa fa-angle-right"></i> Menu Level 1.2</a>
                                                <ul>
                                                    <li>
                                                        <a role="button" tabindex="0">
                                                            <i class="fa fa-angle-right"></i> Menu Level 2.1</a>
                                                        <ul>
                                                            <li>
                                                                <a role="button" tabindex="0">
                                                                    <i class="fa fa-angle-right"></i> Menu Level 3.1</a>
                                                            </li>
                                                            <li>
                                                                <a role="button" tabindex="0">
                                                                    <i class="fa fa-angle-right"></i> Menu Level 3.2</a>
                                                                <ul>
                                                                    <li>
                                                                        <a role="button" tabindex="0">
                                                                            <i class="fa fa-angle-right"></i> Menu Level 4.1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a role="button" tabindex="0">
                                                                            <i class="fa fa-angle-right"></i> Menu Level 4.2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a role="button" tabindex="0">
                                                                    <i class="fa fa-angle-right"></i> Menu Level 3.3</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0">
                                                            <i class="fa fa-angle-right"></i> Menu Level 2.2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!--/ NAVIGATION Content -->
                            </div>
                        </div>
                    </div>
                    <div class="panel settings panel-default">
                        <div class="panel-heading" role="tab">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#leftmenuControls">General Settings
                                    <i class="fa fa-angle-up"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="leftmenuControls" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-xs-8">Switch ON</label>
                                        <div class="col-xs-4 control-label">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox" checked="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-xs-8">Switch OFF</label>
                                        <div class="col-xs-4 control-label">
                                            <div class="togglebutton">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="milestone-sidbar">
                            <div class="text-center-folded">
                                <span class="pull-right pull-none-folded">60%</span>
                                <span class="hidden-folded">Milestone</span>
                            </div>
                            <div class="progress progress-xxs m-t-sm dk">
                                <div class="progress-bar progress-bar-info" style="width: 60%;"> </div>
                            </div>
                            <div class="text-center-folded">
                                <span class="pull-right pull-none-folded">35%</span>
                                <span class="hidden-folded">Release</span>
                            </div>
                            <div class="progress progress-xxs m-t-sm dk">
                                <div class="progress-bar progress-bar-primary" style="width: 35%;"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <aside id="rightmenu">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">Chat</a>
                    </li>
                    <li role="presentation">
                        <a href="#todo" aria-controls="todo" role="tab" data-toggle="tab">Todo</a>
                    </li>
                    <li role="presentation">
                        <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="chat">
                        <div class="search">
                            <div class="form-group is-empty">
                                <input type="text" class="form-control underline-input" placeholder="Search...">
                                <span class="material-input"></span>
                            </div>
                        </div>
                        <h6>Recent</h6>
                        <ul>
                            <li class="online">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar1.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <span class="name">Claire Sassu</span>
                                        <span class="message"> If you are going to use a passage of Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar8.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name">Maggie jackson</span>
                                            <span class="message">All the Lorem Ipsum generators on the Internet</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar3.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name">Joel King</span>
                                            <span class="message">The standard chunk of Lorem Ipsum used</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar6.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name">Isabella</span>
                                            <span class="message">There are many variations of passages of Lorem</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar5.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name">Alexander</span>
                                            <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h6>Contacts</h6>
                        <ul>
                            <li class="offline">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar5.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name mt-5">Matthew</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="offline">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar4.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name mt-5">Aaliyah</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="offline">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar8.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name mt-5">Arianna</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="online">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar9.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name mt-5">Scarlett</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="offline">
                                <div class="media">
                                    <a class="pull-left thumb thumb-sm" role="button">
                                        <img class="media-object " src="{{ staticPath() }}assets/images/xs/avatar10.jpg" alt=""> </a>
                                    <div class="media-body">
                                        <div class="media-body">
                                            <span class="name mt-5">David</span>
                                            <span class="badge badge-outline status"></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="todo">
                        <div class="form-group">
                            <input type="text" value="" placeholder="Create new task..." class="form-control" />
                            <span class="fa fa-plus"></span>
                        </div>
                        <h6>Today</h6>
                        <ul class="todo-list">
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                </div>
                            </li>
                        </ul>
                        <h6>Tomorrow</h6>
                        <ul class="todo-list">
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> Initialize the project</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> Create the main structure</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes"> displayed in a normal space!</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="settings">
                        <h6>Chat Settings</h6>
                        <ul class="settings">
                            <li>
                                <div class="form-group">
                                    <label class="col-xs-8 control-label">Show Offline Users</label>
                                    <div class="col-xs-4 control-label text-right">
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox" checked="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="col-xs-8 control-label">Show Fullname</label>
                                    <div class="col-xs-4 control-label text-right">
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="col-xs-8 control-label">History Enable</label>
                                    <div class="col-xs-4 control-label text-right">
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox" checked="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="col-xs-8 control-label">Show Locations</label>
                                    <div class="col-xs-4 control-label text-right">
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox" checked="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="col-xs-8 control-label">Notifications</label>
                                    <div class="col-xs-4 control-label text-right">
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group">
                                    <label class="col-xs-8 control-label">Show Undread Count</label>
                                    <div class="col-xs-4 control-label text-right">
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!-- CONTENT -->
    <section id="content">
        <div class="page dashboard-page">
            <!-- bradcome -->
            <div class="b-b mb-20">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0">Dashboard</h1>
                        <small class="text-muted">Welcome to Falcon application</small>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-blue">
                        <div class="boxs-body">
                            <h3 class="mt-0">52.3 Gb</h3>
                            <p>Traffic this month</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7 </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-parpl">
                        <div class="boxs-body">
                            <h3 class="mt-0">31.8%</h3>
                            <p>Server Load</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 6,5,7,4,5,3,8,6,5 </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-seagreen">
                        <div class="boxs-body">
                            <h3 class="mt-0">$ 21,501</h3>
                            <p>Total Sale</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 8,7,7,5,5,4,8,7,5 </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                    <div class="boxs top_report_chart l-amber">
                        <div class="boxs-body">
                            <h3 class="mt-0">1,195</h3>
                            <p>Total Feedbacks</p>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                             data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                             data-fill-Color="rgba(255, 255, 255, 0.3)"> 7,6,7,8,5,9,8,6,7 </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Vendor JavaScripts -->
<script src="{{ staticPath() }}assets/bundles/libscripts.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/vendorscripts.bundle.js"></script>

<!--/ vendor javascripts -->
<script src="{{ staticPath() }}assets/bundles/flotscripts.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/d3cripts.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/sparkline.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/raphael.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/morris.bundle.js"></script>
<script src="{{ staticPath() }}assets/bundles/loadercripts.bundle.js"></script>

<!-- page Js -->
<script src="{{ staticPath() }}assets/bundles/mainscripts.bundle.js"></script>
<script src="{{ staticPath() }}assets/js/page/index.js"></script>
</body>
</html>