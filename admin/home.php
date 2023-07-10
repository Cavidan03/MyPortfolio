<?php include 'index1.php';
$sql = $db->prepare("select *from home");
$sql->execute();
$l = $sql->fetch(PDO::FETCH_ASSOC); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

          
          <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <h3> Home Settings</h3>
                  </h3>
                </div>
                <form class="form-horizontal" action="process.php" method="POST" width="100%">
                <div class="card-body" align="left">
                <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" required="required" name="title"
                          value="<?=$l['home_name']?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">SubTitle</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" required="required" name="subtitle"
                          value="<?=$l['home_title']?>">
                      </div>
                    </div>
               </div>             
            
                <div class="card-footer">
                <div class="card-footer" align="left">
                  <button type="submit" name="homesett" class="btn btn-success">Change Settings</button>
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

   