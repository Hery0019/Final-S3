<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez si le tableau 'mois' existe dans $_POST
    if(isset($_POST['mois'])) {
        // Parcourir les éléments sélectionnés
            insert_generer($_POST['mois']);
    } else {
        echo "Aucun mois sélectionné";
    }
}
?>


<h3>Mois de Regeneration des Thés :</h3>
<form action="" method="post">
    <table class="table">
        <tr>
            <td><input type="checkbox" name="mois[]" value="1"> Janvier</td>
            <td><input type="checkbox" name="mois[]" value="2"> Février</td>
            <td><input type="checkbox" name="mois[]" value="3"> Mars</td>
            <td><input type="checkbox" name="mois[]" value="4"> Avril</td>
            <td><input type="checkbox" name="mois[]" value="5"> Mai</td>
            <td><input type="checkbox" name="mois[]" value="6"> Juin</td>
        </tr>
        <tr>
            <td><input type="checkbox" name="mois[]" value="7"> Juillet</td>
            <td><input type="checkbox" name="mois[]" value="8"> Août</td>
            <td><input type="checkbox" name="mois[]" value="9"> Septembre</td>
            <td><input type="checkbox" name="mois[]" value="10"> Octobre</td>
            <td><input type="checkbox" name="mois[]" value="11"> Novembre</td>
            <td><input type="checkbox" name="mois[]" value="12"> Décembre</td>
        </tr>
    </table>
    <div class="results">
        <input type="submit" class="form-control" id="submit" value="Sauvegarder" width="300px">
    </div>
</form>
