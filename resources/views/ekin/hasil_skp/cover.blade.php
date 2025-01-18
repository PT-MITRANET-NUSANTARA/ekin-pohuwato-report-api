<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            margin-top: 2cm;
            margin-bottom: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
        }

        body {
            font-family: 'Helvetica', sans-serif;
            margin: 0;
        }

        * {
            font-size: 12;
        }

        .heading-1 {
            text-align: center;
        }

        .heading-2 {
            margin-bottom: 0;
        }

        .title-wrapper {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
        }

        .kop {
            border-bottom: 1px solid black;
        }

        .audit-detail {
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .audit-detail th,
        .audit-detail td {
            text-align: left;
            vertical-align: top;
        }

        .audit-detail th {
            padding-right: 20px;
        }

        .title {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
        }

        .paragraf {
            text-align: justify;
            text-indent: 25px;
            line-height: 2em;
        }

        .number-list {
            list-style-type: decimal;
            margin-left: 25px;
            padding: 0px;
            line-height: 2em;
        }

        .number-list li {
            text-align: justify;
        }

        .ttd {
            width: 100%;
        }

        .ttd td {
            width: 33.33%;
            text-align: center;
        }

        .table-sasaran {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2rem;
            margin-bottom: 20px;
        }

        .table-sasaran th,
        .table-sasaran td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            vertical-align: middle;
        }

        .table-sasaran th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table-evaluasi {
            width: 100%;
            margin-top: 1.5rem;
            border-collapse: collapse;
        }

        .table-evaluasi td {
            width: 50%;
            padding: 3rem 0;
        }

        .table-evaluasi .header-row td {
            padding: 0.5rem;
            border: none;
            text-align: left;
        }

        .table-evaluasi .title-row td {
            padding: 0.5rem;
            border: none;
        }

        .table-evaluasi .name-row td,
        .table-evaluasi .id-row td {
            padding: 0.5rem;
            border: none;
        }

        img {
            width: 2rem;
        }
    </style>

</head>


<body
    style="border: 1px solid black; display: flex; flex-direction: column; align-items: center; justify-content: space-between; height: 100vh;">
    <div class="title-wrapper" style="margin-top: 2rem">
        <img class="logo" style="width: 120px; margin-bottom: 12px" src="{{ public_path('image/garuda.png') }}"
            alt="Logo Garuda">
        <div class="title" style="margin-top: 6rem">DOKUMEN EVALUASI KINERJA PEGAWA</div>
        <div class="title">PERIODE : {{$periode}}</div>
    </div>
    <div class="title-wrapper" style="margin-top: 6rem">
        <div class="title">Jangka Waktu Penilaian</div>
        <div class="title">01 Januari 2022 s.d 31 Desember 2022</div>
    </div>
    <div class="title-wrapper" style="margin-top: 6rem">
        <div>Nama: {{$nama_penilai}}</div>
        <div>NIP: {{$nip_penilai}}</div>
        <div>Pangkat/Gol.Ruang: {{$pangkat_penilai}}</div>
        <div>Jabatan: {{$jabatan_penilai}}</div>
        <div>NIP: {{$nip_penilai}}</div>
        <div>Unit Kerja: {{$unit_penilai}}</div>
    </div>
    <div class="title-wrapper" style="margin-top: 6rem">
        <div class="title">BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN</div>
        <div class="title">KABUPATEN POHUWATO</div>
        <div class="title">TAHUN 2022</div>
    </div>
</body>





</html>
