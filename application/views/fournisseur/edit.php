<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fournisseur Edit</h3>
            </div>
			<?php echo form_open('fournisseur_controller/edit/'.$tb_fournisseur['fournisseur_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_fournisseur" class="control-label">Nom Fournisseur</label>
						<div class="form-group">
							<input type="text" name="nom_fournisseur" value="<?php echo ($this->input->post('nom_fournisseur') ? $this->input->post('nom_fournisseur') : $tb_fournisseur['nom_fournisseur']); ?>" class="form-control" id="nom_fournisseur" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="evaluation_founisseur" class="control-label">Evaluation Founisseur</label>
						<div class="form-group">
							<input type="text" name="evaluation_founisseur" value="<?php echo ($this->input->post('evaluation_founisseur') ? $this->input->post('evaluation_founisseur') : $tb_fournisseur['evaluation_founisseur']); ?>" class="form-control" id="evaluation_founisseur" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse_fournisseur" class="control-label">Adresse Fournisseur</label>
						<div class="form-group">
							<textarea name="adresse_fournisseur" class="form-control" id="adresse_fournisseur"><?php echo ($this->input->post('adresse_fournisseur') ? $this->input->post('adresse_fournisseur') : $tb_fournisseur['adresse_fournisseur']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone_founisseur" class="control-label">Telephone Founisseur</label>
						<div class="form-group">
							<textarea name="telephone_founisseur" class="form-control" id="telephone_founisseur"><?php echo ($this->input->post('telephone_founisseur') ? $this->input->post('telephone_founisseur') : $tb_fournisseur['telephone_founisseur']); ?></textarea>
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