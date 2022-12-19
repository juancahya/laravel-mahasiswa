<head>
    <title>Input Data Jurusan</title>
</head>

<body>
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        <table bgcolor="blue" border="0" align="left" width="40%">
            <tr">
                <td colspan="3" align="center">
                    <h2>INPUT DATA JURUSAN</h2>
                    <hr>
                </td>
                </tr>
                <tr>
                    <td>Kode Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="kdjrs" placeholder="Masukkan Kode Jurusan" size="40"
                            maxlength="2"></td>
                </tr>
                <tr>
                    <td>Nama Jurusan</td>
                    <td>:</td>
                    <td><input type="text" name="namajrs" placeholder="Masukkan Namajurusan" size="40"></td>
                </tr>
                <tr valign="top">
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="fakultas">
                            <option value="">--Pilih Fakultas--</option>
                            <option value="Fakultas Teknik dan Informatika">FakultasTeknik dan Informatika</option>
                            <option value="Fakultas Ekonomi dan Binsis">Fakultas Ekonomi dan Binsis</option>
                            <option value="Fakultas Komunikasi dan Bahasa">Fakultas Komunikasi dan Bahasa</option>
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
