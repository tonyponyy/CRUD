<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        th,td{
  border : 1px black solid;
  background-color: lightsalmon;
  text-align: center;
}
th{
  background-color: lightpink
}
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <?php
        $mysql = new mysqli("DIRECCION","USUARIO","CONTRASEÑA","BASE_DE_DATOS");
    if ($mysql->connect_error) die ("problemas con la base de datos");
    $registros = $mysql->query("select codigo,descripcion from Rubro") or die ($mysql->error);

    echo '<table>';
    echo '<tr><th>Codigo</th><th>Descripcion</th></tr>';

    while ($reg=$registros->fetch_array()){
        echo '<tr>';
            echo '<td>';
                    echo $reg['codigo'];
            echo '</td>';
            echo '<td>';
                   echo $reg['descripcion'];
             echo '</td>';
        echo '</tr>';
    }
    echo '</table>';

    $mysql->close();

    ?>
 <ol>
          <li> <a href="index.php">Alta de rubros</a></li>
          <li> <a href="consulta.html">Consulta de rubros</a></li>
          <li> <a href="listado.php">Lista de rubros</a></li> 
          <li> <a href="borrar.html">Borrar rubros</a></li> 
          <li> <a href="modificar.html">Modificar rubros</a></li> 
        </ol>
        <ol>
          <li> <a href="borrar_articulo.html">Borrar articulos</a></li>
          <li> <a href="alta_articulo.php">Alta articulos</a></li>
          <li> <a href="listado_articulos.php">Lista articulos</a></li>
        </ol>
</body>
</html>