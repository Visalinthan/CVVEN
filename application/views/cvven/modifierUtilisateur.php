<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Modifier un utilisateur</title>
    </head>
    <style>
        form {
           margin-left: auto;
           margin-right: auto;
           width : 300px;
        }
        
         label {
            display: block;
            width: 120px;
            float: left;
        }
        
        fieldset {
            margin-left: auto;
            margin-right: auto;
            width : 270px;
        }
      
        </style> 
    <body>
        <?php
        echo validation_errors();
        echo form_open('Reservations/modificationUtilisateur');
        ?>
        <div align="center">
        <h3>Modifier un utilisateur</h3>
        </div>
        <form>
            <fieldset>
            <label>Identifiant :</label>
            <?php
            echo "<select name='modifid'>"
            . "<option value='0' selected='selected'>Sélectionner l'utilisateur </option>";
            foreach($utilisateur as $news_util):
                echo"<option value=\"".$news_util['idUtil']." \">".$news_util['idUtil'].
                    " (".$news_util['Nom']." - ".$news_util['Prenom'].")</option>";
            endforeach;
            echo '</select>';
            ?>
            <br/>
            <br/>
            <label>Nom :</label>
            <input type="text" size="20" id="Prenom" name="newNom"/>
            <br/>
            <br/>
            <label>Prénom :</label>
            <input type="text" size="20" id="Prenom" name="newPrenom"/>
            <br/>
            <br/>
            <label>Login :</label>
            <input type="text" size="20" id="login" name="newLogin"/>
            <br/>
            <br/>
            <label>Mot de passe :</label>
            <input type="text" size="20" id="password" name="newPassword"/>
            <br/>
            <br/>
            <label>Admin :</label>
            <select name = 'newAdmin'>
                <option value = 'Oui'>Oui</option>
                <option value = 'Non'>Non</option>
            </select>
            <br/>
            <br/>
            <div align='center'>
            <input type='submit' name ='valider' value ='Valider'/>
            <br/>
            </div>
        </form>
        </fieldset>
            <br/>
            <div align="center">
           <?php echo anchor('Reservations/listeUtilisateur','Revenir &agrave; la liste des utilisateurs'); ?>
            </div>
    </body>
</html>