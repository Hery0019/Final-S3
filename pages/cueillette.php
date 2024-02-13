<?php 
    $historiqueCueilletes = select("select * from vue_histo_cueillettes where idPers = " . $idPers);
    $listeVarietes = select ("select * from variete");
    $listeParcelles = select("select * from parcelles");
    $newHisto = null;
    $validation = "";
    $messageError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs sont définis et non vides
        if (isset($_POST['dateCueillette']) && isset($_POST['idParcelle']) && isset($_POST['poidsNet'])) {
            $dateCueillette = $_POST['dateCueillette'];
            $idParcelle = $_POST['idParcelle'];
            $poidsNet = $_POST['poidsNet'];   
        }
        $validation = validation_ajax($poidsNet, $idParcelle, $dateCueillette, $idPers) ;
        if ($validation == 'invalide') {
            $messageError = "Votre poids net est au dessus des reserves";
        } else {
            $newHisto = insert_histo_cueillette($idPers, $dateCueillette, $idParcelle, $poidsNet);
        }
    }

?>

    <div class="results">
        <p>Liste de Vos Cueillettes :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Date de cueillette</th>
                <th>Nom du variete</th>
                <th>Surface</th>
                <th>Poids</th>
            </tr>

            <?php foreach ($historiqueCueilletes as $historiqueCueillete) {?>
                <tr>
                    <td><?php echo $historiqueCueillete['date_cueillettes'] ?></td>
                    <td><?php echo $historiqueCueillete['nomVariete'] ?></td>
                    <td><?php echo $historiqueCueillete['surface'] ?></td>
                    <td><?php echo $historiqueCueillete['poids'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="results">
    <center>
        <span style="color: red;"><?php echo $messageError; ?></span>
        <form id="myForm" action="" method="post">
            <div class="login">
            <h3>Insertion de Cueillette</h3>
            <p>Date de Cueillette :</p>
            <p> <input type="date" name="dateCueillette" id="dateCueillette" class="form-control"></p>
            
            <p>Choix de Parcelle :</p>
            <p>
                <select name="idParcelle" id="idParcelle" class="form-control">
                    <option value="unchecked">Choisir parcelle</option>
                    <?php foreach ($listeParcelles as $listeParcelle) { ?>
                        <option value="<?php echo $listeParcelle['idParcelle'] ?>"><?php echo $listeParcelle['idParcelle'] ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>Poid net :</p>
            <p> <input type="number"  name="poidsNet" id="poidsNet" class="form-control"></p>
            <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
            </div>
        </form>
    </center>
    </div>
    

    <script type="text/javascript">
        window.addEventListener("load", function () {
        var daty=document.getElementById("dateCueillette");
        var idParcelle=document.getElementById("idParcelle");
        var poidsNet = document.getElementById("poidsNet");


    function sendData() {
        var xhr; 
        try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
        catch (e) 
        {
            try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
            catch (e2) 
            {
            try {  xhr = new XMLHttpRequest();  }
            catch (e3) {  xhr = false;   }
            }
        }

        // Liez l'objet FormData et l'élément form
        var formData = new FormData(form);

        // Définissez ce qui se passe si la soumission s'est opérée avec succès
        xhr.addEventListener("load", function(event) {
        $msg=(event.target.responseText!="")?event.target.responseText:"OK";
        alert($msg);
        });

        if (jsonResponse.success) {
              alert(jsonResponse.message);
            }
            else{
              if (typeof jsonResponse.reste !== 'undefined') {
                inputPoid.classList.add('is-invalid');
                var reste = document.getElementById('reste');
                reste.textContent =jsonResponse.reste;

              } else {
              alert('Erreur : ' + jsonResponse.message); 
              }
            }

        // Definissez ce qui se passe en cas d'erreur
        xhr.addEventListener("error", function(event) {
        alert('Oups! Quelque chose s\'est mal passé.');
        });

        // Configurez la requête
        xhr.open("POST", "../pages/ajax.php");
        // Les données envoyées sont ce que l'utilisateur a mis dans le formulaire
        xhr.send(formData);
    }
    // Accédez à l'élément form …
    var form = document.getElementById("myForm");

    // … et prenez en charge l'événement submit.
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // évite de faire le submit par défaut

        sendData();
    });
    });



    </script>