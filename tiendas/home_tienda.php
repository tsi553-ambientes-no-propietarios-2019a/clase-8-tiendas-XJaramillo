<?php

include('common/utils.php');

$tiendas = getTiendas($conn);
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
                    <fieldset>
                        <legend class="text-center header" style = "padding-top:20px">
						<div><a href="php/logout.php"><h5>Cerrar sesión</h5></a></div>
						<h2>Bienvenido <?php echo $_SESSION['user']['username']; ?></h2>
						</legend>
                        <hr noshade="noshade" size="2" width="100%" />
                        <legend class="text-center header">Tiendas</legend>

                    </fieldset>

					<table class="tienda">
						<thead>
							<tr >
								<th>Id</th>
								<th>Tienda</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($tiendas as $p) { ?>
								<tr>
                                <td><?php echo $p['id'] ?></td>
                                <td>
                                    <?php $variable1 = $p['store'];?>
                                    <a href="home.php?variable1=<?php echo $variable1 ?>"> <?php echo $variable1 ?></a>               
                                </td>	
								</tr>
							<?php } ?>
						</tbody>
					</table>

        </div>
    </div>
</div>
</center>

</body>
</html>