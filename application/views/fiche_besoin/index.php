<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Fiche Besoin Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fiche_besoin_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Besoin Id</th>
						<th>Statut Fiche</th>
						<th>Agent Id</th>
						<th>Service Gen Id</th>
						<th>Chef Dep Id</th>
						<th>Dg Id</th>
						<th>Daf Id</th>
						<th>Nom Produit</th>
						<th>Departement</th>
						<th>Date Livraison</th>
						<th>Date Creation</th>
						<th>Description</th>
						<th>Raison</th>
						<th>Adresse Livraison</th>
						<th>Proformat 1</th>
						<th>Proformat 2</th>
						<th>Proformat 3</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_fiche_besoin as $t){ ?>
                    <tr>
						<td><?php echo $t['besoin_id']; ?></td>
						<td><?php echo $t['statut_fiche']; ?></td>
						<td><?php echo $t['agent_id']; ?></td>
						<td><?php echo $t['service_gen_id']; ?></td>
						<td><?php echo $t['chef_dep_id']; ?></td>
						<td><?php echo $t['dg_id']; ?></td>
						<td><?php echo $t['daf_id']; ?></td>
						<td><?php echo $t['nom_produit']; ?></td>
						<td><?php echo $t['departement']; ?></td>
						<td><?php echo $t['date_livraison']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['description']; ?></td>
						<td><?php echo $t['raison']; ?></td>
						<td><?php echo $t['adresse_livraison']; ?></td>
						<td><?php echo $t['proformat_1']; ?></td>
						<td><?php echo $t['proformat_2']; ?></td>
						<td><?php echo $t['proformat_3']; ?></td>
						<td>
                            <a href="<?php echo site_url('fiche_besoin_controller/edit/'.$t['besoin_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fiche_besoin_controller/remove/'.$t['besoin_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
