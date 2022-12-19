<div>
 <div>
 <table border="1" align="center" >
 <thead>
 <tr>
 <td align="right" colspan="4" align="center"><a href="{{route( 'jurusan.create')}}">[Tambah Data]</a></td>
 </tr>
 <tr>
 <th><b>Kode Jurusan</b></th>
 <th><b>Nama Jurusan</b></th>
 <th><b>Fakultas</b></th>
 <th><b>Actions</b></th>
 </tr>
 </thead>
 <tbody>
 @foreach ($jurusan as $jrs)
 <tr>
 <td>{{$jrs->jrs}}</td>
 <td>{{$jrs->nama_jrs}}</td>
 <td>{{$jrs->fakultas}}</td> 
 <td>
 <a href="{{route( 'jurusan.edit' ,[$jrs->id])}}">[ Edit ]</a>
 <a href="/jurusan/hapus/{{ $jrs->id }}" onclick="return confirm('Yakin Ingin menghapus data?')">[ Delete
]</span></a>
 </td>
 </tr>
 @endforeach 
 </tbody>
 </table>
 </div> 
</div>