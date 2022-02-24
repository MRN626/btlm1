<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Fiche Besoin Add</h3>
            </div>
            <?php echo form_open('fiche_besoin_controller/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="statut_fiche" class="control-label">Statut Fiche</label>
						<div class="form-group">
							<select name="statut_fiche" class="form-control">
								<option value="">select</option>
								<?php 
								$statut_fiche_values = array(
									'supprimer'=>'supprimer',
									'valider'=>'valider',
									'supprimer'=>'supprimer',
								);

								foreach($statut_fiche_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('statut_fiche')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="agent_id" class="control-label">Tb Agent</label>
						<div class="form-group">
							<select name="agent_id" class="form-control">
								<option value="">select tb_agent</option>
								<?php 
								foreach($all_tb_agent as $tb_agent)
								{
									$selected = ($tb_agent['agent_id'] == $this->input->post('agent_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_agent['agent_id'].'" '.$selected.'>'.$tb_agent['nom_complet'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="service_gen_id" class="control-label">Tb Services Gen</label>
						<div class="form-group">
							<select name="service_gen_id" class="form-control">
								<option value="">select tb_services_gen</option>
								<?php 
								foreach($all_tb_services_gen as $tb_services_gen)
								{
									$selected = ($tb_services_gen['service_gen_id'] == $this->input->post('service_gen_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_services_gen['service_gen_id'].'" '.$selected.'>'.$tb_services_gen['signature_serv'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="chef_dep_id" class="control-label">Tb Chef Departement</label>
						<div class="form-group">
							<select name="chef_dep_id" class="form-control">
								<option value="">select tb_chef_departement</option>
								<?php 
								foreach($all_tb_chef_departement as $tb_chef_departement)
								{
									$selected = ($tb_chef_departement['chef_dep_id'] == $this->input->post('chef_dep_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_chef_departement['chef_dep_id'].'" '.$selected.'>'.$tb_chef_departement['signature_chef_dep'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dg_id" class="control-label">Tb Dg</label>
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
						</div>
					</div>
					<div class="col-md-6">
						<label for="daf_id" class="control-label">Tb Daf</label>
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
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_produit" class="control-label"><span class="text-danger">*</span>Nom Produit</label>
						<div class="form-group">
							<input type="text" name="nom_produit" value="<?php echo $this->input->post('nom_produit'); ?>" class="form-control" id="nom_produit" />
							<span class="text-danger"><?php echo form_error('nom_produit');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="departement" class="control-label">Departement</label>
						<div class="form-group">
							<input type="text" name="departement" value="<?php echo $this->input->post('departement'); ?>" class="form-control" id="departement" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_livraison" class="control-label">Date Livraison</label>
						<div class="form-group">
							<input type="text" name="date_livraison" value="<?php echo $this->input->post('date_livraison'); ?>" class="has-datetimepicker form-control" id="date_livraison" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_creation" class="control-label">Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo $this->input->post('date_creation'); ?>" class="has-datetimepicker form-control" id="date_creation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="raison" class="control-label">Raison</label>
						<div class="form-group">
							<textarea name="raison" class="form-control" id="raison"><?php echo $this->input->post('raison'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse_livraison" class="control-label">Adresse Livraison</label>
						<div class="form-group">
							<textarea name="adresse_livraison" class="form-control" id="adresse_livraison"><?php echo $this->input->post('adresse_livraison'); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proformat_1" class="control-label">Proformat 1</label>
						<div class="form-group">
						<input type="file" name="proformat_1" class="form-control" id="proformat_1"><?php echo $this->input->post('proformat_1'); ?></input>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proformat_2" class="control-label">Proformat 2</label>
						<div class="form-group">
							<input type="file" name="proformat_2" class="form-control" id="proformat_2"><?php echo $this->input->post('proformat_2'); ?></input>
						</div>
					</div>
					<div class="col-md-6">
						<label for="proformat_3" class="control-label">Proformat 3</label>
						<div class="form-group">
							<input type="file" name="proformat_3" class="form-control" id="proformat_3"><?php echo $this->input->post('proformat_3'); ?></input>
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