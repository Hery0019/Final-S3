<?php
    $listeCeuilleures = select("select * from personnes where idCateg = 2");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['dateDepense']) && isset($_POST['poidsMin'])) {
            $employe = $_POST['employe'];
            $poidsMin = $_POST['poidsMin'];

            poid_min($employe,$poidsMin);
        }
    }

?>


<div class="results">
        <h3>Configuation des Salaires des Employes :</h3>
        <hr>
            <div class="login">
                <h3>L'Employe :</h3>
                <select name="employe" id="" class="form-control">
                    <option value="1">me</option>
                    <option value="1">me</option>
                    <option value="1">me</option>
                    <option value="1">me</option>
                    <option value="1">me</option>
                </select>
                <p>Date Debut :</p>
                <p><input type="date" name="debut" class="form-control"></p>
                <p>Date Fin :</p>
                <p><input type="date" name="fin" class="form-control"></p>
                <p>Valeur Salaire :</p>
                <p><input type="number" name="salaire" class="form-control"></p>
                <p><input type="submit" value="Sauvegarder" id="submit" class="form-control" ></p>
            </div>
    </div>
    <div class="results">
        <h3>Configuation du Poid minimum pour un Employe :</h3>
        <hr>
        <form action="" method="post">
            <div class="login">
                <h3>L'Employe :</h3>
                    <select name="employe" id="" class="form-control">
                        <?php foreach($listeCeuilleures as $listeCeuilleure)  {?>
                            <option value="<?php echo $listeCeuilleure['idPers'] ?>"><?php echo $listeCeuilleure['nomPers'] ?></option>
                        <?php } ?>
                    </select>
                    <p>Poid minimum (kg)</p>
                    <p><input type="number" class="form-control"></p>
                    <p><input type="submit" name="poidsMin" id="submit" class="form-control" value="Sauvegarder"></p>
            </div>
        </form>
    </div>