<?php include("../config.php");

if( isset($_GET['id']) ){
    //get id from query string
    $id = $_GET['id'];

    //create "delete" query
    $sql = "DELETE FROM list_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);

    //check whether query is successful
    if($query){
        header('Location: ../list.php'); //if it successful redirect to list.php
    } else {
        die("gagal menghapus...");  //if it failed
    }

} else {
    die("Access denied!!!");
}

?>