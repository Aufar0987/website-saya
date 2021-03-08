<section class="content-header">
    <h1>Information
      <small>Pemasok Barang</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <!-- <li><a href="#">Examples</a></li> -->
      <li class="active">Information</li>
    </ol>
  </section>
    
  <!-- Main content -->
  <section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Information</h3>
            <div class="pull-right">
                <a href="<?php echo base_url('information')?> "class="btn btn-warning btn-flat">
                    <i class="fa fa- fa-arrow-right"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <form action="<?php echo base_url('information/process')?>" method="post">
                    <div class="form-group">
                    <label>Information Name </label>
                    <input type="hidden" name="id" value="<?=$row->information_id?>">
                    <input type="text" name="information_name" value="<?=$row->name?>"  class="form-control" required>
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