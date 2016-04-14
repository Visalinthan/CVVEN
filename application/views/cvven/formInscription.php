<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
    </head>
    <style>
        form {
           margin-left: auto;
           margin-right: auto;
           width : 300px;
        }
        
         label {
            display: block;
            width: 100px;
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
        echo form_open('inscription/inscription');
        ?>
        <div align="center">
        <h3>Inscription</h3>
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
            <input type="password" size="20" id="password" name="password"/>
            <br/>
            <input type="hidden" name="Admin" value="0"/>
            <br/>
            <div align='center'>
            <input type="submit" value="S'inscrire"/>
            <br/>
            </div>
        </form>
        </fieldset>
            <br/>
            <div align="center">
             <?php echo anchor('home','Retour à la page de connexion'); ?>
            </div>
    </body>
</html>
