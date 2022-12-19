<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <div>
        <div>
            <table border="1" align="left">
                <thead>
                    <tr>
                        <td align="right" colspan="4" align="center"><a href="{{ route('mahasiswa.create') }}">[Tambah
                                Data]</a></td>
                    </tr>
                    <tr>
                        <th><b>NIM</b></th>
                        <th><b>Nama</b></th>
                        <th><b>Jurusan</b></th>
                        <th><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->nama_mhs }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.edit', [$mhs->id]) }}">[ Edit ]</a>
                                <a href="/mahasiswa/hapus/{{ $mhs->id }}"
                                    onclick="return confirm('Yakin Ingin menghapus data?')">[ Delete]</span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
