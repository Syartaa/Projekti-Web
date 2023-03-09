<?php
require_once 'productsController.php';
if(isset($_GET['id'])){
    $produktId =$_GET['id'];
}

$p=new productsController;
 $p->delete($produktId);

?>