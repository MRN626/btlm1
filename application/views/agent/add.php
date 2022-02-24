<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Agent Add</h3>
            </div>
            <?php echo form_open('agent_controller/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="niveau_acces" class="control-label"><span class="text-danger">*</span>Niveau Acces</label>
						<div class="form-group">
							<input type="text" name="niveau_acces" value="<?php echo $this->input->post('niveau_acces'); ?>" class="form-control" id="niveau_acces" />
							<span class="text-danger"><?php echo form_error('niveau_acces');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_creation" class="control-label"><span class="text-danger">*</span>Date Creation</label>
						<div class="form-group">
							<input type="datetime" name="date_creation" value="<?php echo date('Y-m-d H:i:s'); ?>" class="form-control" id="date_creation" />
							<span class="text-danger"><?php echo form_error('date_creation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_complet" class="control-label"><span class="text-danger">*</span>Nom Complet</label>
						<div class="form-group">
							<input type="text" name="nom_complet" value="<?php echo $this->input->post('nom_complet'); ?>" class="form-control" id="nom_complet" />
							<span class="text-danger"><?php echo form_error('nom_complet');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="departement" class="control-label">Departement</label>
						<div class="form-group">
							<input type="text" name="departement" value="<?php echo $this->input->post('departement'); ?>" class="form-control" id="departement" />
							<span class="text-danger"><?php echo form_error('departement');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fonction" class="control-label">Fonction</label>
						<div class="form-group">
							<input type="text" name="fonction" value="<?php echo $this->input->post('fonction'); ?>" class="form-control" id="fonction" />
							<span class="text-danger"><?php echo form_error('fonction');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo $this->input->post('telephone'); ?>" class="form-control" id="telephone" />
							<span class="text-danger"><?php echo form_error('telephone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="avatar" class="control-label">Avatar</label>
						<div class="form-group">
							<textarea name="avatar" class="form-control" id="avatar"><?php echo $this->input->post('avatar'); ?></textarea>
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