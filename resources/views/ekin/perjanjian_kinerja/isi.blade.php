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
    </style>

</head>

<body>
    <div class="title-wrapper" style="margin-top: 2rem">
        <div class="title">PERJANJIAN KINERJA</div>
        <div class="title">{{$tahun}}</div>
        <div class="title" style="padding-block: 6rem">{{$badan}}</div>
        <div class="title" style="padding-block: 6rem">KABUPATEN POHUWATO</div>
    </div>
    <table class="table-sasaran">
        <thead>
            <tr>
                <th>No</th>
                <th>Sasaran Strategis</th>
                <th>Indikator Kinerja</th>
                <th>Target (%)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
        </tbody>
    </table>
    <table style="width: 100%; margin-bottom: 4rem">
        <thead style="width: 100%">
            <tr style="width: 100%; font-weight: bold">
                <td style=""></td>
                <td>PROGRAM</td>
                <td>ANGGARAN</td>
                <td>KET</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>sample program</td>
                <td>sample anggaran</td>
                <td>sample keterangan</td>
            </tr>
        </tbody>
    </table>

    <table class="table-evaluasi">
        <tbody>
            <tr class="header-row">
                <td>Pegawai yang dinilai</td>
                <td>Pejabat penilai kinerja</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr class="title-row">
                <td>{{$jabatan_pihak_pertama}}</td>
                <td>{{$jabatan_pihak_kedua}}</td>
            </tr>
            <tr class="name-row">
                <td>{{$nama_pihak_pertama}}</td>
                <td>{{$nama_pihak_kedua}}</td>
            </tr>
        </tbody>
    </table>
</body>



</html>
