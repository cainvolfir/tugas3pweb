<div class="row">
	<div class="col-md-6">
		<div class="card shadow border-0 mb-4">
			<div class="card-header bg-secondary text-white d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
				<div>
					<h5 class="mb-0 fw-bold"><?php echo isset($button) && $button === 'Update' ? 'Ubah Prodi' : 'Tambah Prodi'; ?></h5>
				</div>
				<a class="btn btn-light" href="<?php echo base_url('prodi') ?>">Kembali</a>
			</div>
			<div class="card-body">
				<form action="<?php echo $action; ?>" method="post" novalidate>
					<div class="mb-3">
                        <label for="fakultas_id" class="form-label">Fakultas</label>
                        <select name="fakultas_id" id="fakultas_id" class="form-select <?php echo form_error('fakultas_id') ? 'is-invalid' : (isset($_POST['fakultas_id']) ? 'is-valid' : ''); ?>">
                            <option value="">-- Pilih Fakultas --</option>
                            <?php foreach ($fakultas as $f): ?>
                                <option value="<?php echo $f['fakultas_id']; ?>"
                                    <?php echo set_select('fakultas_id', $f['fakultas_id'], (isset($prodi['fakultas_id']) && $prodi['fakultas_id'] == $f['fakultas_id'])); ?>>
                                    <?php echo $f['fakultas_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (form_error('fakultas_id')): ?>
                            <div class="invalid-feedback"><?php echo form_error('fakultas_id'); ?></div>
                        <?php endif; ?>
                    </div>
					<div class="mb-3">
                        <label for="prodi_name" class="form-label">Nama Prodi</label>
                        <input type="text" name="prodi_name" id="prodi_name" class="form-control <?php echo form_error('prodi_name') ? 'is-invalid' : (isset($_POST['prodi_name']) ? 'is-valid' : ''); ?>" value="<?php echo set_value('prodi_name', isset($prodi['prodi_name']) ? $prodi['prodi_name'] : ''); ?>" placeholder="Masukkan Nama Prodi">
                        <?php if (form_error('prodi_name')): ?>
                            <div class="invalid-feedback"><?php echo form_error('prodi_name'); ?></div>
                        <?php endif; ?>
					</div>
                    <div class="mb-3">
                        <label for="prodi_strata" class="form-label">Strata Prodi</label>
                        <select name="prodi_strata" id="prodi_strata" class="form-select <?php echo form_error('prodi_strata') ? 'is-invalid' : (isset($_POST['prodi_strata']) ? 'is-valid' : ''); ?>">
                            <option value="">-- Pilih Strata Prodi --</option>
                            <option value="D3" <?php echo set_select('prodi_strata', 'D3', (isset($prodi['prodi_strata']) && $prodi['prodi_strata'] == 'D3')); ?>>D3</option>
                            <option value="S1" <?php echo set_select('prodi_strata', 'S1', (isset($prodi['prodi_strata']) && $prodi['prodi_strata'] == 'S1')); ?>>S1</option>
                            <option value="S2" <?php echo set_select('prodi_strata', 'S2', (isset($prodi['prodi_strata']) && $prodi['prodi_strata'] == 'S2')); ?>>S2</option>
                        </select>
                        <?php if (form_error('prodi_strata')): ?>
                            <div class="invalid-feedback"><?php echo form_error('prodi_strata'); ?></div>
                        <?php endif; ?>
                    </div>
					<div class="d-flex gap-2">
						<button type="submit" class="btn btn-primary"><?php echo isset($button) ? $button : 'Simpan'; ?></button>
						<a href="<?php echo base_url('prodi') ?>" class="btn btn-secondary">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
