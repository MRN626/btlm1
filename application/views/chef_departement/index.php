<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Chef Departement Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('chef_departement_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Chef Dep Id</th>
						<th>Date Creation</th>
						<th>Privilege</th>
						<th>Signature Chef Dep</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_chef_departement as $t){ ?>
                    <tr>
						<td><?php echo $t['chef_dep_id']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['privilege']; ?></td>
						<td><?php echo $t['signature_chef_dep']; ?></td>
						<td>
                            <a href="<?php echo site_url('chef_departement_controller/edit/'.$t['chef_dep_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('chef_departement_controller/remove/'.$t['chef_dep_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
