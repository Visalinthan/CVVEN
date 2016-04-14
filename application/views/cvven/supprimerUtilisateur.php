<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Supprimer un utilisateur</title>
    </head>
        <style>
        fieldset {
            margin-left: auto;
            margin-right: auto;
            width : 200px;
        }
        </style> 
    <body>
        <?php
        echo validation_errors();
        echo form_open('Reservations/supprimerUtilisateur');
        ?>
        <div align="center">
            <h3>Supprimer un utilisateur</h3>
        <fieldset>
        <?php
        echo '<select name="idSupprimer">';
        echo '<option value="0" selected="selected">Sélectionner l\'utilisateur </option>';
	foreach($utilisateur as $news_util):
            echo "<option value=\"".$news_util['idUtil']." \">".$news_util['idUtil'].
                " - ".$news_util['Prenom']." ".$news_util['Nom']." - Admin : ".$news_util['Admin']."</option>";
	endforeach;
	echo '</select>';
        ?>
        <br/>
        <br/>
        <input type='submit' name ='valider2' value ='Supprimer'/>
        </fieldset>
        </div>
        <br/>
            <div align="center">
            <?php echo anchor('Reservations/listeUtilisateur','Revenir &agrave; la liste des utilisateurs'); ?>
            </div>
    </body>
</html>
