<?php
//obtenemos el archivo .csv
 
$archivotmp = $_FILES['archivo']['tmp_name'];
 
//Se carga el archivo en la variable lineas
$lineas = file($archivotmp);

//inicializamos variable a 0, evita lectura de la primera línea (TITULOS)
$i=0;
 
//Se recorre línea por línea
foreach ($lineas as $linea_num => $linea)
{ 
   /*si es diferente a 0 significa que no se encuentra en la primera línea 
   (con los títulos de las columnas) y por lo tanto puede leerla*/
   if($i != 0) 
   { 
       //abrimos condición, solo entrará en la condición a partir de la segunda pasada del bucle.
       /* La funcion explode nos ayuda a delimitar los campos, por lo tanto irá 
       leyendo hasta que encuentre una , */
       $datos = explode(",",$linea);
 
       //Almacenamos los datos que vamos leyendo en una variable
       //usamos la función utf8_encode para leer correctamente los caracteres especiales
       $nombre = ($datos[0]);
       $ip = $datos[1];
       $nombreRed = utf8_encode($datos[2]);
       $severity = $datos[3];
       $desconocido = $datos[4];
       $statusComu = $datos[5];
       $statusInves = $datos[6];
       $vendedor = $datos[7];
       $producto = $datos[8];
       $serieEquipo = $datos[9];
       $tipoElemento = $datos[10];
       $versionSoft = $datos[11];
       $localizacion = $datos[12];
       $fechaCreacion = $datos[13];
       $nodo = $datos[14];
 
       //guardamos en base de datos la línea leida
       //mysql_query("INSERT INTO datos(nombre,edad,profesion) VALUES('$nombre','$edad','$profesion')");
      echo $nombre."<br>";
      echo $ip."<br>";
      echo $nombreRed."<br>";
      echo $severity."<br>";
      echo $desconocido."<br>";
      echo $statusComu."<br>";
      echo $statusInves."<br>";
      echo $vendedor."<br>";
      echo $producto."<br>";
      echo $serieEquipo."<br>";
      echo $tipoElemento."<br>";
      echo $versionSoft."<br>";
      echo $localizacion."<br>";
      echo $fechaCreacion."<br>";
      echo $nodo."<br><br>";

       //cerramos condición
   }
 
   /*Cuando pase la primera pasada se incrementará nuestro valor y a la siguiente pasada ya 
   entraremos en la condición, de esta manera conseguimos que no lea la primera línea.*/
   $i++;
   //cerramos bucle
}
?>
