<?php

$con= mysqli_connect("localhost", "root", "", "ecomission");
$id_fourn = $_POST["id_fourn"];

$sql = "SELECT id_prod, libelle_produit, prix  FROM produits WHERE id_fourn = ".$id_fourn ." ORDER BY libelle_produit";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($count > 0 ) {
$query = mysqli_query($con, $sql);
?>
<label>Produit:
<select name="Produits" id="drop2">
    <option value="">Selection d'un produit</option>
    <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
    <option value="<?php echo $rs["id_prod"]; ?>"><?php echo ' '.$rs["libelle_produit"].' - '.$rs["prix"].' €'; ?> </option>
    <?php } ?>
</select>
</label>
<?php
    }

?>

