<?php
    require("../db_connection.php");

    $mc_id=$_GET['id'];

    $sql=$conn->prepare("DELETE FROM main_category WHERE mc_id=?");
    $sql->bind_param("i",$mc_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD DELETED');
        window.location='main_category_view.php';
        </script>";
        
    }
    else
    {
        echo "<script type='text/javascript'>
        alert('RECORD NOT DELETED');
        window.location='main_category_view.php';
        </script>";
    }
?>
