<head>
    <title>Input Data Mahasiswa</title>
</head>

<body>
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('mahasiswa.store') }}"
        method="POST">
        @csrf
        <table bgcolor="aqua" border="0" align="center" width="40%">
            <tr">
                <td colspan="3" align="center">
                    <h2>INPUT DATA MAHASISWA</h2>
                    <hr>
                </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" placeholder="Masukkan NIM Anda"size="40"
                            maxlength="8"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Masukkan Nama anda" size="40"></td>
                </tr>
                <tr valign="top">
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="">--Pilih Jurusan--</option>
                            <option value="Sistem Informasi Akuntansi">11 - Sistem Informasi Akuntansi</option>
                            <option value="Sistem Informasi">12 - Sistem Informasi</option>
                            <option value="Teknologi Komputer">13 - Teknologi Komputer</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" align="center">
                        <hr>
                        <input type="submit" value="SIMPAN DATA">
                        <input type="reset" value="BATAL" onclick="history.go(-1)">
                        <hr>
                    </td>
                </tr>
        </table> <br>
    </form>
</body>
