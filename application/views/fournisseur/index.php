<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fournisseur Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fournisseur_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Fournisseur Id</th>
						<th>Nom Fournisseur</th>
						<th>Evaluation Founisseur</th>
						<th>Adresse Fournisseur</th>
						<th>Telephone Founisseur</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_fournisseur as $t){ ?>
                    <tr>
						<td><?php echo $t['fournisseur_id']; ?></td>
						<td><?php echo $t['nom_fournisseur']; ?></td>
						<td><?php echo $t['evaluation_founisseur']; ?></td>
						<td><?php echo $t['adresse_fournisseur']; ?></td>
						<td><?php echo $t['telephone_founisseur']; ?></td>
						<td>
                            <a href="<?php echo site_url('fournisseur_controller/edit/'.$t['fournisseur_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fournisseur_controller/remove/'.$t['fournisseur_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
