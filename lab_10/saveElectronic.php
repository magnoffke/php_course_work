<?php

    require_once('Product.php');
    require_once('Tool.php');
    require_once('Electronic.php');

    $form = new Electronic();

    if (isset($_POST['submit'])) 
    {
        $form ->setTitle($_POST['title']);
        $form ->setDescription($_POST['description']);
        $form ->setPrice($_POST['price']);
        $form ->setRecyclable($_POST['recyclable']);
        $form ->save();
    } 
?>