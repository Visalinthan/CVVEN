<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
    <body>
        <div algin="center">
            <p>Votre inscription a bien été enregistré ! </p>
        </div>
        <?php
        echo anchor('reservations/inscription', 'Nouvelle inscription');
        echo'<br>'. anchor('Reservations/listeUtilisateur','Revenir à la liste des utilisateurs');
        ?>
        </div>
    </body>
</html>
