<!DOCTYPE html>
<html>
<head>
    <title>Les Petits Paniers</title>
    <meta charset="UTF-8" />
    <meta lang="fr">
    <!-- Main Styles -->
    <link rel="stylesheet" type="text/css" href="styles/templatemo_style.css">
    <link rel="stylesheet" type="text/css" href="styles/screen.css" />
    <link rel="stylesheet" type="text/css" href="styles/coop.css" />
    <link rel="stylesheet" type="text/css" href="styles/default.css" />
    <link rel="stylesheet" type="text/css" href="styles/component.css" />
    <link  rel= "stylesheet"  href= "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" >
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModal.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <div class="row">
        <h2>Renseigner ma commande du mois <?php echo $numMois . "-" . $numAnnee ?></h2>
        <hr>
        <div class="row">
            <div class="panel panel-info">
                <div class="panel-heading">Descriptif des éléments hors forfait</div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="date">Date</th>
                            <th class="libelle">Libellé</th>
                            <th class="montant">Conditionnement</th>
                            <th class="montant">Montant</th>
                            <th class="action">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lesFraisHorsForfait as $unFraisHorsForfait) {
                            $libelle = htmlspecialchars($unFraisHorsForfait['libelle']);
                            $date = $unFraisHorsForfait['date'];
                            $montant = $unFraisHorsForfait['montant'];
                            $id = $unFraisHorsForfait['id'];
                            ?>
                            <tr>
                                <td> <?php echo $date ?></td>
                                <td> <?php echo $libelle ?></td>
                                <td><?php echo $montant ?></td>
                                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>"
                                 onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer ce frais</a></td>
                             </tr>
                             <?php
                         }
                         ?>
                     </tbody>
                 </table>
             </div>
         </div>
         <div class="row">
            <h3>Nouvel élément de ma commande</h3>
            <div class="col-md-4">
                <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post" role="form">
                    <div class="form-group">
                        <label for="txtDateHF">Date (jj/mm/aaaa): </label>
                        <input type="text" id="txtDateHF" name="dateFrais" class="form-control" id="text">
                    </div>
                    <div class="form-group">
                        <label for="txtLibelleHF">Libellé</label>
                        <input type="text" id="txtLibelleHF" name="libelle" class="form-control" id="text">
                    </div>
                    <div class="form-group">
                        <label for="txtMontantHF">Montant : </label>
                        <div class="input-group">
                            <span class="input-group-addon">€</span>
                            <input type="text" id="txtMontantHF" name="montant" class="form-control" value="">
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Ajouter</button>
                    <button class="btn btn-danger" type="reset">Effacer</button>
                </form>
            </div>
        </div>

    </body>