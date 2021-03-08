<section class="content-header">
    <h1>Service Report</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
      <!-- <li><a href="#">Examples</a></li> -->
      <li class="active">Service Report</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Service Report</h3>
            <div class="pull-right">
                <a href="<?php echo base_url('service/add')?> "class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create Service Report
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table id="table1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Office</th>
                        <th>Category</th>
                        <th>Information</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($row->result() as $key => $service) { ?>
                    <tr>
                        <td style="width:5%;"><?=$no++?>.</td>
                        <td><?=$service->date?></td>
                        <td><?=$service->office_name?></td>
                        <td><?=$service->category_name?></td>
                        <td><?=$service->information_name?></td>
                        <td class="text-center" width="160px">
                        <a href="<?php echo base_url('service/edit/'.$service->service_id)?>" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i> Update
                        </a>
                        <a href="<?php echo base_url('service/del/'.$service->service_id)?>" onclick="return confirm('Yakin hapus service?')" class="btn btn-danger btn-xs">
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