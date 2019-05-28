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
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid"> 
		<legend class="text-left header">Nuevo Producto</legend>
                        <hr noshade="noshade" size="2" width="100%" />           
                <form action="php/process_newProduct.php" class="form-inline" method="POST">
                    <fieldset>
						<?php if(isset($error_message)) { ?>
							<div><strong><?php echo $error_message; ?></strong></div>
						<?php } ?>
                        <legend class="text-right header">Inicio de sesion</legend>

                        

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Codigo</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="code" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Nombre</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="name" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Tipo</span>
                                    </div>
                                    <div class="col">
									<select name="type" required="required">
										<option value="">Seleccione el tipo</option>
										<option value="Alimento">Alimento</option>
										<option value="Vestimenta">Vestimenta</option>
										<option value="Salud">Salud</option>
									</select>
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Stock</span>
                                    </div>
                                    <div class="col">
									<input type="number" name="stock" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Precio</span>
                                    </div>
                                    <div class="col">
									<input type="number" name="price" required="required">
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
                                                <button type="submit" class="btn btn-primary btn-lg btn-sm">Registrar</button>
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