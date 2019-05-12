<?php include("../config.php");

//check whether simpan button was clicked
if(isset($_POST['simpan'])){

    //retrieve data
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jekel = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    //"update" query
    $sql = "UPDATE list_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jekel', agama='$agama' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        //query successful
        header('Location: ../list.php');
    } else {
        //query failed
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Access denied!!!");
}

?>