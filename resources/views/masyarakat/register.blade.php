{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/startmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/startmin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/startmin/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/startmin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Startmin</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span
                                    class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Form Elements
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ route('regist.masyarakat') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control" name="nama">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label>username</label>
                                                <input class="form-control" placeholder="Enter text" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" name="password" type="password">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input class="form-control" name="telp">
                                                <p class="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin">
                                                    <option>Laki Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>lass="help-block">Example block-level help text here.</p>
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label>Alamat Lengkap</label>
                                                <textarea class="form-control" rows="3"  name="alamat"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default ">Submit Button</button>
                                            <button type="reset" class="btn btn-default">Reset Button</button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="assets/startmin/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/startmin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="assets/startmin/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/startmin/js/startmin.js"></script>

</body>

</html> --}}




{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{ assets('/startmin/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{ assets('/startmin/css/metisMenu.min.css') }}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ assets('/startmin/css/startmin.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{ assets('/startmin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('data.login') }}">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ assets('/startmin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ assets('/startmin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ assets('/startmin/js/metisMenu.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ assets('/startmin/js/startmin.js') }}"></script>

    </body>
</html> --}}






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../assets/startmin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../assets/startmin/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../assets/startmin/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../assets/startmin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('regist.masyarakat') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input class="form-control" name="nik">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" name="nama">
                                </div>
                                <div class="form-group">
                                    <label>username</label>
                                    <input class="form-control" placeholder="Enter text" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" name="password" type="password">

                                </div>
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control" name="telp">

                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin">
                                        <option>Laki Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Alamat Lengkap</label>
                                    <textarea class="form-control" rows="3"  name="alamat"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default " style="margin-left: 10px; margin-bottom : 10px;">Submit Button</button>
                                <p>Sudah memiliki akun? <a href="{{ url('login/page') }}">Login</a></p>
                            </form>
                            {{-- <form role="form" action="{{ route('data.login') }}">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-bloc">Login</button>
                                </fieldset>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../assets/startmin/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../assets/startmin/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../assets/startmin/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../assets/startmin/js/startmin.js"></script>

    </body>
</html>

