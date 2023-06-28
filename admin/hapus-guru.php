<?php

include("../database.php");

if(isset($_GET['id'])){


    $id = $_GET['id'];


    $sql = "DELETE FROM guru WHERE id_guru=$id";
    $query = mysqli_query($db, $sql);


    if($query){
        header('Location: list-guru.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang....");
}

?>