<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Espace Admin</title>
        <style>
       input[type="submit"] {
	border: none;
    padding: 8px 15px 8px 15px;
    background: #2980B9;
    color: #fff;
    box-shadow: 1px 1px 4px #DADADA;
    -moz-box-shadow: 1px 1px 4px #DADADA;
    -webkit-box-shadow: 1px 1px 4px #DADADA;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px; 
}
input[type="text"],
input[type="password"]{
	border: solid 1px #E5E5E5;
	margin: 5px 30px 0px 30px;
	padding: 9px;
	display:block;
	font-size:16px;
	width:76%;
	background: white;
	background: 
		-webkit-gradient(
			linear, 
			left top, 
			left 25, 
			from(#FFFFFF), 
			color-stop(4%, #EEEEEE), 
			to(#FFFFFF)
		);
	background: 
		-moz-linear-gradient(
			top, 
			#FFFFFF,
			#EEEEEE 1px, 
			#FFFFFF 25px
			);
	-moz-box-shadow: 0px 0px 8px #f0f0f0;
	-webkit-box-shadow: 0px 0px 8px #f0f0f0;
	box-shadow: 0px 0px 8px #f0f0f0;
}
 input[type="text"]:focus,
 input[type="password"]:focus{
	background:#feffef;
}


fieldset{
	background: whitesmoke;
	border:1px solid #ddd;
	margin:0 auto;
	width:350px;
	font-size:16px;
	-moz-box-shadow:1px 1px 7px #ccc;
	-webkit-box-shadow:1px 1px 7px #ccc;
	box-shadow:1px 1px 7px #ccc;
}
        label {
            display: block;
            width: 200px;
            float: left;
        }
        
        fieldset {
            margin-left: auto;
            margin-right: auto;
            width : 250px;
        }
        
        fieldset {
            margin-left: auto;
            margin-right: auto;
            width : 250px;
        }

label{
	display:block;
	padding:10px 30px 0px 30px;
	margin:10px 0px 0px 0px;
}
        </style> 
    </head>
    <body>
        <?php
        echo validation_errors();
        echo form_open('VerificationloginAdmin');
        ?>
    <form>
      <fieldset>
       <legend>Connexion Admin</legend>
     <label for="login">Login :</label>
     <input type="text" size="20" id="login" name="login" autofocus />
     <br>
     <br>
     <label for="password">Mot de passe :</label>
     <input type="password" size="20" id="password" name="password" />
     <br>
     <br>
     <div align="center">
     <input type="submit" value="Connexion"/>
     </div>
      </fieldset>
   </form>
        <br/>
        <div align="center">
             <a href="connexion">Espace Utilisateur</a>
        </div>
    </body>
</html>
