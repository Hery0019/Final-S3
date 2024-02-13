<?php 
    $listeCeuilleures = select("select * from personnes where idCateg = 2");
?>

    <div class="results">
        <p>Liste des Cueilleurs :</p>
        <hr>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Genre</th>
                <th>Date de naissance</th>
            </tr>
            <?php foreach ($listeCeuilleures as $listeCeuilleure) {?>
                <tr>
                    <td><?php echo $listeCeuilleure['nomPers'] ?></td>
                    <td><?php echo $listeCeuilleure['genre'] ?></td>
                    <td><?php echo $listeCeuilleure['date_naissance'] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="results">
        <center>
            <!-- nom , genre m/f , date naissance , mdp -->
            <form action="" method="get">
                <div class="login">
                <h3>Insertion de Cueilleur</h3> 
                <p>Nom :</p>
                <p> <input type="text"  name="value" class="form-control"> </p>
                <p>Genre :</p>
                <p>
                    <select name="genre" id="" class="form-control">
                        <option value="unchecked"></option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                </p>
                <p>Date naissance : </p>
                <p> <input type="date"  name="date_naissance" class="form-control"> </p>
                <p>Mot de Passe : </p>
                <p> <input type="password"  name="password" class="form-control"> </p>
                <p> <input type="submit" value="Envoyer" class="form-control" id="submit"></p>
                </div>
            </form>
        </center>

    </div>