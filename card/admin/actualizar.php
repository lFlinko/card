<?php
if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "../config/conexion.php";
        $id = $_GET['id'];
        if ($_GET['accion'] == 'pro') {
            $query = mysqli_query($conexion, "UPDATE `productos` SET `nombre`='[$nombre]',`descripcion`='[$descripcion]',`precio_normal`='[$precio_normal]',`precio_rebajado`='[$precio_rebajado]',`imagen`='[$imagen]',`id_categoria`='[$id_categoria]' WHERE id=$id");
            if ($query) {
                header('Location: productos.php');
            }
        }
        if ($_GET['accion'] == 'cli') {
            $query = mysqli_query($conexion, "UPDATE `productos` SET `nombre`='[$nombre]',`descripcion`='[$descripcion]',`precio_normal`='[$precio_normal]',`precio_rebajado`='[$precio_rebajado]',`imagen`='[$imagen]',`id_categoria`='[$id_categoria]' WHERE id=$id");
            if ($query) {
                header('Location: categorias.php');
            }
        }
    }
}
?>