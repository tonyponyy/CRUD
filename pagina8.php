<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $p1 =$_REQUEST['descripcion'];
    $p1 =$_REQUEST['precio'];
    $p1 =$_REQUEST['codigorubro'];
    $mysql = new mysqli("DIRECCION","USUARIO","CONTRASEÑA","BASE_DE_DATOS");
     if ($mysql->connect_error) die ("problemas con la base de datos");
     $mysql->query("insert into Articulo(descripcion,precio,codigo_rubro)
                    values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])") 
                    or die ($mysql->error);
    print 'Se cargó el articulo y se generó el codigo del articulo';
    print $mysql->insert_id;
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