<?php
include_once('top.php');
include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM unit";
$units = $dbh->query($query);
?>
<div class="container-fluid px-4">
    <div class="d-flex mt-4">
        <h3 class="me-auto">Unit Kerja</h3>
        <a href="unit_create.php" class="btn btn-primary">+ Unit</a>
    </div>
    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Opsi</th>
        </tr>
        <?php
        $no = 0;
        foreach($units as $unit): ?>
        <tr>
            <td><?= $no += 1; ?></td>
            <td><?= $unit ["unit"] ?></td>
            <td>
                <a href="unit_edit.php?id=<?= $unit['id'] ?>" class="btn btn-primary">
                    <i class = "fas fa-edit"></i>
                </a>
                <a href="unit_delete.php?id=<?= $unit['id'] ?>" class="btn btn-danger">
                    <i class = "fas fa-trash"></i>
                </a>    
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>

<?php
include_once('bottom.php');
?>