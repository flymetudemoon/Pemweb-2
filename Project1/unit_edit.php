<?php
include_once('koneksi.php');

$id = $_GET['id'];
$unit = $dbh->query("SELECT * FROM unit WHERE id = $id")->fetch();

include_once('top.php');
include_once('menu.php');
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Unit Kerja</h1>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form  action="unit_update.php" method="post" >
            <input type="hidden" name="id" value="<?= $unit['id'] ?>" >
            <div class="form-group row">
                <label for="unit" class="col-4 col-form-label">Unit</label>
                <div class="col-8">
                    <input id="unit" name="unit" type="text" class="form-control" required="required" value="<?= $unit['unit'] ?>">
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