<?php

include('common/utils.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


</head>
<body>

<center>
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid"> 
            <legend class="text-left header">TiendasEC</legend>
            <hr noshade="noshade" size="2" width="100%" />           
                <form action="php/process_login.php" class="form-inline" method="POST">
                    <fieldset>
                        <legend class="text-right header">Inicio de sesion</legend>

                        

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: end">
                                    <span>Usuario</span>
                                    </div>
                                    <div class="col">
                                    <input type="text" name="username" placeholder="Usuario">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: end">
                                    <span>Contraseña</span>
                                    </div>
                                    <div class="col">
                                    <input type="password" name="password" placeholder="Clave">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group" style = "padding-bottom:20px"> 
                                <div class = "container">
                                        <div class="row">
                                        <div class="col-sm-3">
                                    </div>
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-primary btn-lg btn-sm">Sign in</button>
                                                <a href="registration.php">Registrar tienda</a>
                                            </div>
                                        </div>
                                    </div>    
                        </div> 
                        
                        
                    </fieldset>
                </form>            
        </div>
    </div>
</div>
</center>
 
</body>
</html>