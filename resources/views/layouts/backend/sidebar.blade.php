<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part"><a class="logo" href="{{ url('/admin') }}"><b><!--This is dark logo icon--><img src="{!! url('public/admin') !!}/plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{!! url('public/admin') !!}/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="{!! url('public/admin') !!}/plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{!! url('public/admin') !!}/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
            <li>
                <form role="search" class="app-search hidden-xs">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">You have 4 new messages</div>
                    </li>
                    <li>
                        <div class="message-center"> <a href="#">
                                <div class="user-img"> <img src="{!! url('public/admin') !!}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                            </a> <a href="#">
                                <div class="user-img"> <img src="{!! url('public/admin') !!}/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Sonu Nigam</h5>
                                    <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                            </a> <a href="#">
                                <div class="user-img"> <img src="{!! url('public/admin') !!}/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5>
                                    <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                            </a> <a href="#">
                                <div class="user-img"> <img src="{!! url('public/admin') !!}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                            </a> </div>
                    </li>
                    <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                    <li> <a href="#">
                            <div>
                                <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </a> </li>
                    <li class="divider"></li>
                    <li> <a href="#">
                            <div>
                                <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                </div>
                            </div>
                        </a> </li>
                    <li class="divider"></li>
                    <li> <a href="#">
                            <div>
                                <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                </div>
                            </div>
                        </a> </li>
                    <li class="divider"></li>
                    <li> <a href="#">
                            <div>
                                <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                </div>
                            </div>
                        </a> </li>
                    <li class="divider"></li>
                    <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <!-- .Megamenu -->
            <li class="mega-dropdown">
                <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
                <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Header Title</li>
                            <li><a href="javascript:void(0)">Link of page</a> </li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Header Title</li>
                            <li><a href="javascript:void(0)">Link of page</a> </li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Header Title</li>
                            <li><a href="javascript:void(0)">Link of page</a> </li>
                        </ul>
                    </li>
                    <li class="col-sm-3">
                        <ul>
                            <li class="dropdown-header">Header Title</li>
                            <li> <a href="javascript:void(0)">Link of page</a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- /.Megamenu -->

            <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="{!! url('public/admin') !!}/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->fullname }}<span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>

        <ul class="nav" id="side-menu">

            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li> <a href="{{ url('/admin') }}" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Home </span></a></li>
            {{--<li><a href="javascript:void(0);" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Mailbox<span class="fa arrow"></span></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li> <a href="inbox.html">Inbox</a></li>--}}
                    {{--<li> <a href="inbox-detail.html">Inbox detail</a></li>--}}
                    {{--<li> <a href="compose.html">Compose mail</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-small-cap">--- Proffessional</li>--}}
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Users<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('admin/user/create') }}">Thêm mới</a></li>
                    <li> <a href="{{ url('admin/user') }}">Danh sách</a></li>
                    {{--<li> <a href="crm-edit-leads.html">Edit Leads</a></li>--}}
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="fa fa-bars" aria-hidden="true"></i> <span class="hide-menu">Category<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('admin/cates/create') }}">Thêm mới</a></li>
                    <li> <a href="{{ url('admin/cates') }}">Danh sách</a></li>
                    {{--<li> <a href="crm-edit-leads.html">Edit Leads</a></li>--}}
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-handbag fa-fw"></i> <span class="hide-menu">Sản phẩm<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{ url('admin/product/create') }}">Thêm mới</a></li>
                    <li> <a href="{{ url('admin/product') }}crm-sales-report.html">Danh sách</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Customers<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="crm-customers.html">All Customers</a></li>
                    <li> <a href="crm-add-customers.html">Add Customers</a></li>
                    <li> <a href="crm-edit-customers.html">Edit Customers</a></li>
                </ul>
            </li>

            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-handbag fa-fw"></i> <span class="hide-menu">Vendors<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="crm-vendors.html">All Vendors</a></li>
                    <li> <a href="crm-add-vendors.html">Add Vendors</a></li>
                    <li> <a href="crm-edit-vendors.html">Edit Vendors</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-clipboard fa-fw"></i> <span class="hide-menu">Invoice<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="crm-invoice.html">All Invoice</a></li>
                    <li> <a href="crm-add-invoice.html">Add Invoice</a></li>
                    <li> <a href="crm-edit-invoice.html">Edit Invoice</a></li>
                    <li> <a href="crm-view-invoice.html">View Invoice</a></li>
                </ul>
            </li>
            <li> <a href="widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
            <li> <a href="#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="fontawesome.html">Font awesome</a> </li>
                    <li> <a href="themifyicon.html">Themify Icons</a> </li>
                    <li> <a href="simple-line.html">Simple line Icons</a> </li>
                    <li><a href="linea-icon.html">Linea Icons</a></li>
                    <li><a href="weather.html">Weather Icons</a></li>
                </ul>
            </li>
            <li><a href="{{ url('logout') }}" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
            {{--<li class="nav-small-cap">--- Extra Components</li>--}}
            {{--<li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li><a href="panels-wells.html">Panels and Wells</a></li>--}}
                    {{--<li><a href="panel-ui-block.html">Panels With BlockUI</a></li>--}}
                    {{--<li><a href="panel-draggable.html">Draggable Panel</a></li>--}}
                    {{--<li><a href="portlet-draggable.html">Draggable Portlet</a></li>--}}
                    {{--<li><a href="buttons.html">Buttons</a></li>--}}
                    {{--<li><a href="bootstrap-switch.html">Bootstrap Switch</a></li>--}}
                    {{--<li><a href="date-paginator.html">Date Paginator</a></li>--}}
                    {{--<li><a href="sweatalert.html">Sweat alert</a></li>--}}
                    {{--<li><a href="typography.html">Typography</a></li>--}}
                    {{--<li><a href="grid.html">Grid</a></li>--}}
                    {{--<li><a href="tabs.html">Tabs</a></li>--}}
                    {{--<li><a href="tab-stylish.html">Stylish Tabs</a></li>--}}
                    {{--<li><a href="modals.html">Modals</a></li>--}}
                    {{--<li><a href="progressbars.html">Progress Bars</a></li>--}}
                    {{--<li><a href="notification.html">Notifications</a></li>--}}
                    {{--<li><a href="carousel.html">Carousel</a></li>--}}
                    {{--<li><a href="list-style.html">List & Media object</a></li>--}}
                    {{--<li><a href="user-cards.html">User Cards</a></li>--}}
                    {{--<li><a href="timeline.html">Timeline</a></li>--}}
                    {{--<li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>--}}
                    {{--<li><a href="nestable.html">Nesteble</a></li>--}}
                    {{--<li><a href="range-slider.html">Range Slider</a></li>--}}
                    {{--<li><a href="ribbons.html">Ribbons</a></li>--}}
                    {{--<li><a href="steps.html">Steps</a></li>--}}
                    {{--<li><a href="session-idle-timeout.html">Session Idle Timeout</a></li>--}}
                    {{--<li><a href="session-timeout.html">Session Timeout</a></li>--}}
                    {{--<li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>--}}
                    {{--<li><a href="bootstrap.html">Bootstrap UI</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li><a href="starter-page.html">Starter Page</a></li>--}}
                    {{--<li><a href="blank.html">Blank Page</a></li>--}}
                    {{--<li><a href="javascript:void(0)" class="waves-effect">Email Templates--}}
                            {{--<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-third-level">--}}
                            {{--<li><a href="http://eliteadmin.themedesigner.in/demos/email-templates/basic.html">Basic</a></li>--}}
                            {{--<li><a href="http://eliteadmin.themedesigner.in/demos/email-templates/alert.html">Alert</a></li>--}}
                            {{--<li><a href="http://eliteadmin.themedesigner.in/demos/email-templates/billing.html">Billing</a></li>--}}
                            {{--<li><a href="http://eliteadmin.themedesigner.in/demos/email-templates/password-reset.html">Reset Pwd</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="lightbox.html">Lightbox Popup</a></li>--}}
                    {{--<li><a href="treeview.html">Treeview</a></li>--}}
                    {{--<li><a href="search-result.html">Search Result</a></li>--}}
                    {{--<li><a href="utility-classes.html">Utility Classes</a></li>--}}
                    {{--<li><a href="custom-scroll.html">Custom Scrolls</a></li>--}}
                    {{--<li><a href="login.html">Login Page</a></li>--}}
                    {{--<li><a href="login2.html">Login v2</a></li>--}}
                    {{--<li><a href="animation.html">Animations</a></li>--}}
                    {{--<li><a href="profile.html">Profile</a></li>--}}
                    {{--<li><a href="invoice.html">Invoice</a></li>--}}
                    {{--<li><a href="faq.html">FAQ</a></li>--}}
                    {{--<li><a href="gallery.html">Gallery</a></li>--}}
                    {{--<li><a href="pricing.html">Pricing</a></li>--}}
                    {{--<li><a href="register.html">Register</a></li>--}}
                    {{--<li><a href="register2.html">Register v2</a></li>--}}
                    {{--<li><a href="register3.html">3 Step Registration</a></li>--}}
                    {{--<li><a href="recoverpw.html">Recover Password</a></li>--}}
                    {{--<li><a href="lock-screen.html">Lock Screen</a></li>--}}
                    {{--<li><a href="400.html">Error 400</a></li>--}}
                    {{--<li><a href="403.html">Error 403</a></li>--}}
                    {{--<li><a href="404.html">Error 404</a></li>--}}
                    {{--<li><a href="500.html">Error 500</a></li>--}}
                    {{--<li><a href="503.html">Error 503</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li><a href="form-basic.html">Basic Forms</a></li>--}}
                    {{--<li><a href="form-layout.html">Form Layout</a></li>--}}
                    {{--<li><a href="form-advanced.html">Form Addons</a></li>--}}
                    {{--<li><a href="form-material-elements.html">Form Material</a></li>--}}
                    {{--<li><a href="form-float-input.html">Form Float Input</a></li>--}}
                    {{--<li><a href="form-upload.html">File Upload</a></li>--}}
                    {{--<li><a href="form-mask.html">Form Mask</a></li>--}}
                    {{--<li><a href="form-img-cropper.html">Image Cropping</a></li>--}}
                    {{--<li><a href="form-validation.html">Form Validation</a></li>--}}
                    {{--<li><a href="form-dropzone.html">File Dropzone</a></li>--}}
                    {{--<li><a href="form-pickers.html">Form-pickers</a></li>--}}
                    {{--<li><a href="icheck-control.html">Icheck Form Controls</a></li>--}}
                    {{--<li><a href="form-wizard.html">Form-wizards</a></li>--}}
                    {{--<li><a href="form-typehead.html">Typehead</a></li>--}}
                    {{--<li><a href="form-xeditable.html">X-editable</a></li>--}}
                    {{--<li><a href="form-summernote.html">Summernote</a></li>--}}
                    {{--<li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>--}}
                    {{--<li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li><a href="basic-table.html">Basic Tables</a></li> <li><a href="table-layouts.html">Table Layouts</a></li>--}}
                    {{--<li><a href="data-table.html">Data Table</a></li>--}}
                    {{--<li class="hidden"><a href="crud-table.html">Crud Table</a></li>--}}
                    {{--<li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>--}}
                    {{--<li><a href="responsive-tables.html">Responsive Tables</a></li>--}}
                    {{--<li><a href="editable-tables.html">Editable Tables</a></li>--}}
                    {{--<li><a href="foo-tables.html">FooTables</a></li>--}}
                    {{--<li><a href="jsgrid.html">JsGrid Tables</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="nav-small-cap">--- Support</li>--}}
            {{--<li> <a href="javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li> <a href="javascript:void(0)">Second Level Item</a> </li>--}}
                    {{--<li> <a href="javascript:void(0)">Second Level Item</a> </li>--}}
                    {{--<li> <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-third-level">--}}
                            {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                            {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                            {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                            {{--<li> <a href="javascript:void(0)">Third Level Item</a> </li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="login.html" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>--}}
            {{--<li class="hide-menu">--}}
                {{--<a href="javacript:void(0);">--}}
                    {{--<span>Progress Report</span>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-info" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>--}}
                    {{--</div>--}}
                    {{--<span>Leads Report</span>--}}
                    {{--<div class="progress">--}}
                        {{--<div class="progress-bar progress-bar-danger" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%" role="progressbar"> <span class="sr-only">85% Complete (success)</span> </div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>