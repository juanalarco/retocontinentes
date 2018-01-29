<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de conexion</title>
  </head>
  <body>

    <?php
    // conexion a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "world");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
        }else {
          //Hacemos variabes para los $_POST
          $continent=$_POST["continente"];
          $surfacearea=$_POST["superficie"];

          //Hacemos la consulta y la guardamos en una variable

          $consulta="SELECT * FROM country WHERE SurfaceArea >= $surfacearea AND Continent='".$continent."' ORDER BY SurfaceArea ASC";


          echo "El continente es: ".$_POST["continente"]."<br>";
          echo "Su superficie es: ".$_POST["superficie"]."<br>";
              echo "<br>";
              echo "<br>";



    $consulta = $mysqli->query($consulta);
    foreach ($consulta as $fila) {
      echo "El pais: ".$fila['Name'];
      echo "<br>";
      echo "Su superficie es: ".$fila['SurfaceArea'];
      echo "<br>";
      echo "<br>";
    }
    }
    ?>

  </body>
</html>
