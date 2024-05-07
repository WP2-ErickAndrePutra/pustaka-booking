<html> 
 
<head> 
 
    <title>Tampil Data Siswa</title> 
</head> 
 
<body> 
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampil Data Siswa
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <th>Nama Siswa</th> 
                <th>:</th> 
                <td> 
                    <?= $NM; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>NIS</th> 
                <th>:</th> 
                <td> 
                    <?= $NIS; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Kelas</th> 
                <th>:</th> 
                <td> 
                    <?= $Kelas; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Tanggal Lahir</th> 
                <th>:</th> 
                <td> 
                    <?= $Tgl_Lahir; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Tempat Lahir</th> 
                <th>:</th> 
                <td> 
                    <?= $Tmpt_Lahir; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Alamat</th> 
                <th>:</th> 
                <td> 
                    <?= $Alamat; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Jenis Kelamin</th> 
                <th>:</th> 
                <td> 
                    <?= $J_Kelamin; ?> 
                </td> 
            </tr> 
            <tr> 
                <th>Agama</th> 
                <th>:</th> 
                <td> 
                    <?= $Agama; ?> 
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('DLemas'); 
?>">Kembali</a> 
                </td> 
</tr> 
</table> 
</center> 
</body> 
</html> 