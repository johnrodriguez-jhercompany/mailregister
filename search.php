<?php

include ('conn.php');

if (isset($_GET['search'])) {
  $busqueda = $_GET['search'];
  $sql = "SELECT * FROM correo WHERE contenido LIKE '%$busqueda%'";
  $result = mysqli_query($conn,$sql);



}else{
	header("Location:index.php");
	exit();
}

?>