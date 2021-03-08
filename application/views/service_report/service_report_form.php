<section class="content-header">
    <h1>Service
      <small>Data Barang</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <!-- <li><a href="#">Examples</a></li> -->
      <li class="active">Service</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="box"> 
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> service </h3>
            <div class="pull-right">
                <a href="<?php echo base_url('service')?> "class="btn btn-warning btn-flat">
                    <i class="fa fa- fa-arrow-right"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?php echo base_url('service/process')?>" method="post">
                        <div class="form-group">
                            <label> Date </label>
                            <input type="hidden" name="id" value="<?=$row->service_id?>">
                            <input type="date" name="date" value="<?=$row->date?>"  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label> Office</label>
                            <select name="office" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach($office->result() as $key => $data) { ?>
                                <option value="<?=$data->office_id?>" <?=$data->office_id == $row->office_id ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Category</label>
                            <select name="category" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach($category->result() as $key => $data) { ?>
                                <option value="<?=$data->category_id?>" <?=$data->category_id == $row->category_id ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Information</label>
                            <select name="information" class="form-control" required>
                                <option value="">- Pilih -</option>
                                <?php foreach($information->result() as $key => $data) { ?>
                                <option value="<?=$data->information_id?>" <?=$data->information_id == $row->information_id ? "selected" : null?>><?=$data->name?></option>
                                <?php } ?>
                            </select>
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
    </div>
</section> 