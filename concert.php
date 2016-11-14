<!DOCTYPE html>
<head>
    <?php
    $title = 'Bandy - Mes concerts';
    include('header.php');
    ?>
</head>
<body>
<?php
include('navbar.php');
include('sidebar.php');
?>
<div class="bandy-container">
    <h1 style="font-family: 'Great Day Personal Use'; padding-left: 30px;">Mes concerts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" class="checkbox"></th>
            <th>Salle</th>
            <th>Date</th>
            <th>Commence à</th>
            <th>Annoncé sur</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td><a href="#">O'Treyfle</a></td>
            <td>13/12/2016</td>
            <td>20:00</td>
            <td><img src="img/twitter-icon.png" width="45" height="45">  <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td><a href="#">Bar du coin-coin</a></td>
            <td>14/12/2016</td>
            <td>20:00</td>
            <td><img src="img/twitter-icon.png" width="45" height="45">  <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        </tbody>
    </table>
    <div style="text-align: center">
        <button class="btn btn-success">
            <span class="glyphicon glyphicon-plus"></span>&nbsp;Trouver une salle
        </button>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</DOCTYPEhtml>
