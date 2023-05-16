


    <?php
    include 'index1.php';
    
   

    ?>
    <div class="content-wrapper">

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12 ">


              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <h3> Contact Settings </h3>
                  </h3>
                </div>
                <form class="form-horizontal" action="process.php" method="POST" width="100%">
                  <div class="card-body" align="center">
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Adress</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" required="required" name="adress"
                          value="<?php echo $l['adress'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="<?php echo $l['email'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Call me</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="mobile" value="<?php echo $l['mobile'] ?>">
                      </div>
                    </div>

                  </div>
            

                <div class="card-header">
                  <h3 class="card-title">
                    <h5> Social Profiles </h5>
                  </h3>
                </div>
              
                  <div class="card-body" align="center">
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="facebook"
                          value="<?php echo $l['facebook'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Instagram</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="instagram"
                          value="<?php echo $l['instagram'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Linkedin</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="linkedin"
                          value="<?php echo $l['linkedin'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Twitter</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="twitter"
                          value="<?php echo $l['twitter'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Github</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="github"
                          value="<?php echo $l['github'] ?>">
                      </div>
                    </div>
                    <div class="form-group row col-sm-6">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Skype</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  name="skype"
                          value="<?php echo $l['skype'] ?>">
                      </div>
                    </div>

                  </div>



                  <div class="card-footer">
                    <div class="card-footer" align="right">
                      <button type="submit" name="contactsetting" class="btn btn-success">Change Settings</button>
                    </div>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">

              </ol>
            </div>
          </div>
        </div>
      </div>


    </div>

    <?php
    include 'footer.php'
      ?>

   