<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Carga de Documento Excel</title>
</head>
<body>
	<form action="importar.php" enctype="multipart/form-data" method="post">
	   <input id="archivo" accept=".csv" name="archivo" type="file" /><br>
	   <input name="MAX_FILE_SIZE" type="hidden" value="20000" /><br> 
	   <input name="enviar" type="submit" value="Importar CSV" />
	</form>
</body>
</html>
