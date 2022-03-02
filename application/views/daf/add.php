<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Daf Add</h3>
            </div>
            <?php echo form_open('daf_controller/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="date_creation" class="control-label">Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo $this->input->post('date_creation'); ?>" class="has-datetimepicker form-control" id="date_creation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="privilege" class="control-label">Privilege</label>
						<div class="form-group">
							<input type="text" name="privilege" value="<?php echo $this->input->post('privilege'); ?>" class="form-control" id="privilege" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="signature_daf" class="control-label">Signature Daf</label>
						<div class="form-group">
							<input type="file" name="signature_daf" class="form-control" id="signature_daf"><?php echo $this->input->post('signature_daf'); ?></input>
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