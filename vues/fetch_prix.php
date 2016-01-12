<?php


$con= mysqli_connect("localhost", "root", "", "ecomission");
$id_prod = trim(mysql_escape_string($_POST["id_prod"]));

$sql = "SELECT prix FROM produits WHERE id_prod = ".$id_prod ." ORDER BY prix";
$count = mysqli_num_rows( mysqli_query($con, $sql) );
if ($count > 0 ) {
$query = mysqli_query($con, $sql);
?>
<label>Conditionnement:
<select name="Prix" name="box">
    <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["conditionnement"]; ?></option>
    <?php } ?>
</select>
</label>

<label>Quantité souhaitée
<INPUT type=number value="1" min="1" max="99"><BR>
</label>

<?php
    }

?>