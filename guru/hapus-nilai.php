<?php

include("../database.php");

if(isset($_GET['id'])){


    $id = $_GET['id'];


    $sql = "DELETE FROM nilai WHERE id_nilai=$id";
    $query = mysqli_query($db, $sql);


    if($query){
        header('Location: list-nilai.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang....");
}

?>