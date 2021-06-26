<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta articulo</title>
</head>
<body>
    <form method="post" action="pagina8.php">
     Descripción del articulo:
     <input type="text" name="descripcion" required>
     <br>
     Ingrese precio :
     <input type="text" name="precio" required>
     <br>
     Seleccione rubro ;
     <select name= "codigorubro">
     <?php
     $mysql = new mysqli("DIRECCION","USUARIO","CONTRASEÑA","BASE_DE_DATOS");
    if ($mysql->connect_error) die ("problemas con la base de datos");  
    $registros=$mysql->query("select codigo,descripcion from Rubro") or
    die($mysql_error);
    while ($reg=$registros->fetch_array()){
        print '"<option value='.$reg["codigo"].'>'. $reg["descripcion"] .'</option>"';
    }
     ?>
     </select>
     <br>
     <input type="submit" value="confirmar">

</form>
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