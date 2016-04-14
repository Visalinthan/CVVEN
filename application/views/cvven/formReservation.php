<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Réservation d'un séjour</title>
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
        echo form_open('Reservations/formulaireReservationUser');
        ?>
        <div align='center'>
        <h3>Réservation d'un séjour</h3>
        </div>
        <form>
            <fieldset>
            <div class='autre'>
            
            <?php
              
                
                foreach ($utilisateur as $news_util):
                    echo "<input type='hidden' name='idClient' value =".$news_util["idUtil"].">";
                endforeach;
         
                ?>
            <br/>
            <br/>
            <label>Date d'arrivée :</label>
            <input type="date" size="10" id="Date_Arrivee" name="dateArriv" placeholder="AAAA-MM-JJ" autofocus/>
            <br/>
            <br/>
            <label>Date de départ :</label>
            <input type="date" size="10" id="Date_Depart" name="dateDep" placeholder="AAAA-MM-JJ"/>
            <br/>
            <br/>
            <label>Nombre de personne :</label>
            <input type="number" size="20" id="	Nb_Personnes" name="NbPers"/>
            <br/>
            <br/>
            <label>Ménage :</label>
            <select name="Menage" size="1">
                <option value="1">Oui</option>
                <option value="0">Non </option>
            </select>
            <br/>
            <br/>
            </div>
            <label>Restauration :</label> 
            <input type="radio" name="Resto" value="Demi-pension" checked>Demi-pension
            <input type="radio" name="Resto" value="Pension complète">Pension complète
            <br/>
            <br/>
            <div align='center'>
            <input type="submit" value="Enregistrer"/>
            </div>
        </form>
        </fieldset>
        <br/>
        <div align='center'>
         <?php echo anchor('home','Retour'); ?>
    
    </body>
</html>
