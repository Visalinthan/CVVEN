<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des utilisateurs</title>
    </head>
    <style>
table{
margin:0px;padding:0px;
	  
               width:70%;
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
        background: bottom;
}
input[type="submit"] {
	 position: relative;
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
    margin-bottom: 10px;

}
    </style>
    <body>
        <div align="center">
        <h2>Liste des utilisateurs </h2>
        <table cellpadding='5' border='1'>
            <tr><td>
                <td>ID Client</td>
                <td>Login</td>
                <td>Mot de passe</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Administrateur</td></tr>
        <?php
        echo form_open('Reservations/afficherReservations');
        echo form_open('Reservations/modificationUtilisateur');
        
        foreach ($utilisateur as $news_util):

        echo "<tr>                
                <td><input type='radio' name='identifiant' value='" . $news_util['idUtil'] . "'></td>
                <td>" . $news_util['idUtil'] . "</td>
                <td>" . $news_util['login'] . "</td>
                <td>" . $news_util['password'] . "</td>
                <td>" . $news_util['Nom'] . "</td>
                <td>" . $news_util['Prenom'] . "</td>
                <td>" . $news_util['Admin'] . "</td>                
                </tr>";

        endforeach;
        ?>
        <tr><td colspan='7'>
                <div align="center">
                <input type='submit' name='voir' value='Voir ses réservations' style="border: none;
    padding: 8px 15px 8px 15px;
    background: #2980B9;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px; "></form>
               
                </div>
        <?php 
        echo"</form>";
        ?>
        </td></tr>
        </table>
        
        <p>Que souhaitez-vous faire ?</p>
        <fieldset style=" width:40%">
           <input type="submit" value="Ajouter un utilisateur"  onclick="window.location='<?php echo site_url("reservations/inscription");?>'"/><br>


          <input type="submit" value="Modifier un utilisateur" onclick="window.location='<?php echo site_url("reservations/modificationUtilisateur");?>'"/><br>
                   
                   <input type="submit" value="Supprimer un utilisateur" onclick="window.location='<?php echo site_url("reservations/supprimerUtilisateur");?>'"/><br>
            

        </fieldset>
        <br/>
            <?php echo anchor('Admin', "Retour à la page d'accueil") ?><br/>
        </div>
    </body>
</html>
