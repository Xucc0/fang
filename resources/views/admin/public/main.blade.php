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
    @yield('css')
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
                            <a href="{{ route('admin.profile') }}" role="button" tabindex="0">
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
                            <a href="{{ route('admin.logout') }}" role="button" tabindex="0">
                                <i class="fa fa-sign-out"></i>Logout</a>
                        </li>
                    </ul>
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
                                    @foreach($routeDatas as $val)
                                    <li>
                                        <a role="button" tabindex="0">
                                            <i class="fa fa-envelope"></i>
                                            <span>{{ $val['name'] }}</span>
                                        </a>
                                        <ul>
                                            @foreach($val['sub'] as $v)
                                            <li>
                                                <a href="{{ route($v['route_name']) }}">
                                                    <i class="fa fa-angle-right"></i> {{ $v['name'] }}
                                                </a>
                                            </li>
                                                @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>

                            <!--/ NAVIGATION Content -->
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
        @yield('cnt')

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


@yield('js')
</body>
</html>
