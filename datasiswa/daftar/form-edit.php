<?php

include("../config.php");

//if no id in the query
if( !isset($_GET['id']) ){
    header('Location: ../list.php');
}

//retrieve id
$id = $_GET['id'];

//"retrieve data" query
$sql = "SELECT * FROM list_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);    //so the data we would retrieve is 1 row and so the array index is using coulmn name like [id] => 1 etc.

//if the data id is not found in the table
if( mysqli_num_rows($query) < 1 ){
    die("data not found...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input data Siswa | SMK Bisa</title>
</head>

<body>
    <header>
        <h3>Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>            
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
            
            <table> <!--table to make the form a bit neat, you can remove this <table>, <tbody>, <tr>, <td> if you want-->
                    <tbody> <!--table body-->
                        <tr>    <!--table row-->
                            <td>    <!--table column-->
                                <label for="nama">Nama: </label>
                            </td>
                            <td>
                                <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="alamat">Alamat: </label>
                            </td>
                            <td>
                                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="jenis_kelamin">Jenis Kelamin: </label>
                            </td>
                            <td>
                                <?php $jekel = $siswa['jenis_kelamin']; ?>
                                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jekel == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
                                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jekel == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
                            </td>
                        </tr>
            
                        <tr>
                            <td>
                                <label for="agama">Agama: </label>
                            </td>
                            <td>
                                <?php $agama = $siswa['agama']; ?>
                                <select name="agama">
                                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                                    <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                                    <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="submit" value="Simpan" name="simpan" />
                            </td>
                        </tr>
                </tbody>
            </table>
        </fieldset>

    </form>

    </body>
</html>