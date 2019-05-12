<!DOCTYPE html>
<html>
    <head>
        <title>Input Data Siswa | SMK Bisa</title>
    </head>
    
    <body>
        <header>
            <h3>Tambah Siswa</h3>
        </header>
        
        <form action="proses-add.php" method="post"> <!--action is for the process file, method for the send method (post or get commonly)-->
            <fieldset>
                <table> <!--table to make the form a bit neat, you can remove this <table>, <tbody>, <tr>, <td> if you want-->
                    <tbody> <!--table body-->
                        <tr>    <!--table row-->
                            <td>    <!--table column-->
                                <label for="nama">Nama: </label>
                            </td>
                            <td>
                                <input type="text" name="nama" placeholder="Nama Lengkap" />
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="alamat">Alamat: </label>
                            </td>
                            <td>
                                <textarea name="alamat"></textarea>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="jenis_kelamin">Jenis Kelamin: </label>
                            </td>
                            <td>
                                <!--choices with radio button-->
                                <label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label>
                                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <label for="agama">Agama: </label>
                            </td>
                            <td>
                                <!--choices with list-->
                                <select name="agama">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="submit" value="Daftar" name="daftar" />
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </tbody>
            
                </table>
                
            </fieldset>
        </form>
        
    </body>
</html>