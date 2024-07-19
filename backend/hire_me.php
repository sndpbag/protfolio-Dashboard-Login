<?php
 
include("header.php");
include("sidebar.php");

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">


            <?php include("php/contact_fetch.php") ?>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>MSg</th>

                            </tr>
                        </thead>

                        <?php if (!empty($contact)) :

                        $i = 0;

                        ?>


                            <tbody>
                                <?php foreach ($contact as $contacts) :
                                     $i++;
                                    ?>
                                   
                                    <tr>
                                        <td><?php echo $i ?></td>
                                        <td><?php echo $contacts['name'] ?></td>
                                        <td>
                                            <?php echo $contacts['email'] ?>
                                        </td>
                                        <td><?php echo $contacts['msg'] ?></td>


                                    </tr>

                                <?php endforeach; ?>

                            </tbody>

                        <?php endif; ?>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->







        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include("footer.php"); ?>