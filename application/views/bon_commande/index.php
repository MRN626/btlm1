<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Bon Commande Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bon_commande_controller/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Bon Commande Id</th>
						<th>Type Commande</th>
						<th>Statut Commande</th>
						<th>Besoin Id</th>
						<th>Serv Gen Id</th>
						<th>Daf Id</th>
						<th>Dg Id</th>
						<th>Fournisseur Id</th>
						<th>Designation Produit</th>
						<th>Quantite</th>
						<th>Date Creation</th>
						<th>Observation</th>
						<th>Proformat Valider</th>
						<th>Facture</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_bon_commande as $t){ ?>
                    <tr>
						<td><?php echo $t['bon_commande_id']; ?></td>
						<td><?php echo $t['type_commande']; ?></td>
						<td><?php echo $t['statut_commande']; ?></td>
						<td><?php echo $t['besoin_id']; ?></td>
						<td><?php echo $t['serv_gen_id']; ?></td>
						<td><?php echo $t['daf_id']; ?></td>
						<td><?php echo $t['dg_id']; ?></td>
						<td><?php echo $t['fournisseur_id']; ?></td>
						<td><?php echo $t['designation_produit']; ?></td>
						<td><?php echo $t['quantite']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['observation']; ?></td>
						<td><?php echo $t['proformat_valider']; ?></td>
						<td><?php echo $t['facture']; ?></td>
						<td>
                            <a href="<?php echo site_url('bon_commande_controller/edit/'.$t['bon_commande_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bon_commande_controller/remove/'.$t['bon_commande_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
