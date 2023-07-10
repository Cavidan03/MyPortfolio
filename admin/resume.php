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
                        <form class="form-horizontal" action="process.php" method="POST" width="100%">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <h3> Manage  Resume Settings </h3>
                                </h3>
                            </div>

                            <div class="card-body" align="left">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Resume</h3>

                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0 ">
                                                <table class="table table-hover text-nowrap  ">
                                                    <thead >
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Type</th>
                                                            <th>Title</th>
                                                            <th>Time</th>
                                                            <th>Institute/Company</th>
                                                            <th >About</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = $db->prepare("select*from resume");
                                                        $sql->execute();
                                                        $y = 1;
                                                        while ($f = $sql->fetch(PDO::FETCH_ASSOC)) {
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $y ?>
                                                                </td>
                                                                <td>
                                                                    <?= $f['types'] ?>
                                                                </td>
                                                                <td>
                                                                    <?= $f['res_title'] ?>
                                                                </td>
                                                                <td><span class="tag tag-success">
                                                                        <?= $f['res_time'] ?>
                                                                    </span></td>
                                                                <td>
                                                                    <?= $f['res_location'] ?>
                                                                </td>
                                                                <td><span>
                                                                        <?= $f['res_subtitle'] ?>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a
                                                                            href="process.php?delete1=<?= $f['id'] ?>">DELETE</a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $y++;
                                                        } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row col-sm-8">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Select Type</label>
                                    <div class="col-sm-10">
                                        <select name="type" class="form-control">
                                            <option value="e">Education</option>
                                            <option value="p">Professional</option>
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="form-group row col-sm-8">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-8">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Time</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="time">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-8">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Institute/Company</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ins_comp">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-8">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">About</label>
                                    <div class="col-sm-10">
                                        <textarea name="about"  cols="73" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer" align="left">
                                    <button type="submit" name="resume" class="btn btn-success">Add Resume</button>
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