<?php 

    require_once "../function.php";

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id ";
    
    $_REQUEST = mysqli_query ($koneksi, $sql);
    
    echo $sql;

    header("location:http://localhost/php-smk/restoran/kategori/select.php");



?>