<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Daf Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('daf_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Daf Id</th>
						<th>Date Creation</th>
						<th>Privilege</th>
						<th>Signature Daf</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_daf as $t){ ?>
                    <tr>
						<td><?php echo $t['daf_id']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['privilege']; ?></td>
						<td><?php echo $t['signature_daf']; ?></td>
						<td>
                            <a href="<?php echo site_url('daf_controller/edit/'.$t['daf_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('daf_controller/remove/'.$t['daf_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
