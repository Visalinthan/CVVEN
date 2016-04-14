<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Succès Réservation</title>
    </head>
    <body>
        <div align="center">
        <p>La réservation à bien été enregistrée ! <p>
      <?php echo anchor('Reservations/formulaireReservation','Réserver à nouveau'); ?>
        <br/>
      <?php echo'<br>'. anchor('Reservations/listeUtilisateur','Revenir à la liste des utilisateurs'); ?>
        </div>
    </body>
</html>
