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
        <p>Votre réservation à bien été enregistrée ! <p>
      <?php echo anchor('Reservations/formulaireReservationUser','Réserver à nouveau'); ?>
        <br/>
      <?php echo'<br>'. anchor('Home','Retour à la page d\'accueil'); ?>
        </div>
    </body>
</html>
