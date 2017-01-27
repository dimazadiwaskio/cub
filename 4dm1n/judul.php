<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
//Tidak ada event, dalam artian menghindari jump page     
}
else
header("location:index.php");
?>
<?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav">
                        <li>
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="judul.php"><i class="fa fa-fw fa-edit"></i> Title</a>
                        </li>
                        <li>
                            <a href="subjudul.php"><i class="fa fa-fw fa-edit"></i> Subtitle</a>
                        </li>
                          <li>
                            <a href="about.php"><i class="fa fa-fw fa-edit"></i> About</a>
                        </li>
                         <li>
                            <a href="upload.php"><i class="fa fa-fw fa-upload"></i> Upload</a>
                        </li>
                         <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                        </li>

                        </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

        </nav>

        <div id="page-wrapper">
                <div class="row">
                <div class="col-lg-12">
                <?php
                  $page=@$_GET['page'];
                  $action=@$_GET['action'];
                  if ($page =="") {
                  if($action == ""){
                    include "judul/tampil.php";
                  }else if($action=="tambah"){
                    include "judul/tambah.php";
                  }else if($action=="edit"){
                    include "judul/edit.php";
                  }else if($action=="hapus"){
                    include "judul/hapus.php";
                  }
                  }
                ?> 
                </div><!-- /.col-lg-12 -->

            </div>
                   </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>

</html>
