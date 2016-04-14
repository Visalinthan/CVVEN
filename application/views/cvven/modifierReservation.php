<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modification d'une réservation</title>
    </head>
    <style>
        form {
           margin-left: auto;
           margin-right: auto;
           width : 400px;
        }
        
         .autre label {
            display: block;
            width: 150px;
            float: left;
        }  
          fieldset {
            margin-left: auto;
            margin-right: auto;
            width : 350px;
        }
      
    </style> 
    <body>
        <?php
        echo form_open('Reservations/modificationReservation');
        ?>
        <div align='center'>
        <h2><?php echo $titre .$id ?></h2>
        </div>
        <form>
            <fieldset>
            <div class='autre'>
            <?php 
            echo"<input type='hidden' name='idReserv' value='$id'>"
                . " <input type='hidden' name='client' value='$Client'><p>"; ?>
            <label>Date d'arrivée :</label>
            <input type="date" size="10" id="Date_Arrivee" name="newDateArriv" placeholder="AAAA-MM-JJ" autofocus/>
            <br/>
            <br/>
            <label>Date de départ :</label>
            <input type="date" size="10" id="Date_Depart" name="newDateDep" placeholder="AAAA-MM-JJ"/>
            <br/>
            <br/>
            <label>Nombre de personne :</label>
            <input type="number" size="5" id="	Nb_Personnes" name="newNbPers"/>
            <br/>
            <br/>
            <label>Ménage :</label>
            <select name="newMenage" size="1">
                <option value="1">Oui</option>
                <option value="0">Non </option>
            </select>
            <br/>
            </div>
            <label>Restauration :</label> 
            <input type="radio" name="newresto" value="Demi-pension" checked>Demi-pension
            <input type="radio" name="newresto" value="Pension-complète">Pension complète
            <br/>
            <br/>
            <div align='center'>
            <input type="submit" name="ok" value="Enregistrer"/>
            </div>
        </form>
        </fieldset>
        <br/>
        <div align='center'>
        <?php echo anchor('Reservations/listeUtilisateur','Revenir à la liste des utilisateurs'); ?>
        </div>
    </body>
</html>
