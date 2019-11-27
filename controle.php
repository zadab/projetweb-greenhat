<?php
include "../entities/produit.php";
include "../core/produitC.php";
if (!isset($_GET['idP']) || !isset($_GET['nomP']) || isset($_GET['quantiteP']) || isset($_GET['description']) || isset($_GET['prix']) || isset($_GET['image']))
		{
		 echo "<script>alert('Remplir les champs')</script>" ;
		header('Location: form.php');
		}
?>