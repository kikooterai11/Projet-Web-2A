<?php
require_once '../../../Controller/ProduitsController.php';
require_once '../../../Controller/CategoriesController.php';
if (isset($_GET['idP']) && $_GET['idP'] != '') {
    $Pc = new ProduitsController();
    $Pc->deleteProduit($_GET['idP']);
    header('Location: tables.php');
    exit();
}
if (isset($_GET['idC']) && $_GET['idC'] != '') {
    $Cc = new CategoriesController();
    $Cc->deleteCategorie($_GET['idC']);
    header('Location: tables.php');
    exit(); 
}
?>