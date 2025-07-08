<?php

     require_once('config.php'); //Conectar a la BD

     // Redirigimos al listado si no se llega a la pagina desde el formulario

     if (!isset($_POST['id'])  || !isset($_POST['nombre']))  {
        header('Location:listado.php'); // Deja de analizar la página y se redirige

     }


     $id = $_POST['id'];

     $nombre = $_POST['nombre'];

     $apellido1 = $_POST['apellido1'];

     $apellido2 = $_POST['apellido2'];

     $fechaNac = $_POST['fecha_nac'];

     $email = $_POST['email'];


     $consulta = "UPDATE alumnos SET nombre=?, apellido1=?, apellido2=?,
     fecha_nac=?, email=? where id=?";

     //Utilizamos una consulta preparada

     $preparada = mysqli_prepare($conexion, $consulta);
     mysqli_stmt_bind_param($preparada, 'sssssi', $nombre,$apellido1,
     $apellido2, $fechaNac, $email, $id);

     // Ejecutamos la consulta preparada
     mysqli_stmt_execute($preparada);

     if (mysqli_affected_rows($conexion)==1) {
        // Hemos conseguido modificar el registro, redirigimos al listado
        header('Location: listado.php');
     } else {
        //Redirigimos al formulario de edición del alumno
        header('Location: editar.php?id='.$id);
     }



?>     