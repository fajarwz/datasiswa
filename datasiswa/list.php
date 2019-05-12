<?php include("config.php"); ?> <!--so it can read $db-->

<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Siswa | SMK Bisa</title>
    </head>
    
    <body>
        <header>
            <h3>List Siswa</h3>
        </header>
        
        <nav>
            <a href="daftar/form-add.php">[+] Tambah Siswa</a>
        </nav>
        
        <br>
        
        <table border="1">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            
            <tbody>            
            <?php
            //query for calling list_siswa table from db
            $sql = "SELECT * FROM list_siswa";
            $query = mysqli_query($db, $sql);
            
            //result turned to be an array by mysqli_fetch_array and saved in $siswa
            //"while" looping would loop as long as the data exist
            while($siswa = mysqli_fetch_array($query)){
                echo "<tr>";
                    echo "<td>".$siswa['id']."</td>";   //array index and column name from the table should be similar
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>";
                    echo "<a href = 'daftar/form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href = 'daftar/hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
            
        </table>
        
        <p>Total siswa: <?php echo mysqli_num_rows($query);?> </p>
    </body>
</html>