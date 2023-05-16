<?php

  include 'index1.php'; 
$sql = $db->prepare("select *from section_control");
$sql->execute();
$l = $sql->fetch(PDO::FETCH_ASSOC);
  

?>
  <div class="content-wrapper">
  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12 ">
  
  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <h3> Show/Hide Menu </h3>
              </h3>
            </div>
            <form class="form-horizontal" action="process.php" method="POST" width="100%">
              <div class="card-body" align="left">
  
              <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch1" name="home" 
                      <?php
                      if($l['home_section']){
                        echo "checked";
                      }
                      ?>
                      >
                      <label class="custom-control-label" for="customSwitch1" > Home Section </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch2" name="about"
                      <?php
                      if($l['about_section']){
                        echo "checked";
                      }
                      ?> >
                      <label class="custom-control-label" for="customSwitch2">About Section</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch3" name="resume"
                      <?php
                      if($l['resume_section']){
                        echo "checked";
                      }
                      ?> >
                      <label class="custom-control-label" for="customSwitch3">Resume Section</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch4" name="services"
                      <?php
                      if($l['services_section']){
                        echo "checked";
                      }
                      ?> >
                      <label class="custom-control-label" for="customSwitch4">Services Section</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch5" name="portfolio" 
                      <?php
                      if($l['portfolio_section']){
                        echo "checked";
                      }
                      ?> >
                      <label class="custom-control-label" for="customSwitch5">Portfolio Section</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                      <input type="checkbox" class="custom-control-input" id="customSwitch6" name="contact"
                      <?php
                      if($l['contact_section']){
                        echo "checked";
                      }
                      ?>  >
                      <label class="custom-control-label" for="customSwitch6">Contact Section</label>
                    </div>
                  </div>
  
              </div>
        
              <div class="card-footer">
               
              <div class="card-footer" align="left">
                      <button type="submit" name="sectioncont" class="btn btn-success">Save Changes</button>
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
  <?php  include 'footer.php'?>


