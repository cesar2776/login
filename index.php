<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>
<body style="background-color: gray">
<br><br><br>
<div class="container"  opacity: 0.5;>
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="panel panel-primary">
				<div class="panel panel-heading">Login Cesar Arturo Aguilar Castro</div>
				<div class="panel panel-body">
					<div style="text-align: center;">
						<img src="img/escuela.jpg" height="250">
					</div>
					<p></p>
					<label>Usuario</label>
					<input type="text" id="usuario" class="form-control input-sm" name="">
					<label>Password</label>
					<input type="password" id="password" class="form-control input-sm" name="">
					<p></p>
					<span class="btn btn-primary" id="entrarSistema">Entrar</span>
					<a href="registro.php" class="btn btn-danger">Registro</a>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				// Este es el mensaje de alerta
				alertify.alert('ALERTA!', 'Debes agregar el usuario!', function(){ alertify.success('Ok'); });
				return false;
			}else if($('#password').val()==""){
				// Este es el mensaje de alerta
				alertify.alert('ALERTA!', 'Debes agregar el password!', function(){ alertify.success('Ok'); });
				return false;
			}

			cadena="usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val();

					$.ajax({
						type:"POST",
						url:"php/login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location='inicio.php';
							}else{
								// Este es el mensaje de alerta
								alertify.alert('ALERTA!', 'Fallo al entrar!', function(){ alertify.success('Ok'); });
							}
						}
					});
		});	
	});
</script>