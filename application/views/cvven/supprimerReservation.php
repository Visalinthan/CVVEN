<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>

         label {
            display: block;
            width: 110px;
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
        echo form_open('Reservations/suppressionReserv');
        ?>
        <div align="center">
            <h3>Supprimer une réservation</h3>
        <fieldset>
        <form>
            <label>ID Réservation :</label>
            <input name = 'idReservSupp'  size = '15' autofocus/>
            <br/>
            <br/>
        <input type='submit' name='validersupp' value='Supprimer'/>
        </fieldset>
        </div>
        <br/>
            <div align="center">
            <?php echo anchor('Reservations/listeUtilisateur','Revenir à la liste des utilisateurs'); ?>
            </div>
    </body>
</html>
    </body>
</html>
