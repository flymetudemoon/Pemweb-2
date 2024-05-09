<?php
include_once('koneksi.php');
$unit = $dbh->query('SELECT * FROM unit');

$id = $_GET['id'];
$paramedik = $dbh->query("SELECT * FROM paramedik WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Paramedik</h1>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form  action="paramedik_store.php" method="post" >
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $paramedik['nama'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L" required="required"  <?= $paramedik['gender'] == 'L' ? 'checked' : '' ?>>
                        <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P" required="required"  <?= $paramedik['gender'] == 'P' ? 'checked' : '' ?>>
                        <label for="gender_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                <div class="col-8">
                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required" value="<?= $paramedik['tmp_lahir'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                <div class="col-8">
                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required" value="<?= $paramedik['tgl_lahir'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori" class="col-4 col-form-label">Kategori</label>
                <div class="col-8">
                <select id="kategori" name="kategori" class="custom-select" required="required">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="dokter" required="required" <?= $paramedik['kategori'] == 'dokter' ? 'selected' : '' ?>>dokter</option>
                    <option value="suster" required="required" <?= $paramedik['kategori'] == 'suster' ? 'selected' : '' ?>>suster</option>
                    <option value="perawat" required="required" <?= $paramedik['kategori'] == 'perawat' ? 'selected' : '' ?>>perawat</option>
                    <option value="cs" required="required" <?= $paramedik['kategori'] == 'cs' ? 'selected' : '' ?>>Cleaning Service</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="telpon" class="col-4 col-form-label">No Telpon</label>
                <div class="col-8">
                    <input id="telpon" name="telpon" type="number" class="form-control" required="required" value="<?= $paramedik['telpon'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat</label>
                <div class="col-8">
                    <textarea id="alamat" name="alamat" cols="40" rows="3" class="form-control" required="required"> <?= $paramedik['alamat'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="unit_kerja_id" class="col-4 col-form-label">ID Unit Kerja</label>
                <div class="col-8">
                    <select id="unit_kerja_id" name="unit_kerja_id" class="custom-select" required="required">
                        <option value="">-- Pilih --</option>
                        <?php foreach ($unit as $uni) : ?>
                            <option <?= $paramedik['unit_kerja_id'] == $uni['id'] ? 'selected' : '' ?> value="<?= $uni['id'] ?>"><?= $uni['unit'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>
<?php
include_once('bottom.php');
?>