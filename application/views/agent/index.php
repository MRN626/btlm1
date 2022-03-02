<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agent Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agent_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Agent Id</th>
						<th>Password</th>
						<th>Niveau Acces</th>
						<th>Date Creation</th>
						<th>Nom Complet</th>
						<th>Departement</th>
						<th>Fonction</th>
						<th>Telephone</th>
						<th>Avatar</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_agent as $t){ ?>
                    <tr>
						<td><?php echo $t['agent_id']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['niveau_acces']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['nom_complet']; ?></td>
						<td><?php echo $t['departement']; ?></td>
						<td><?php echo $t['fonction']; ?></td>
						<td><?php echo $t['telephone']; ?></td>
						<td><?php echo $t['avatar']; ?></td>
						<td>
                            <a href="<?php echo site_url('agent_controller/edit/'.$t['agent_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('agent_controller/remove/'.$t['agent_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
