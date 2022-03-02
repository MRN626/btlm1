<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Dg Edit</h3>
            </div>
			<?php echo form_open('dg_controller/edit/'.$tb_dg['dg_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="date_creation" class="control-label">Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo ($this->input->post('date_creation') ? $this->input->post('date_creation') : $tb_dg['date_creation']); ?>" class="has-datetimepicker form-control" id="date_creation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="privilege" class="control-label">Privilege</label>
						<div class="form-group">
							<input type="text" name="privilege" value="<?php echo ($this->input->post('privilege') ? $this->input->post('privilege') : $tb_dg['privilege']); ?>" class="form-control" id="privilege" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="signature_dg" class="control-label">Signature Dg</label>
						<div class="form-group">
							<input type="file" name="signature_dg" class="form-control" id="signature_dg"><?php echo ($this->input->post('signature_dg') ? $this->input->post('signature_dg') : $tb_dg['signature_dg']); ?></input>
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