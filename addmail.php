<?php
	include('conn.php');
	
	$destinario=$_POST['destinario'];
	$emisor=$_POST['emisor'];
	$fecha=$_POST['fecha'];
	$smtp=$_POST['smtp'];
	$asunto=$_POST['asunto'];
	$contenido=$_POST['contenido'];
	$idEmpresa=$_POST['idEmpresa'];
	
	mysqli_query($conn,"insert into correo (destinatario, emisor, fecha, servidor_smtp, asunto, contenido, idEmpresa) values ('$destinario', '$emisor','$fecha','$smtp','$asunto','$contenido',$idEmpresa)");


	
	?>
		
		<script>
			window.alert('Customer added successfully!');
			setTimeout( function() { window.location.href = "index.php"; }, 3000 );
		</script>