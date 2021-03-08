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
    <?php $this->view('messages') ?>    
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Nama Kantor</h3>
            <div class="pull-right">
                <a href="<?php echo base_url('office/add')?> "class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="table1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$data->name?></td>
                        <td><?=$data->alamat?></td>
                        <td><?=$data->phone?></td>
                        <td class="text-center" width="160px">
                        <a href="<?php echo base_url('office/edit/'.$data->office_id)?>" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i> Update
                        </a>
                        <a href="<?php echo base_url('office/del/'.$data->office_id)?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php
                } ?>
                </tbody>
            </table>
        </div>
    </div>

 </section>