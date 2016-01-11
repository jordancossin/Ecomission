<?php

$con= mysql_connect("localhost", "root", "root");
$country_id = trim(mysql_escape_string($_POST["country_id"]));

$sql = "SELECT * FROM produits WHERE id_fourn = ".$id_fourn ." ORDER BY libelle";
$count = mysqli_num_rows( mysqli_query($con, $sql) );
if ($count > 0 ) {
$query = mysqli_query($con, $sql);
?>
<label>produit:
<select name="produits" id="drop2">
    <option value="">Please Select</option>
    <?php while ($rs = mysqli_fetch_array($query, MYSQLI_ASSOC)) { ?>
    <option value="<?php echo $rs["id"]; ?>"><?php echo $rs["produit_name"]; ?></option>
    <?php } ?>
</select>
</label>
<?php
    }

?>

<script src="jquery-1.9.0.min.js"></script>
<script>
$(document).ready(function(){


$("select#drop2").change(function(){

    var id_prod = $("select#drop2 option:selected").attr('value');
   // alert(id_prod);
    if (id_prod.length > 0 ) {
     $.ajax({
            type: "POST",
            url: "fetch_conditionnement.php",
            data: "id_prod="+id_prod,
            cache: false,
            beforeSend: function () {
                $('#conditionnement').html('<img src="loader.gif" alt="" width="24" height="24">');
            },
            success: function(html) {
                $("#conditionnement").html( html );
            }
        });
    } else {
        $("#conditionnement").html( "" );
    }
});

});
</script>