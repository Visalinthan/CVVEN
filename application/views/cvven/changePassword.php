<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Changement de mot de passe</title>
    </head>
    <style>
        form {
           margin-left: auto;
           margin-right: auto;
        }
        
        label {
            width: 200px;
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
        echo form_open('changepassword/password');
        ?>
        <div align="center">
        <h3>Changement du mot de passe</h3>
        <form>
            <fieldset>
            <label for="login">Votre login</label>
            <input type="text" name="login" autofocus= />
            <br/>
            <br/>
            <label for="password">Nouveau mot de passe</label>
            <input type="password" name="password" />
            <br/>
            <br/>
            
            <input type="submit" name="submit" value="Modifier" />
            </div>
        </form>
        </fieldset>
        <br/>
        <div align="center">
   <?php echo anchor('home','Retour'); ?>
        </div>
    </body>
</html>
