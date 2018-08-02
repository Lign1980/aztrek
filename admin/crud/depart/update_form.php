<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$depart = getOneEntity("depart", $id);

$list_sejours = getAllEntities("sejour");

require_once '../../layout/header.php';
?>

<h1>Modifier un depart</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
            <input type="text" name="titre" value="<?php echo $depart["titre"]; ?>" class="form-control" placeholder="Titre">
        </div>
    </div>
    
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Date de depart</label>
        <div class="col-sm-10">
            <input type="date" name="date_depart" value="<?php echo $depart["date_depart"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" value="<?php echo $depart["prix"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombres de places</label>
        <div class="col-sm-10">
            <input type="number" name="nb_places" value="<?php echo $depart["nb_places"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Sejour</label>
        <div class="col-sm-10">
            <select name="sejour_id" class="form-control">
                <?php foreach ($list_sejour as $sejour) : ?>
                    <?php $selected = ($sejour["id"] == $sejour["sejour"]) ? "selected" : ""; ?>
                <option value="<?php echo $depart["id"]; ?>" <?php echo $selected; ?>>
                        <?php echo $sejour["titre"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

