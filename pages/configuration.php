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