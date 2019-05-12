<?php include("../config.php"); //so it can read $db

//check if daftar button is clicked
if(isset($_POST['daftar'])){

    //retrieve data from the form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jekel = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    //insert query (code)
    $sql = "INSERT INTO list_siswa (nama, alamat, jenis_kelamin, agama) VALUE ('$nama', '$alamat', '$jekel', '$agama')";
    $query = mysqli_query($db, $sql);

    //is $query successful
    if( $query ) {
        //if it is successful redirect to index.php with "sukses" status
        header('Location: ../index.php?status=sukses');
    } else {
        //if it is failed redirect to index.php but with "gagal" status
        header('Location: ../index.php?status=gagal');
    }
} 
else {
    die("Access denied!!!");
}

?>