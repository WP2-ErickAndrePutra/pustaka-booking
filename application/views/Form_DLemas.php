<html> 
<head> 
    <title>Form Input Data Siswa</title> 
</head> 
<body> 
    <center> 
    <form action="<?= base_url('DLemas/cetak'); ?>" method="post"> 
    <table> 
    <tr> 
    <th colspan="3"> 
    Form Input Data Siswa 
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
                            <input type="text" name="NM" id="NM" placeholder=""> 
                        </td> 
                    </tr> 
                    <tr> 
                        <th>NIS</th> 
                        <td>:</td> 
                        <td> 
                            <input type="text" name="NIS" id="NIS" placeholder=""> 
                    </tr> 
                    <tr> 
                        <th>Kelas</th> 
                        <td>:</td> 
                        <td> 
                            <input type="text" name="Kelas" id="Kelas" placeholder="">
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Tanggal Lahir</th> 
                        <td>:</td> 
                        <td> 
                            <input type="date" name="Tgl_Lahir" id="Tgl_Lahir" placeholder="">
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Tempat Lahir</th> 
                        <td>:</td> 
                        <td> 
                            <input type="text" name="Tmpt_Lahir" id="Tmpt_Lahir" placeholder="">
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Alamat</th> 
                        <td>:</td> 
                        <td> 
                            <input type="text" name="Alamat" id="Alamat" placeholder="">
                        </td> 
                    </tr> 
                    <tr>
                    <tr> 
                        <th>Jenis Kelamin</th> 
                        <td>:</td> 
                        <td> 
                            <input type= "radio" name= "J_Kelamin" value= "Laki-Laki"> Laki-Laki<br>
                            <input type= "radio" name= "J_Kelamin" value= "Perempuan"> Perempuan<br>
                        </td> 
                    </tr> 
                    <tr> 
                        <th>Agama</th> 
                        <td>:</td> 
                        <td> 
                            <select name="Agama" id="Agama"> 
                                <option value="">Pilih Agama</option> 
                                <option value="Islam">Islam</option> 
                                <option value="Kristen Protestan">Kristen Protestan</option> 
                                <option value="Katolik">Katolik</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option> 
                                <option value="Khonghucu">Khonghucu</option>
                            </select> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td colspan="3" align="center"> 
                            <input type="submit" value="Submit"> 
                        </td> 
                    </tr> 
                </table> 
            </form> 
        </center> 
</body> 
 
</html> 
