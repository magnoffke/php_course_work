<?php

    require_once('Product.php');
    require_once('Tool.php');
    require_once('Electronic.php');

    $form = new Tool();

    if (isset($_POST['submit'])) 
    {
        $form ->setTitle($_POST['title']);
        $form ->setDescription($_POST['description']);
        $form ->setPrice($_POST['price']);
        $form ->setShipper($_POST['shipper']);
        $form ->setWeight($_POST['weight']);
        $form ->save();
    } 
?>