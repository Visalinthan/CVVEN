<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<style type="text/css">
  

   
</style>
    <head>
        <meta charset="UTF-8">
        <title>Les réservations</title>
    </head>
    <body>
        <div align='center'>
        <h2><?php echo "Les réservations du Client n° $num"; ?></h2>
       
        <?php
        echo form_open('Reservations/modificationReservation');
        ?>
        
        <?php
        if (empty($reserv)) {
            echo"Ce client n'a aucune résevation.<p>";
            echo anchor('Reservations/formulaireReservationUser', 'Ajouter une réservation');
        }
        
        else {
            echo "<table cellpadding='5' border='2'><tr>"
            . "<input type='hidden' name='idClient' value='$num'>"
                    . "<td>" . anchor('Reservations/formulaireReservationAdmin', 'Ajouter une réservation') . "</td>
                       <td> ID Client</td>
                       <td> ID Réservation</td>
                       <td> Date arrivée</td>
                       <td> Date départ</td>
                       <td> Nombre de personnes</td>
                       <td> Ménage</td>
                       <td> Etat de la réservation</td></tr>";
            
            foreach ($reserv as $news_reserv):
                echo "<tr>"
                . "<td><input type='radio' name='idReserv' Value=" . $news_reserv['idReserv'] . "></td>
                   <td>" . $news_reserv['idClient'] . "</td>
                   <td>" . $news_reserv['idReserv'] . "</td>
                   <td>" . $news_reserv['Date_Arrivee'] . "</td>
                   <td>" . $news_reserv['Date_Depart'] . "</td>
                   <td>" . $news_reserv['Nb_Personnes'] . "</td>
                   <td>" . $news_reserv['Menage'] . "</td>
                   <td>" . $news_reserv['EtatReservation'] . "</td></tr>";
            endforeach;
            
            echo"<tr><td colspan='8'>
             <div align='center'>
             <input type='submit' name='modif' value='Modifier cette réservation' /> 
             </div></td></tr></table></form>";
        }
      
        ?><br>
       
         <input type="button" value="Supprimer un utilisateur"  style="position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background:#FF8000;
    font-size: 18px;
    text-align: center;
    font-style: normal;
   
    border: 1px solid #FF8000;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;" onclick="window.location='<?php echo site_url("reservations/suppressionReserv");?>'"/><br>
<?php
 echo'<br>'. anchor('Reservations/listeUtilisateur','Revenir à la liste des utilisateurs');
 ?>
        </div>
    </body>
</html>

