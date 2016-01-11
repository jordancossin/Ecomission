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
<?php
    include '_v_header.php';
?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-bookmark"></span> Navigation</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <a href="index.php?uc=gererFrais&action=saisirFrais" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-plus-sign"></span> <br/>Saisir fiche de frais</a>
                        <a href="index.php?uc=etatFrais&action=selectionnerMois" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Mes fiches de frais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include '_v_footer.php';
?>