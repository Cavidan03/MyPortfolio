<?php
include 'index1.php';
$sql = $db->prepare("select *from settings");
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
                                <h3> Seo Settings </h3>
                            </h3>
                        </div>
                        <img src="<?=$l['icon']?>" alt="" class="col-3">
                        <form class="form-horizontal" action="process.php" method="POST" width="100%"
                            enctype="multipart/form-data">
                            
                            <div class="card-body" align="left">

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Picture</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="icon" required >
                                    </div>
                                </div>

                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="settitle"
                                            value="<?=$l['set_title']?>">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Keyword</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" required="required" name="setkeywords"
                                            value="<?=$l['set_keyworrds']?>">
                                    </div>
                                </div>
                                <div class="form-group row col-sm-6">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Desc</label>
                                    <textarea name="setdesc" cols="55" rows="4"><?=$l['set_desc']?></textarea>
                                </div>



                                <div class="card-footer" align="left">
                                    <button type="submit" name="seoset" class="btn btn-success">Change Settings</button>
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