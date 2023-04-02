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

    <!-- DataTables CSS -->
    <link href="../assets/startmin/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../assets/startmin/css/dataTables/dataTables.responsive.css" rel="stylesheet">

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

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">Bogor Lapor</a>
            </div>





            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> </a>
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

                        <li>
                            <a href="{{ route('page.admin') }}"><i class="fa fa-edit fa-fw"></i> Pengaduan </a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Register Petugas </a>
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
                        <h1 class="page-header">Tables</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Form Elements
                            </div>
                            <div>
                                @if(session()->has('success'))

                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session()->get('success') }}
                                </div>
                                @endif
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="{{ route('page.registPetugas') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label> Nama Petugas </label>
                                                <input class="form-control" placeholder="Enter text" name="nama_petugas">
                                            </div>
                                            <div class="form-group">
                                                <label> Username </label>
                                                <input class="form-control" placeholder="Enter text" name="username">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" type="password" name="password" id="">

                                            </div>
                                            <div>
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
                                            </div>
                                            <div class="form-group">
                                                <label>No Telephone</label>
                                                <input class="form-control" name="telp" type="Number">

                                            </div>

                                            <button type="submit" class="btn btn-default ">Submit Button</button>

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
    <script src="../assets/startmin/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/startmin/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../assets/startmin/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../assets/startmin/js/startmin.js"></script>

</body>

</html>
