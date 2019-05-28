<?php 

include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
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

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
<!---------------------------------------------------------->
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid">

            <legend class="text-left header">TiendasEC</legend>
            <hr noshade="noshade" size="2" width="100%" />          
                <form action="php/process_registration.php" class="form-inline" method="POST">
                    <fieldset>
                        <legend class="text-center header">Registro de tienda</legend>

                        <div class="form-group" style = "padding-bottom:25px" >
                            <div class = "container">
                                <div class="row" >
                                    <div class="col">
                                    <span>Nombre de la tienda</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="store" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: end">
                                    <span>Usuario</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="username" required="required">
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
									<input type="password" name="password" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style = "padding-bottom:10px"> 
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>    
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