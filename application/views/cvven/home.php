<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<style>



 input[type=submit]{
            border: none;
    padding: 8px 15px 8px 15px;
    background: #FF8500;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px; 
        }
     
	table{
	  
               width:60%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
        background: bottom;}
td{color:red; }


</style>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <style>
        fieldset {
            margin-left: auto;
            margin-right: auto;
            width : 250px;
        }
        
        </style>
        <body><center><h3>Bienvenue <?php echo $login; ?> !</h3></center>
        
        <center>
         <?php
        if (empty($reserv)) {
            echo"Ce client n'a aucune résevation.<p>";
           
        }
        
        else {
            
             echo form_open('Reservations/supprimer');
            echo "<table cellpadding='5' > <tr style='color: red; background: skyblue;'>
    
           "
            
                    . " <td> </td>
                       <td> ID Client</td>
                       <td> ID Réservation</td>
                       <td> Date arrivée</td>
                       <td> Date départ</td>
                       <td> Nombre de personnes</td>
                       <td> Ménage</td>
                       <td> Etat de la réservation</td></tr>";
            
            foreach ($reserv as $news_reserv):
                echo "<tr>"
                . "<td style='color: black; background: whitesmoke;'><input type='radio' name='idReserv' Value=" . $news_reserv['idReserv'] . "></td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['idClient'] . "</td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['idReserv'] . "</td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['Date_Arrivee'] . "</td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['Date_Depart'] . "</td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['Nb_Personnes'] . "</td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['Menage'] . "</td>
                   <td style='color: black;background: whitesmoke;'>" . $news_reserv['EtatReservation'] . "</td></tr>";
            endforeach;
            
            echo"<tr style='background: whitesmoke;'><td colspan='8' >
             <div align='center'>
             <input type='submit' name='modif' value='Supprimer' /> 
             </div></td></tr></table>";
            }?></center>
        <br><br>
        <div align="center">
        
        <p>Que souhaitez-vous faire ?</p>
        </form>
        <fieldset>
          <input type="submit" value="Reserver un sejour"  style=" position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;

    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;" onclick="window.location='<?php echo site_url("reservations/formulaireReservationUser");?>'"/>
            
  
         
          <input type="submit" value="Changer mon mot de passe"  style=" position: relative;
    display: block;
    padding: 19px 39px 18px 39px;
    color: #FFF;
    margin: 0 auto;
    background: #1abc9c;
    font-size: 18px;
    text-align: center;
    font-style: normal;

    border: 1px solid #16a085;
    border-width: 1px 1px 3px;
    margin-bottom: 10px;" onclick="window.location='<?php echo site_url("changepassword/password");?>'"/><br>

        </fieldset>
        <div>
            <br>
         <a href="home/deconnexion">Deconnexion</a><br><br>
        </div>
        </div>
    </body>
</html>
