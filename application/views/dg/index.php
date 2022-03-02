<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Dg Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('dg_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Dg Id</th>
						<th>Date Creation</th>
						<th>Privilege</th>
						<th>Signature Dg</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_dg as $t){ ?>
                    <tr>
						<td><?php echo $t['dg_id']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['privilege']; ?></td>
						<td><?php echo $t['signature_dg']; ?></td>
						<td>
                            <a href="<?php echo site_url('dg_controller/edit/'.$t['dg_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('dg_controller/remove/'.$t['dg_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
