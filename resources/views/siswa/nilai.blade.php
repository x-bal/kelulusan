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
        * {
            margin: 0;
            padding: 0;
        }

        body {
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 40px;
            padding-right: 40px;
            font-family: Arial, Helvetica, sans-serif;

        }

        p {
            font-size: 14px;
        }
    </style>
</head>

<body class="a4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <img src="https://i.postimg.cc/dQkK5vd3/logosulsel.png" alt="" width="60px">
            </div>
        </div>


        <div class="col-md-12 text-center" style="border-bottom: 1px solid black; line-height: 1.2">
            <b style="font-size: 16px;">
                {{ $surat->header }} <br>
                {{ $surat->sub_header }} <br>
                {{ $surat->dinas }}
            </b>
            <br>
            <small><i>Alamat : {{ $surat->alamat }}</i></small>
            <br><br>
        </div>


        <div class="row">
            <div class="col-md-12" style="line-height: 1.2; margin-top: 5px;">
                <div style="text-align: center; margin-bottom: 10px;">
                    <b style="font-size: 14px;">
                        <span style="text-transform: uppercase;">
                            {{ $surat->nama_surat }} <br>
                            {{ $surat->dinas }} <br>
                            Tahun Pelajaran {{ $surat->tahun_ajaran }} <br>
                        </span>
                        Nomor : {{ $surat->no_surat }}
                    </b>
                </div>
                <p>Yang bertanda tangan dibawah ini Kepala Sekolah Sekolah Menengah Atas Negeri 11 Luwu Utara menyatakan bahwa :</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 ml-5" style="margin-top: -15px !important;">
                <table style="font-size: 16px; font-weight: bold;" width="100%">
                    <tr>
                        <td style="width: 300px;">Nama</td>
                        <td> : </td>
                        <td style="width: 500px;"><b>{{ $nilai->nama }}</b></td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td> : </td>
                        <td>{{ $nilai->tempat }}, {{ $nilai->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Peserta</td>
                        <td>:</td>
                        <td>{{ $nilai->nopes }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Siswa</td>
                        <td>:</td>
                        <td>{{ $nilai->nis }}</td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Siswa Nasional</td>
                        <td>:</td>
                        <td>{{ $nilai->nisn }}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12" style="line-height: 1.2; margin-top: -10px !important;">
                <br>
                <p>
                    Berdasarkan kriteria kelulusan peserta didik yang sudah ditetapkan, maka yang bersangkutan dinyatakan :
                </p>
                <p class="text-center" style="margin-top: -5px;">
                    <b style="text-align: center; font-size: 16px;">{{ $nilai->status == 1 ? 'LULUS' : '' }} {{ $nilai->status == 0 ? 'TIDAK LULUS' : '' }} {{ $nilai->status == 2 ? 'HUBUNGI WALI KELAS' : '' }}</b>
                </p>
                <p style="margin-top: -10px;">dengan hasil sebagai berikut :</p>
            </div>
        </div>
        @if($nilai->nilai)
        <div class="row justify-content-center">
            <table border="1" style="font-size: 14px;" width="100%">
                <tr>
                    <th width="40px" class="text-center">No.</th>
                    <th width="500px" class="text-center">Mata Pelajaran <br>(Kurikulum 2013) </th>
                    <th width="100px" class="text-center">Nilai Ujian</th>
                </tr>

                <tr>
                    <th style="border-right: none;"></th>
                    <th colspan="2" style="border-left: none;">Kelompok A</th>
                </tr>

                <tr>
                    <th class="text-center">1.</th>
                    <td>Pendidikan Agama dan Budi Pekerti</td>
                    <td class="text-center"> {{ $nilai->nilai->pabp }}</td>
                </tr>
                <tr>
                    <th class="text-center">2.</th>
                    <td>Pendidikan Pancasila dan Kewarganegaraan</td>
                    <td class="text-center"> {{ $nilai->nilai->ppkn }}</td>
                </tr>
                <tr>
                    <th class="text-center">3.</th>
                    <td>Bahasa Indonesia</td>
                    <td class="text-center"> {{ $nilai->nilai->bind }}</td>
                </tr>
                <tr>
                    <th class="text-center">4.</th>
                    <td>Matematika</td>
                    <td class="text-center"> {{ $nilai->nilai->mtk }}</td>
                </tr>
                <tr>
                    <th class="text-center">5.</th>
                    <td>Sejarah Indonesia</td>
                    <td class="text-center"> {{ $nilai->nilai->si }}</td>
                </tr>
                <tr>
                    <th class="text-center">6.</th>
                    <td>Bahasa Inggris</td>
                    <td class="text-center"> {{ $nilai->nilai->bing }}</td>
                </tr>

                <tr>
                    <th style="border-right: none;"></th>
                    <th colspan="2" style="border-left: none;">Kelompok B</th>
                </tr>

                <tr>
                    <th class="text-center">1.</th>
                    <td>Seni Budaya</td>
                    <td class="text-center"> {{ $nilai->nilai->sn }}</td>
                </tr>
                <tr>
                    <th class="text-center">2.</th>
                    <td>Pendidikan Jasmasni Olahraga dan Kesehatan</td>
                    <td class="text-center"> {{ $nilai->nilai->pjok }}</td>
                </tr>
                <tr>
                    <th class="text-center">3.</th>
                    <td>Prakarya dan Kewirausahaan</td>
                    <td class="text-center"> {{ $nilai->nilai->bs }}</td>
                </tr>

                <tr>
                    <th style="border-right: none;"></th>
                    <th colspan="2" style="border-left: none;">Kelompok C</th>
                </tr>

                <tr>
                    <th class="text-center">1.</th>
                    <td>{{ $nilai->nilai->jurusan == 'ipa' ? 'Fisika' : 'Ekonomi' }}</td>
                    <td class="text-center"> {{ $nilai->nilai->fisika }}</td>
                </tr>
                <tr>
                    <th class="text-center">2.</th>
                    <td>{{ $nilai->nilai->jurusan == 'ipa' ? 'Kimia' : 'Sosiologi' }}</td>
                    <td class="text-center"> {{ $nilai->nilai->kimia }}</td>
                </tr>
                <tr>
                    <th class="text-center">3.</th>
                    <td>{{ $nilai->nilai->jurusan == 'ipa' ? 'Biologi' : 'Geografi' }}</td>
                    <td class="text-center"> {{ $nilai->nilai->plh }}</td>
                </tr>
                <tr>
                    <th class="text-center">4.</th>
                    <td>{{ $nilai->nilai->jurusan == 'ipa' ? 'Matematika IPA' : 'Sejarah' }}</td>
                    <td class="text-center"> {{ $nilai->nilai->c2 }}</td>
                </tr>
                <tr>
                    <th class="text-center" rowspan="2">5.</th>
                    <th colspan="2"> Pilihan Lintas Minat / Pendalaman Minat</th>
                </tr>
                <tr>
                    <td>{{ $nilai->nilai->jurusan == 'ipa' ? 'Ekonomi' : 'Biologi' }}</td>
                    <td class="text-center"> {{ $nilai->nilai->c3 }}</td>
                </tr>
                <tr>
                    <td class="text-center" colspan="2"><b>Rata - Rata</b></td>
                    <th class="text-center"> {{ $nilai->nilai->rata }}</th>
                </tr>

            </table>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12" style="margin-top: 10px;">
                <p>Surat Keterangan ini bersifat sementara sampai dikeluarkan ijazah. <br>
                    Demikian, Surat Keterangan ini diberikan agar dapat digunakan sebagaimana mestinya, apabila dikemudian hari terdapat kekeliruan, maka akan dilakukan perbaikan atau Surat Keterangan ini tidak berlaku.
                </p>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div style="margin-left: 30px; margin-top: 40px;">
                    {!! $qr !!}
                </div>
            </div>

            <div class="col-md-6" style="margin-left: 280px;">
                <div style="float: right; background-image: url('https://i.postimg.cc/3rBBQ1s7/Whats-App-Image-2022-05-07-at-10-51-03-PM-removebg-preview.png'); background-size: 160px; background-repeat: no-repeat; background-position: left;">
                    <p style="margin-left: 120px;">
                        {{ $surat->tempat_tanggal_surat }}
                        <br>
                        Kepala UPT SMAN 11 Luwu Utara
                        <br>
                        <img src="https://i.postimg.cc/HWXw9g06/TTD-PAK-ABDILLAH-THAMRIN.png" alt="" width="100px">
                        <br>
                        <b style="text-transform: uppercase;"><u>{{ $surat->kepala_sekolah }}</u></b>
                        <br>
                        Pangkat : Penata Tk.1
                        <br>
                        Nip. {{ $surat->nip }}
                    </p>
                </div>
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