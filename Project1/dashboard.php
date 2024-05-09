<?php
include_once('top.php');
include_once('menu.php');
?>

<div class="container-fluid px-4 text-center pt-3">
    <img src="img/logo.png" class="img-fluid" alt="...">
    <h3>Selamat Datang di Verth Care</h3>
</div>

<?php
include_once('bottom.php');
?>


<div class="form-group row">
            <label for="kategori" class="col-4 col-form-label">Kategori</label>
            <div class="col-8">
                <select id="kategori" name="kategori" class="custom-select" required="required">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="" required="required" <?= $paramedik['kategori'] == '' ? 'selected' : '' ?>></option>
                    <option value="" required="required" <?= $paramedik['kategori'] == '' ? 'selected' : '' ?>></option>
                    <option value="" required="required" <?= $paramedik['kategori'] == '' ? 'selected' : '' ?>></option>
                    <option value="" required="required" <?= $paramedik['kategori'] == '' ? 'selected' : '' ?>></option>
                    <option value="" required="required" <?= $paramedik['kategori'] == '' ? 'selected' : '' ?>></option>
                    <option value="" required="required" <?= $paramedik['kategori'] == '' ? 'selected' : '' ?>></option>
                </select>
            </div>
        </div>