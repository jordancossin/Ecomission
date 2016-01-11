<?php

include("connection.php");
$state_id = trim(mysql_escape_string($_POST["state_id"]));

$sql = "SELECT conditionnement FROM produits WHERE id_prod = ".$id_prod ." ORDER BY prix";
$count = mysqli_num_rows( mysqli_query($con, $sql) );
if ($count > 0 ) {
$query = mysqli_query($con, $sql);
?>
<label>Conditionnement:
<select name="conditionnement" name="box">
    <option value="">Selectionner le conditionnement</option>
    <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["conditionnement"]; ?></option>
    <?php } ?>
</select>
</label>

<label>
<INPUT type=number value="1" min="1" max="99"><BR>
</label>

<?php
    }

?>