<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nis</th>
            <th>Nisn</th>
            <th>Nama Siswa</th>
            <th>Tempat Tgl Lahir</th>
            <th>Rata-Rata</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswas as $siswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $siswa->user->username }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nisn }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->tempat }}, {{ Carbon\Carbon::parse($siswa->tgl_lahir)->format('d F Y') }}</td>
            <td>{{ $siswa->nilai->rata }}</td>
        </tr>
        @endforeach
    </tbody>
</table>