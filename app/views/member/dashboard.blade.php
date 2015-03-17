<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Director | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
{{ HTML::style('core/css/bootstrap.min.css') }}
<!-- font Awesome -->
{{ HTML::style('core/css/font-awesome.min.css') }}
<!-- Ionicons -->
{{ HTML::style('core/css/ionicons.min.css') }}
<!-- Morris chart -->
{{ HTML::style('core/css/morris/morris.css') }}
<!-- jvectormap -->
{{ HTML::style('core/css/jvectormap/jquery-jvectormap-1.2.2.css' ) }}
<!-- Date Picker -->
{{ HTML::style('core/css/datepicker/datepicker3.css' ) }}
<!-- fullCalendar -->
<!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
<!-- Daterange picker -->
    {{ HTML::style('core/css/daterangepicker/daterangepicker-bs3.css' ) }}
<!-- iCheck for checkboxes and radio inputs -->
    {{ HTML::style('core/css/iCheck/all.css' ) }}
<!-- bootstrap wysihtml5 - text editor -->
<!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<!-- Theme style -->
{{ HTML::style('core/css/style.css' ) }}



<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<style type="text/css">

</style>
</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
<header class="header">
<a href="index.html" class="logo">
    Member
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-right">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope"></i>
                    <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li><!-- start message -->
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="img/26115.jpg" class="img-circle" alt="User Image"/>
                                    </div>
                                    <h4>
                                        Support Team
                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> 5 mins</small>
                                </a>
                            </li><!-- end message -->
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="img/26115.jpg" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                        Director Design Team

                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> 2 hours</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                        Developers

                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> Today</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="img/26115.jpg" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                        Sales Department

                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> Yesterday</small>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="pull-left">
                                        <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                    </div>
                                    <h4>
                                        Reviewers

                                    </h4>
                                    <p>Why not buy a new awesome theme?</p>
                                    <small class="pull-right"><i class="fa fa-clock-o"></i> 2 days</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
            </li>
            <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-tasks"></i>
                    <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 9 tasks</li>
                    <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu">
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Design some buttons
                                        <small class="pull-right">20%</small>
                                    </h3>
                                    <div class="progress progress-striped xs">
                                        <div class="progress-bar progress-bar-success" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li><!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Create a nice theme
                                        <small class="pull-right">40%</small>
                                    </h3>
                                    <div class="progress progress-striped xs">
                                        <div class="progress-bar progress-bar-danger" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li><!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Some task I need to do
                                        <small class="pull-right">60%</small>
                                    </h3>
                                    <div class="progress progress-striped xs">
                                        <div class="progress-bar progress-bar-info" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li><!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Make beautiful transitions
                                        <small class="pull-right">80%</small>
                                    </h3>
                                    <div class="progress progress-striped xs">
                                        <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li><!-- end task item -->
                        </ul>
                    </li>
                    <li class="footer">
                        <a href="#">View all tasks</a>
                    </li>
                </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i>
                    <span>Jane Doe <i class="caret"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                    <li class="dropdown-header text-center">Account</li>

                    <li>
                        <a href="#">
                            <i class="fa fa-clock-o fa-fw pull-right"></i>
                            <span class="badge badge-success pull-right">10</span> Updates</a>
                        <a href="#">
                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                            <span class="badge badge-danger pull-right">5</span> Messages</a>
                        <a href="#"><i class="fa fa-magnet fa-fw pull-right"></i>
                            <span class="badge badge-info pull-right">3</span> Subscriptions</a>
                        <a href="#"><i class="fa fa-question fa-fw pull-right"></i> <span class=
                                                                                          "badge pull-right">11</span> FAQ</a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#">
                            <i class="fa fa-user fa-fw pull-right"></i>
                            Profile
                        </a>
                        <a data-toggle="modal" href="#modal-user-settings">
                            <i class="fa fa-cog fa-fw pull-right"></i>
                            Settings
                        </a>
                    </li>

                    <li class="divider"></li>

                    <li>
                        <a href="#"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/26115.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                <span class="input-group-btn">
                                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="general.html">
                    <i class="fa fa-gavel"></i> <span>General</span>
                </a>
            </li>

            <li>
                <a href="basic_form.html">
                    <i class="fa fa-globe"></i> <span>Basic Elements</span>
                </a>
            </li>

            <li>
                <a href="simple.html">
                    <i class="fa fa-glass"></i> <span>Simple tables</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<aside class="right-side">

    <!-- Main content -->
    <section class="content">



        <!-- Main row -->
        <div class="row">

            <div class="col-md-8">


            </div>
            <div class="col-lg-4">



            </div>


        </div>
        <div class="row">

            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Student Status
                    </header>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Student's Name</th>
                                <th>email</th>
                                <th>Supervisor</th>
                                <th>Second Marker</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Facebook</td>
                                <td>Mark</td>
                                <!-- <td>Steve</td> -->
                                <td>10/10/2014</td>
                                <!-- <td>$1500</td> -->
                                <td><span class="label label-danger">in progress</span></td>
                                <td><span class="badge badge-info">50%</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Twitter</td>
                                <td>Evan</td>
                                <!-- <td>Darren</td> -->
                                <td>10/8/2014</td>
                                <!-- <td>$1500</td> -->
                                <td><span class="label label-success">completed</span></td>
                                <td><span class="badge badge-success">100%</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Google</td>
                                <td>Larry</td>
                                <!-- <td>Nick</td> -->
                                <td>10/12/2014</td>
                                <!-- <td>$2000</td> -->
                                <td><span class="label label-warning">in progress</span></td>
                                <td><span class="badge badge-warning">75%</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>LinkedIn</td>
                                <td>Allen</td>
                                <!-- <td>Rock</td> -->
                                <td>10/01/2015</td>
                                <!-- <td>$2000</td> -->
                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-info">65%</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Tumblr</td>
                                <td>David</td>
                                <!-- <td>HHH</td> -->
                                <td>01/11/2014</td>
                                <!-- <td>$2000</td> -->
                                <td><span class="label label-warning">in progress</span></td>
                                <td><span class="badge badge-danger">95%</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tesla</td>
                                <td>Musk</td>
                                <!-- <td>HHH</td> -->
                                <td>01/11/2014</td>
                                <!-- <td>$2000</td> -->
                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-success">95%</span></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tesla</td>
                                <td>Musk</td>
                                <!-- <td>HHH</td> -->
                                <td>01/11/2014</td>
                                <!-- <td>$2000</td> -->
                                <td><span class="label label-info">in progress</span></td>
                                <td><span class="badge badge-success">95%</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>


            </div><!--end col-6 -->

        </div>
        <!-- row end -->
    </section><!-- /.content -->

</aside><!-- /.right-side -->

</div><!-- ./wrapper -->

<!-- add new calendar event modal -->


<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
{{ HTML::script('core/js/jquery.min.js') }}

<!-- jQuery UI 1.10.3 -->
{{ HTML::script ('core/js/jquery-ui-1.10.3.min.js') }}
<!-- Bootstrap -->
{{ HTML::script ('core/js/bootstrap.min.js') }}
<script src="js/raphael-min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
{{ HTML::script ('core/js/plugins/morris/morris.min.js') }}
<!-- Sparkline -->
{{ HTML::script ('core/js/plugins/sparkline/jquery.sparkline.min.js') }}
<!-- jvectormap -->
{{ HTML::script ('core/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}
{{ HTML::script ('core/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}
<!-- jQuery Knob Chart -->
{{ HTML::script ('core/js/plugins/jqueryKnob/jquery.knob.js') }}
<!-- daterangepicker -->
{{ HTML::script ('core/js/plugins/daterangepicker/daterangepicker.js') }}
<!-- datepicker
{{ HTML::script ('core/js/plugins/datepicker/bootstrap-datepicker.js') }}
<!-- Bootstrap WYSIHTML5
{{ HTML::script ('core/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
<!-- iCheck -->
{{ HTML::script ('core/js/plugins/iCheck/icheck.min.js') }}
<!-- calendar -->
{{ HTML::script ('core/js/plugins/fullcalendar/fullcalendar.js') }}

<!-- Director App -->
{{ HTML::script ('core/js/Director/app.js') }}

<!-- Director dashboard demo (This is only for demo purposes) -->
{{ HTML::script ('core/js/Director/dashboard.js') }}

<!-- Director for demo purposes -->
{{ HTML::script ('core/js/Director/demo.js') }}
<script type="text/javascript">
$('input').on('ifChecked', function(event) {
    // var element = $(this).parent().find('input:checkbox:first');
    // element.parent().parent().parent().addClass('highlight');
    $(this).parents('li').addClass("task-done");
    console.log('ok');
});
$('input').on('ifUnchecked', function(event) {
    // var element = $(this).parent().find('input:checkbox:first');
    // element.parent().parent().parent().removeClass('highlight');
    $(this).parents('li').removeClass("task-done");
    console.log('not');
});

</script>
<script>
$('#chat-box').slimScroll({
    height: '373px',
    size: '5px',
    BorderRadius: '5px'
});
$('#news').slimScroll({
    height: '390px',
    size: '5px',
    BorderRadius: '5px'
});

$('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
    checkboxClass: 'icheckbox_flat-grey',
    radioClass: 'iradio_flat-grey'
});
/* initialize the calendar
 -----------------------------------------------------------------*/

</script>
</body>
</html>