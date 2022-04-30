<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Surat Kelulusan {{ $nilai->nama }}</title>
    <style>
        p {
            font-size: 11px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <img src="https://i.postimg.cc/qqSQCvK7/logo-sulsel.png" alt="" width=" 50px">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center" style="border-bottom: 2px solid black;">
                <b style="font-size: 15px;">{{ $surat->header }}</b><br>
                <b style="font-size: 12px; margin-bottom: 5px;">{{ $surat->sub_header }}</b><br>
                <b style="margin-bottom: -3px; font-size: 12px;">{{ $surat->dinas }}</b><br>
                <small><i>Alamat : {{ $surat->alamat }}</i></small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <b style="text-transform: uppercase; font-size: 12px;">{{ $surat->nama_surat }}</b><br>
                <b style="font-size: 12px;">{{ $surat->dinas }}</b><br>
                <b style="text-transform: uppercase; font-size: 12px;">Tahun Pelajaran {{ $surat->tahun_ajaran }}</b><br>
                <small><b>Nomor : {{ $surat->no_surat }}</b></small>
                <br>
                <p class="">Yang bertanda tangan dibawah ini Kepala Sekolah Sekolah Menengah Atas Negeri 11 Luwu Utara menyatakan bahwa :</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 ml-5 pl-5">
                <table style="font-size: 11px;">
                    <tr>
                        <td style="width: 300px;">Nama</td>
                        <td> : </td>
                        <td><b>{{ $nilai->nama }}</b></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td> : </td>
                        <td>{{ $nilai->tempat }}, {{ $nilai->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td style="width: 300px;">Nomor Peserta</td>
                        <td>:</td>
                        <td>{{ $nilai->nopes }}</td>
                    </tr>
                    <tr>
                        <td style="width: 300px;">Nomor Induk Siswa</td>
                        <td>:</td>
                        <td>{{ $nilai->nis }}</td>
                    </tr>
                    <tr>
                        <td style="width: 300px;">Nomor Induk Siswa Nasional</td>
                        <td>:</td>
                        <td>{{ $nilai->nisn }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <br>
                <p class="text-center">
                    berdasarkan kriteria kelulusan peserta didik yang sudah ditetapkan, maka yang bersangkutan dinyatakan :
                </p>
                <p class="text-center">
                    <b style="text-align: center;">{{ $nilai->status == 1 ? 'LULUS' : '' }} {{ $nilai->status == 0 ? 'TIDAK LULUS' : '' }} {{ $nilai->status == 2 ? 'HUBUNGI WALI KELAS' : '' }}</b>
                    <br><br>
                    dengan hasil sebagai berikut :
                </p>
            </div>
        </div>
        @if($nilai->nilai)
        <div class="row justify-content-center">
            <div class="col-md-6">
                <table border="1" style="font-size: 11px;">
                    <tr>
                        <th width="40px" class="text-center">No.</th>
                        <th width="550px" class="text-center">Mata Pelajaran</th>
                        <th width="100px" class="text-center">Nilai Ujian</th>
                    </tr>

                    <tr>
                        <td class="text-center">1.</td>
                        <td>Pendidikan Agama dan Budi Pekerti</td>
                        <td class="text-center">{{ $nilai->nilai->pabp }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">2.</td>
                        <td>Pendidikan Kewarganegaraan</td>
                        <td class="text-center">{{ $nilai->nilai->ppkn }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">3.</td>
                        <td>Bahasa Indonesia</td>
                        <td class="text-center">{{ $nilai->nilai->bind }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">4.</td>
                        <td>Matematika</td>
                        <td class="text-center">{{ $nilai->nilai->mtk }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">5.</td>
                        <td>Sejarah Indonesia</td>
                        <td class="text-center">{{ $nilai->nilai->si }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">6.</td>
                        <td>Bahasa Inggris</td>
                        <td class="text-center">{{ $nilai->nilai->bing }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">7.</td>
                        <td>Seni Budaya</td>
                        <td class="text-center">{{ $nilai->nilai->sn }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">8.</td>
                        <td>Pendidikan Jasmasni Olahraga dan Kesehatan</td>
                        <td class="text-center">{{ $nilai->nilai->pjok }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">9.</td>
                        <td>BS</td>
                        <td class="text-center">{{ $nilai->nilai->bs }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">10.</td>
                        <td>BTAQ</td>
                        <td class="text-center">{{ $nilai->nilai->btaq }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">11.</td>
                        <td>Pendidikan Lingkungan Hidup</td>
                        <td class="text-center">{{ $nilai->nilai->plh }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">12.</td>
                        <td>Simulasi Digital</td>
                        <td class="text-center">{{ $nilai->nilai->simdig }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.</td>
                        <td>Fisika</td>
                        <td class="text-center">{{ $nilai->nilai->fisika }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">14.</td>
                        <td>Kimia</td>
                        <td class="text-center">{{ $nilai->nilai->kimia }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">15.</td>
                        <td>C2</td>
                        <td class="text-center">{{ $nilai->nilai->c2 }}</td>
                    </tr>
                    <tr>
                        <td class="text-center">16.</td>
                        <td>C3</td>
                        <td class="text-center">{{ $nilai->nilai->c3 }}</td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2"><b>Rata - Rata</b></td>
                        <td class="text-center">{{ $nilai->nilai->rata }}</td>
                    </tr>

                </table>
            </div>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p>Surat Keterangan ini bersifat sementara sampai dikeluarkan ijazah. <br>
                    Demikian, Surat Keterangan ini diberikan agar dapat digunakan sebagaimana mestinya, apabila dikemudian hari terdapat kekeliruan, maka akan dilakukan perbaikan atau Surat Keterangan ini tidak berlaku.
                </p>
                <p class="float-right">
                    {{ $surat->tempat_tanggal_surat }}
                    <br>
                    {{ $surat->kepala_sekolah }}
                    <br>
                    <img src="https://i.postimg.cc/1Rn9RqkQ/contoh-stempel-png-6-Transparent-Images-removebg-preview.png" alt="" width="50px" style="margin-top: -15px; margin-left: 20px;">
                    <img src="https://i.postimg.cc/RVw4KzCp/Cam-Scanner-01-04-2021-20-40-Halaman-1-removebg-preview.png" alt="" width="50px" style="margin-left: -50px; margin-top: 7px;">
                    <br>
                    Nip : {{ $surat->nip }}
                </p>
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