<?php
include 'index1.php';
$sql = $db->prepare("select *from about");
$sql->execute();
$l = $sql->fetch(PDO::FETCH_ASSOC);
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
                                <h3> About Settings </h3>
                            </h3>
                        </div>
                        <img src="<?= $l['profile_pic'] ?>" alt="" class="col-3">
                        <form class="form-horizontal" action="process.php" method="POST" width="100%"
                            enctype="multipart/form-data">

                            <div class="card-body" align="left">

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Picture</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="profile" required>
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="title"
                                            value="<?= $l['about_title'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">SubTitle</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="subtitle"
                                            value="<?= $l['about_subtitle'] ?>">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Text</label>
                                    <textarea name="desc" cols="50" rows="4" required><?= $l['about_desc'] ?></textarea>
                                </div>



                                <div class="card-footer" align="left">
                                    <button type="submit" name="aboutset" class="btn btn-success">Change About</button>
                                </div>
                            </div>
                        </form>
                        <form class="form-horizontal" action="process.php" method="POST" width="100%">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <h3> Manage Personal Info </h3>
                                </h3>
                            </div>
                            <div class="card-body" align="left">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Personal Info</h3>

                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Label</th>
                                                            <th>Value</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $db->prepare("select *from personal_info order by id  limit 25");
                                                        $sql->execute();
                                                        $c = 1;
                                                        while ($k = $sql->fetch(PDO::FETCH_ASSOC)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $c ?>
                                                                </td>
                                                                <td>
                                                                    <?= $k['personal_label'] ?>
                                                                </td>
                                                                <td><span class="tag tag-success">
                                                                        <?= $k['personal_value'] ?>
                                                                    </span></td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a
                                                                            href="process.php?delete=<?= $k['id'] ?>">DELETE</a>
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
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Label</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="label">

                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Value</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="value">
                                    </div>
                                </div>
                                <div class="card-footer" align="left">
                                    <button type="submit" name="personal_info" class="btn btn-success">Add Personal
                                        info</button>
                                </div>
                            </div>
                            <div class="card-header">
                                <h3 class="card-title">
                                    <h3> Manage Skills </h3>
                                </h3>
                            </div>
                            <div class="card-body" align="left">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Skills</h3>


                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body p-0">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px">#</th>
                                                            <th>Skills Name</th>
                                                            <th>Skills Level</th>
                                                            <th style="width: 40px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql1 = $db->prepare("select*from skills");
                                                        $sql1->execute();
                                                        $m = 1;
                                                        while ($d = $sql1->fetch(PDO::FETCH_ASSOC)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $m ?>
                                                                </td>
                                                                <td>
                                                                    <?= $d['skils_name'] ?>
                                                                </td>
                                                                <td>
                                                                    <div class="progress progress-xs">
                                                                        <div class="progress-bar progress-bar-danger"
                                                                            style="width:<?= $d['skils_level'] ?>% ;"></div>
                                                                    </div>
                                                                    <span class="badge bg-danger">
                                                                        <?= $d['skils_level'] ?>%
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a href="process.php?del=<?= $d['id'] ?>">DELETE</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php $m++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label ">Skils Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="skil_name">
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Skils Level</label>
                                    <div class="col-sm-10">
                                        <input type="range" min="1" max="100" class="form-control" name="skil_level">
                                    </div>
                                </div>


                                <div class="card-footer" align="left">
                                    <button type="submit" name="addskills" class="btn btn-success">Add
                                        Skills</button>
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