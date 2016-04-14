<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mes réservations</title>
    </head>
    <body>
        <div align='center'>
        <h2><?php echo "Mes réservations"; ?></h2>
        <?php  echo form_open('Reservations/afficherReservationsUser'); ?>
        
        <form>
            <label for="idUtil">Veuillez saisir votre ID :</label>
            <input type="text" name="idUtil" />
            <br/>
            <br/>
            <input type="submit" name="afficher" value="Afficher" />
        </form>
        <br>
       
        <?php
            echo "<table cellpadding='5' border='2'><tr>"
                    . "<td> ID Client</td>
                       <td> ID Réservation</td>
                       <td> Date arrivée</td>
                       <td> Date départ</td>
                       <td> Nombre de personnes</td>
                       <td> Ménage</td>
                       <td> Etat de la réservation</td></tr>";
            
            foreach ($reserv as $news_reserv):
                echo "<tr>"
                . "<td>" . $news_reserv['idClient'] . "</td>
                   <td>" . $news_reserv['idReserv'] . "</td>
                   <td>" . $news_reserv['Date_Arrivee'] . "</td>
                   <td>" . $news_reserv['Date_Depart'] . "</td>
                   <td>" . $news_reserv['Nb_Personnes'] . "</td>
                   <td>" . $news_reserv['Menage'] . "</td>
                   <td>" . $news_reserv['EtatReservation'] . "</td></tr>";
            endforeach;
            echo "</table>";

       
        echo'<br>'. anchor('Reservations/formulaireReservationUser', 'Ajouter une réservation');
        echo'<br>'. anchor('Home','Retour à la page d\'accueil');
        ?>
        </div>
    </body>
</html>
