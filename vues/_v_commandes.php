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
                <div class="panel-heading">Descriptif des éléments de la commande</div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th class="date"> Date               </th>
                            <th class="libelle"> Libellé         </th>
                            <th class="montant"> Conditionnement </th>
                            <th class="montant"> Montant         </th>
                            <th class="action"> &nbsp;           </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lesElement as $unProduit) {
                            $fournisseur     = htmlspecialchars($unProduit['fournisseur']);
                            $produit         = htmlspecialchars($unProduit['libelle']);
                            $conditionnement = htmlspecialchars($unProduit['conditionnement']);
                            $date            = $unProduit['date'];
                            $montant         = $unProduit['montant'];
                            $id              = $unProduit['id'];
                            ?>
                            <tr>
                                <td> <?php echo $date ?>            </td>
                                <td> <?php echo $libelle ?>         </td>
                                <td> <?php echo $fournisseur ?>     </td>
                                <td> <?php echo $conditionnement ?> </td>
                                <td> <?php echo $montant ?>         </td>
                                <td> <a href="index.php?uc=gererFrais&action=supprimerElement&idElement=<?php echo $id ?>"
                                 onclick="return confirm('Voulez-vous vraiment supprimer cet élément?');">Supprimer cet élément</a></td>
                             </tr>
                             <?php
                         }
                         ?>
                     </tbody>
                 </table>
             </div>
         </div>
         <div class="row">


            <div id="container">
              <div id="body">
                <div class="mhead"><h2>Saisi d'un élément de la commande: </h2></div>
                <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post" role="form">
                    <div id="dropdowns">
                       <div id="center" class="cascade">
                          <?php
                          $sql = "SELECT * FROM fournisseurs ORDER BY nom";
                          $query = mysqli_query($con, $sql);
                          ?>
                            <label>Fournisseur:
                                <select name="Fournisseur" id = "drop1">
                                  <option value="">Selection d'un fournisseur</option>
                                  <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC )) { ?>
                                  <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["Fournisseur_name"]; ?></option>
                                  <?php } ?>
                                </select>
                            </label>
                        </div>

                  <div class="cascade" id="produit"></div>

                  <div id="city" class="cascade"></div>
              </div>
          </div>
      </div>
      <script src="jquery-1.9.0.min.js"></script>
      <script>
      $(document).ready(function(){
        $("select#drop1").change(function(){

            var id_fourn =  $("select#drop1 option:selected").attr('value'); // ATTENTION
// alert(id_fourn);
$("#produit").html( "" );
$("#conditionnement").html( "" );
if (id_fourn.length > 0 ) {

 $.ajax({
    type: "POST",
    url: "fetch_produit.php",
    data: "id_fourn="+id_fourn,
    cache: false,
    beforeSend: function () {
        $('#produit').html('<img src="loader.gif" alt="" width="24" height="24">');
    },
    success: function(html) {
        $("#produit").html( html );
    }
});
}
});
    });
      </script>


      <button class="btn btn-success" type="submit">Ajouter</button>
      <button class="btn btn-danger" type="reset">Effacer</button>
  </form>
</div>
</div>

</body>