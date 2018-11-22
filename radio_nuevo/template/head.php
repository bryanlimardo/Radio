<?php 
date_default_timezone_set('America/Santiago');
/* 
  No argument required for current year.
  Otherwise, pass start year as a 4-digit value.
*/
function auto_copyright($startYear = null) {
	if (!is_numeric($startYear) || intval($startYear) >= date('Y')) {
		echo "&copy; " . date('Y'); // display current year if $startYear is same or greater than this year
	} else {
		// Display range of years. Replace date('Y') with date('y') to display range of years in YYYY-YY format.
		echo "&copy; " . intval($startYear) . "&ndash;" . date('Y'); 
	}
} 
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Radio Cristo Universal<?php auto_copyright(2012);  // 2012 - Current ?></title>
	<meta name="Description" content="La mejor música en Radio Cristo Universal
Disfruta de nuestra emisora las 24 horas con un sonido de alta calidad compatible con todas las plataformas.">
	<meta name="Keywords" content="radio cristiana on line,
									radio cristiana online solo musica,
									radio cristiana reggaeton online,
									radio cristiana reformada online,
									radio cristiana online gratis para escuchar,
									radio cristiana pentecostal online,
									radio cristiana online para escuchar,
									radio on line musica cristiana,
									la radio cristiana online,
									radio cristiana online juvenil,
									radio cristiana en ingles online,
									radio cristiana infantil online,
									radio cristiana internacional online,
									radio cristiana online instrumental,
									radio cristiana online 24 horas,
									radio cristiana evangelica online gratis,
									escuchar radio cristiana online gratis,
									radio cristiana en vivo online gratis,
									radio cristiana juvenil online gratis,
									radio cristiana on line gratis,
									radio cristiana online en ingles,
									radio cristiana online en vivo chile,
									radio cristiana online en vivo,
									radio cristiana online curico,
									radio cristiana bautista online,
									radio cristiana alabanzas online,
									radio cristiana on line chile,
									radio cristiana por internet,
									escuchar radio cristiana en internet,
									radio cristiana en online,
									radio cristiana en vivo online gratis,
									radio cristiana online en vivo,
									escuchar la radio cristiana por internet,
									radio cristiana en internet musica,
									radio cristiana en internet gratis,
									radio cristiana en internet,
									escuchar radio cristiana por internet,
									estaciones de radio cristianas por internet gratis,
									estaciones de radio cristianas por internet,
									radio cristiana en chile online,
									radio por internet musica cristiana,
									radio estaciones cristianas por internet,
									radio cristiana por internet en vivo,
									radio cristiana por internet gratis,
								   	radio evangelica en vivo por internet,
								    radio cristo universal,
								   	cristo universal">
	
	<link rel="icon" href="img/cropped-logo2-1-180x180.jpg" type="image/x-icon">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>