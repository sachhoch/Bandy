<!DOCTYPE html>
<head>
    <?php
    $title = 'Bandy - Mes musiques';
    include('header.php')
    ?>
</head>
<body>
<?php
include('navbar.php');
include('sidebar.php');
?>
<div class="bandy-container">
    <h1 style="font-family: 'Great Day Personal Use'; padding-left: 30px;">Mes musiques</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th><input type="checkbox" class="checkbox"></th>
            <th>Nom</th>
            <th>Type</th>
            <th>Durée</th>
            <th>Diffusée sur</th>
            <th>Partagée sur</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td>All My Nights</td>
            <td>Stoner Rock</td>
            <td>4:30</td>
            <td><img src="img/spotify-icon.png" width="45" height="45"> <img src="img/itunes-icon.png" width="50" height="50"></td>
            <td><img src="img/twitter-icon.png" width="45" height="45">  <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td>What About Us ?</td>
            <td>Fragile Pop</td>
            <td>5:27</td>
            <td><img src="img/spotify-icon.png" width="45" height="45"> <img src="img/itunes-icon.png" width="50" height="50"></td>
            <td><img src="img/twitter-icon.png" width="45" height="45"> <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td>No One Could Understand</td>
            <td>Reggae Metal</td>
            <td>3:43</td>
            <td><img src="img/spotify-icon.png" width="45" height="45"> <img src="img/itunes-icon.png" width="50" height="50"></td>
            <td><img src="img/twitter-icon.png" width="45" height="45"> <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td>What Is Love ?</td>
            <td>Fragile Pop</td>
            <td>5:27</td>
            <td><img src="img/spotify-icon.png" width="45" height="45"> <img src="img/itunes-icon.png" width="50" height="50"></td>
            <td><img src="img/twitter-icon.png" width="45" height="45"> <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        <tr>
            <td><input type="checkbox" class="checkbox"></td>
            <td>Darude Sandstorm</td>
            <td>Fragile Pop</td>
            <td>5:27</td>
            <td><img src="img/spotify-icon.png" width="45" height="45"> <img src="img/itunes-icon.png" width="50" height="50"></td>
            <td><img src="img/twitter-icon.png" width="45" height="45"> <img src="img/facebook-icon.png" width="55" height="55"></td>
            <td><button class="btn btn-default">Éditer</button><button class="btn btn-default btn-danger">Supprimer</button></td>
        </tr>
        </tbody>
    </table>
    <div style="text-align: center">
        <button class="btn btn-success">
            <span class="glyphicon glyphicon-plus"></span>&nbsp;Ajouter une musique
        </button>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</DOCTYPEhtml>