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
    <link href="assets/startmin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/startmin/css/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="assets/startmin/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets/startmin/css/dataTables/dataTables.responsive.css" rel="stylesheet">

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
                        <li><a href="{{ route('logout.operator') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Pengaduan Tanggapan</a>
                        </li>
                        <li>
                            <a href="{{ route('register.petugas') }}"><i class="fa fa-edit fa-fw"></i> Register
                                Petugas </a>
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
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DataTables Advanced Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>

                                            <tr>
                                                <th>Tanggal Tanggapan</th>
                                                <th>Tanggapan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $tanggapan)
                                            <tr class="odd gradeX">
                                                <td>{{ $tanggapan->tgl_tanggapan }}</td>
                                                <td>{{ $tanggapan->tanggapan }}<</td>


                                            </tr>
                                             @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
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

    <!-- DataTables JavaScript -->
    <script src="assets/startmin/js/dataTables/jquery.dataTables.min.js"></script>
    <script src="assets/startmin/js/dataTables/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="assets/startmin/js/startmin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
</body>

</html>
