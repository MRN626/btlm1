<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Services Gen Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('services_gen_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Service Gen Id</th>
						<th>Date Creation</th>
						<th>Privilege</th>
						<th>Signature Serv</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_services_gen as $t){ ?>
                    <tr>
						<td><?php echo $t['service_gen_id']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['privilege']; ?></td>
						<td><?php echo $t['signature_serv']; ?></td>
						<td>
                            <a href="<?php echo site_url('services_gen_controller/edit/'.$t['service_gen_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('services_gen_controller/remove/'.$t['service_gen_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
