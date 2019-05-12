<html>
    <head>
        <title>
            Input Data Siswa | SMK Bisa
        </title>
    </head>
    
    <body>
        <header>
            <h3>Input Data Siswa</h3>
            <h1>SMK Bisa</h1>
        </header>
        
        <h4>Menu</h4>
        <nav>
            <ul>
                <li><a href="daftar/form-add.php">Tambah Siswa</a></li>
                <li><a href="list.php">List Siswa</a></li>
            </ul>
        </nav>
        
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Tambah siswa berhasil!";
                    } else {
                        echo "Penambahan siswa gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        
    </body>
</html>