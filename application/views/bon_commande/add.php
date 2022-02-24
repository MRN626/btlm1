<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Bon Commande Add</h3>
            </div>
            <?php echo form_open('bon_commande_controller/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="type_commande" class="control-label"><span class="text-danger">*</span>Type Commande</label>
						<div class="form-group">
							<select name="type_commande" class="form-control">
								<option value="">select</option>
								<?php 
								$type_commande_values = array(
									'externe'=>'externe',
									'interne'=>'interne',
								);

								foreach($type_commande_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('type_commande')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('type_commande');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="statut_commande" class="control-label"><span class="text-danger">*</span>Statut Commande</label>
						<div class="form-group">
							<select name="statut_commande" class="form-control">
								<option value="">select</option>
								<?php 
								$statut_commande_values = array(
									'refuser'=>'refuser',
									'valider'=>'valider',
									'supprimer'=>'supprimer',
								);

								foreach($statut_commande_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('statut_commande')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('statut_commande');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="besoin_id" class="control-label"><span class="text-danger">*</span>Tb Fiche Besoin</label>
						<div class="form-group">
							<select name="besoin_id" class="form-control">
								<option value="">select tb_fiche_besoin</option>
								<?php 
								foreach($all_tb_fiche_besoin as $tb_fiche_besoin)
								{
									$selected = ($tb_fiche_besoin['besoin_id'] == $this->input->post('besoin_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_fiche_besoin['besoin_id'].'" '.$selected.'>'.$tb_fiche_besoin['besoin_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('besoin_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="serv_gen_id" class="control-label"><span class="text-danger">*</span>Tb Services Gen</label>
						<div class="form-group">
							<select name="serv_gen_id" class="form-control">
								<option value="">select tb_services_gen</option>
								<?php 
								foreach($all_tb_services_gen as $tb_services_gen)
								{
									$selected = ($tb_services_gen['service_gen_id'] == $this->input->post('serv_gen_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_services_gen['service_gen_id'].'" '.$selected.'>'.$tb_services_gen['signature_serv'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('serv_gen_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="daf_id" class="control-label"><span class="text-danger">*</span>Tb Daf</label>
						<div class="form-group">
							<select name="daf_id" class="form-control">
								<option value="">select tb_daf</option>
								<?php 
								foreach($all_tb_daf as $tb_daf)
								{
									$selected = ($tb_daf['daf_id'] == $this->input->post('daf_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_daf['daf_id'].'" '.$selected.'>'.$tb_daf['signature_daf'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('daf_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dg_id" class="control-label"><span class="text-danger">*</span>Tb Dg</label>
						<div class="form-group">
							<select name="dg_id" class="form-control">
								<option value="">select tb_dg</option>
								<?php 
								foreach($all_tb_dg as $tb_dg)
								{
									$selected = ($tb_dg['dg_id'] == $this->input->post('dg_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_dg['dg_id'].'" '.$selected.'>'.$tb_dg['signature_dg'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('dg_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fournisseur_id" class="control-label"><span class="text-danger">*</span>Tb Fournisseur</label>
						<div class="form-group">
							<select name="fournisseur_id" class="form-control">
								<option value="">select tb_fournisseur</option>
								<?php 
								foreach($all_tb_fournisseur as $tb_fournisseur)
								{
									$selected = ($tb_fournisseur['fournisseur_id'] == $this->input->post('fournisseur_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_fournisseur['fournisseur_id'].'" '.$selected.'>'.$tb_fournisseur['fournisseur_id'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('fournisseur_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="designation_produit" class="control-label"><span class="text-danger">*</span>Designation Produit</label>
						<div class="form-group">
							<input type="text" name="designation_produit" value="<?php echo $this->input->post('designation_produit'); ?>" class="form-control" id="designation_produit" />
							<span class="text-danger"><?php echo form_error('designation_produit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="quantite" class="control-label"><span class="text-danger">*</span>Quantite</label>
						<div class="form-group">
							<input type="text" name="quantite" value="<?php echo $this->input->post('quantite'); ?>" class="form-control" id="quantite" />
							<span class="text-danger"><?php echo form_error('quantite');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_creation" class="control-label"><span class="text-danger">*</span>Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo $this->input->post('date_creation'); ?>" class="has-datetimepicker form-control" id="date_creation" />
							<span class="text-danger"><?php echo form_error('date_creation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label"><span class="text-danger">*</span>Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo $this->input->post('observation'); ?></textarea>
							<span class="text-danger"><?php echo form_error('observation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proformat_valider" class="control-label"><span class="text-danger">*</span>Proformat Valider</label>
						<div class="form-group">
							<textarea name="proformat_valider" class="form-control" id="proformat_valider"><?php echo $this->input->post('proformat_valider'); ?></textarea>
							<span class="text-danger"><?php echo form_error('proformat_valider');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="facture" class="control-label"><span class="text-danger">*</span>Facture</label>
						<div class="form-group">
							<textarea name="facture" class="form-control" id="facture"><?php echo $this->input->post('facture'); ?></textarea>
							<span class="text-danger"><?php echo form_error('facture');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>