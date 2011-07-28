<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd ">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">


<?php

$usu = uniqid(20);
//echo $usu . '<br>';

	if (isset ($_GET['pag'])) {
	$pag = $_GET['pag'];
	     
	} else {
			
	$pag = 'A Caminhada';
	}


//echo $pag;

?>

<head>

  <meta http-equiv="Content-Type" content="text/hmtl; charset=ISO-8859">
  
  <title>Caminho de Santiago de Compostela 2005 > <?php echo$pag ?> </title>
  
  <link rel="stylesheet" type="text/css" href="compostela.css" title="Tconibo style">

  <script language="Javascript" src="script.js"></script>

  <?php require("head.php");?>
  
  </head>
  
<body bgcolor=white>


	<?php require("topo.php");?>


	<?php require("central.php");?>
  

    <?php require("rodape.php");?>
  

</body></html>




