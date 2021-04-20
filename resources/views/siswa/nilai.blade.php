<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Surat Kelulusan {{ $nilai->nama }}</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <img src="{{ asset('/storage/'. $surat->logo)  }}" alt="" width="100px">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center" style="border-bottom: 2px solid black;">
                <h1>{{ $surat->header }}</h1>
                <h2>{{ $surat->sub_header }}</h2>
                <h2>{{ $surat->dinas }}</h2>
                <p><i>Alamat : {{ $surat->alamat }}</i></p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h4 style="text-transform: uppercase;">{{ $surat->nama_surat }}</h4>
                <h4>{{ $surat->dinas }}</h4>
                <h4 style="text-transform: uppercase;">Tahun Pelajaran {{ $surat->tahun_ajaran }}</h4>
                <p>Nomor : {{ $surat->no_surat }}</p>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                Yang bertanda tangan dibawah ini Kepala Sekolah Sekolah Menengah Atas Negeri 11 Luwu menyatakan bahwa :
            </div>
        </div>

        <div class="row justify-content-center mt-3">
            <div class="col-md-7">
                <table>
                    <tr>
                        <td style="width: 300px;">Nama</td>
                        <td style="width: 100px;"> : </td>
                        <td><b>{{ $nilai->nama }}</b></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td style="width: 100px;"> : </td>
                        <td>{{ $nilai->tempat }}, {{ $nilai->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td style="width: 300px;">Nomor Peserta</td>
                        <td style="width: 100px;">:</td>
                        <td>{{ $nilai->nopes }}</td>
                    </tr>
                    <tr>
                        <td style="width: 300px;">Nomor Induk Siswa</td>
                        <td style="width: 100px;">:</td>
                        <td>{{ $nilai->nis }}</td>
                    </tr>
                    <tr>
                        <td style="width: 300px;">Nomor Induk Siswa Nasional</td>
                        <td style="width: 100px;">:</td>
                        <td>{{ $nilai->nisn }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12 text-center">
                berdasarkan kriteria kelulusan peserta didik yang sudah ditetapkan, maka yang bersangkutan dinyatakan :
            </div>

            <div class="col-md-12 text-center mt-3">
                <b>{{ $nilai->status == 1 ? 'LULUS' : '' }} {{ $nilai->status == 0 ? 'TIDAK LULUS' : '' }} {{ $nilai->status == 2 ? 'HUBUNGI WALI KELAS' : '' }}</b>
            </div>

        </div>

        <div class="row mt-3">
            <div class="col-md-6 text-center">
                dengan hasil sebagai berikut :
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 my-4">
                <table border="1" class="">
                    <tr>
                        <th width="30px">No</th>
                        <th width="600px" class="text-center">Mata Pelajaran</th>
                        <th width="100px" class="text-center">Nilai Ujian</th>
                    </tr>

                    <tr>
                        <td class="text-center">1.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">2.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">3.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">4.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">5.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">6.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">7.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">8.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">9.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">10.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">11.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">12.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">14.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">15.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">16.</td>
                        <td>PABP</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>