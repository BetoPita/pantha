<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <base href="<?php echo base_url(); ?>"/>
	 <link href="statics/css/bootstrap.css" rel="stylesheet">
	 <link href="statics/css/logOn.css" rel="stylesheet">
	 <meta name="viewport" content="initial-scale=1">

	<title>Panthatravel</title>
</head>
<body>
	<section>
		<div>
			<div id="seccionInicio" class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="blanco">Panthatravel</h1>
					</div>
				</div>
					<form action="<?php echo site_url('login/ingresar') ?>" method="POST">
				 <div id="login-box">               
	                    <table>
	                        <tr>
	                          <td class="text-center">
	                            <h3>Inicio de sesión</h3>
	                          </td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<div class="form-group text-center"><label style="color:red"><?php if(isset($texto)){echo $texto;} ?></label></div>
	                        	</td>
	                        </tr>
	                        <tr>
	                            <td>
	                              <input type="text" id="usuario" name="usuario" class="inputUser"  placeholder = "   usuario">
	                                <br />
	                                <br />
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                              <input type="password" id="password" name="password" class="inputPassword inputLock"  placeholder = "   contraseña">
	                                <br />
	                                <br /> 
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <div class="controles">
	                                     <button class="btn btn-large btn-success pull-right" type="submit">Iniciar</button>
	                                </div>
	                            </td>
	                        </tr>
	                    </table>
          		  </div>
			</form>
			</div>
		</div>
	</section>
</body>
</html>

