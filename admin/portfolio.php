<?php
include 'index1.php'
    ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <h3> Manage Portfolio Settings </h3>
                            </h3>
                        </div>
                        <form class="form-horizontal" action="process.php" method="POST" width="100%"
                            enctype="multipart/form-data">
                            <div class="card-body" align="left">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title"> My Projects</h3>

                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Project Type</th>
                                                            <th>Project Name</th>
                                                            <th>Project Picture</th>
                                                            <th>Project Link</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $db->prepare("select *from portfolio");
                                                        $sql->execute();
                                                        $c = 1;
                                                        while ($k = $sql->fetch(PDO::FETCH_ASSOC)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $c ?>
                                                                </td>
                                                                <td>
                                                                    <?= $k['project_type'] ?>
                                                                </td>
                                                                <td><span class="tag tag-success">
                                                                        <?= $k['project_name'] ?>
                                                                    </span></td>
                                                                <td>
                                                                    <img src="<?= $k['project_pic'] ?>" alt=""
                                                                        class="col-3">
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="<?= $k['project_link'] ?>"
                                                                            target="_blank">Open link</a>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a
                                                                            href="process.php?action=<?= $k['id'] ?>">DELETE</a>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <?php $c++;
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Picture</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="portpicture" required>
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="porttype">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="portname">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="portlink">
                                    </div>



                                    <div class="card-footer" align="left">
                                        <button type="submit" name="portsetting" class="btn btn-success">Add Project
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>


<?php
include 'footer.php'
    ?>