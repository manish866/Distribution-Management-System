<?php
    require("../db_connection.php");

    $rt_id=$_REQUEST['id'];

    $sql=$conn->prepare("DELETE FROM retailers WHERE rt_id=?");
    $sql->bind_param("i",$rt_id);
    if($sql->execute())
    {
        echo "<script type='text/javascript'>
        alert('RECORD DELETED');
        window.location='retailers_view.php';
        </script>";
        
    }
    else
    {
        echo "<script type='text/javascript'>
        alert('RECORD NOT DELETED');
        window.location='retailers_view.php';
        </script>";
    }
?>
