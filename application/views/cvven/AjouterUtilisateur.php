<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajout d'un utilisateur</title>
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
            width : 250px;
        }
      
        </style> 
    <body>
        <?php
        echo validation_errors();
        echo form_open('Reservations/inscription');
        ?>
        <div align="center">
        <h3>Ajouter un utilisateur</h3>
        </div>
        <form>
            <fieldset>
            <label>Nom :</label>
            <input type="text" size="20" id="Nom" name="Nom" autofocus/>
            <br/>
            <br/>
            <label>Prénom :</label>
            <input type="text" size="20" id="Prenom" name="Prenom"/>
            <br/>
            <br/>
            <label>Login :</label>
            <input type="text" size="20" id="login" name="login"/>
            <br/>
            <br/>
            <label>Mot de passe :</label>
            <input type="text" size="20" id="password" name="password"/>
            <br/>
            <br/>
            <label>Admin :</label>
            <select name = 'Admin'>
                <option value = 'Oui'>Oui</option>
                <option value = 'Non'>Non</option>
            </select>
            <br/>
            <br/>
            <div align='center'>
            <input type="submit" name ='enregistrer' value="Enregistrer"/>
            <br/>
            </div>
        </form>
        </fieldset>
            <br/>
            <div align="center">
           <?php echo anchor('Reservations/listeUtilisateur','Retour'); ?>
            </div>
    </body>
</html>