<?php
include("conexion.php");
alert("UsuarioVideos.php");
$obj = json_decode($_GET["x"], false);

$stmt = $conn->prepare("SELECT _url FROM archivos ");
$stmt->bind_param("ss", $obj->table);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>