<?php


if(isset($_GET['estado'])) {
    $estado = $_GET['estado'];

    if($estado == 'abrir') {
        //abrir porta
        header("location: ../functions.php");
    } else if ($estado == 'fechar') {
        //fechar
        header("location: ../functions.php");
    }
} else {
    echo "
    alert('erro');
    ";
}
?>