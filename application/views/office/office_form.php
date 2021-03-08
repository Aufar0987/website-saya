<section class="content-header">
    <h1>Office Name
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <!-- <li><a href="#">Examples</a></li> -->
      <li class="active">Office Name</li>
    </ol>
  </section>
    
  <!-- Main content -->
  <section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Office Name</h3>
            <div class="pull-right">
                <a href="<?php echo base_url('office')?> "class="btn btn-warning btn-flat">
                    <i class="fa fa- fa-arrow-right"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <form action="<?php echo base_url('office/process')?>" method="post">
                    <div class="form-group">
                    <label>Office Name </label>
                    <input type="hidden" name="id" value="<?=$row->office_id?>">
                    <input type="text" name="office_name" value="<?=$row->name?>"  class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label>Alamat </label>
                    <input type="text" name="alamat" value="<?=$row->alamat?>"  class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label>Phone </label>
                    <input type="phone" name="phone" value="<?=$row->phone?>"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="<?=$page?>"    class="btn btn-success btn-flat">
                         <i class="fa fa-paper-plane"></i>  Save
                        </button>
                        <button type="Reset" class="btn btn-flat">Reset</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>

</section>