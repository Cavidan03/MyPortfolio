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
                                <h3> Manage Galery Settings </h3>
                            </h3>
                        </div>
                        <form class="form-horizontal" action="process.php" method="POST" width="100%"
                            enctype="multipart/form-data">
                            <div class="card-body" align="left">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title"> My Photos</h3>

                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body table-responsive p-0">
                                                <table class="table table-hover text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th> Picture</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $c=1;
                                                        $sql=$db->prepare("select * from galery");
                                                        $sql->execute([]);
                                                        while($k=$sql->fetch(PDO::FETCH_ASSOC)){

                                                        ?>
                                                            <tr>
                                                                <td>
                                                                  <?= $c?>
                                                                </td>
                                                               <td> 
                                                                    <img src="<?=$k['galery_picture']?>" alt=""
                                                                        class="col-2">
                                                                </td>
                                                                
                                                                <td>
                                                                    <div class="btn-group">
                                                                        <a
                                                                            href="process.php?pic=<?=$k['id']?>">DELETE</a>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <?php
                                                        $c++;
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
                                        <input type="file" class="form-control" name="galerypicture" required>
                                    </div>
                                </div>

                               
                            



                                    <div class="card-footer" align="left">
                                        <button type="submit" name="galerysetting" class="btn btn-success">Add Picture
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