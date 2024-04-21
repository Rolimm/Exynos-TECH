<?php
include ("conexao.php");
$id = $_GET ['id'];
if ( $result_usuario =  ("DELETE FROM cadastro WHERE id='$id' ") ) {
$resultado_usuario = mysqli_query($conn, $result_usuario);
header("Location:select.php");
exit;
}else{
    header("Location:erro.php");
    exit;
}
?>