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
            font-size: 8;
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
            width: 1rem;
        }
    </style>

</head>


<body>
    <div class="title-wrapper">
        <img class="logo" style="width: 80px; margin-bottom: 12px" src="{{ public_path('image/garuda.png') }}"
            alt="Logo Garuda">
        <div class="title">DOKUMEN EVALUASI KINERJA PEGAWA</div>
        <div class="title">PERIODE : {{$periode['name']}}</div>
    </div>
    <hr style="margin-top: 12px; margin-bottom: 12px">
    <table className="w-full" style="font-size: 6px; width: 100%;">
        <tbody>
            <tr>
                <td style="text-align: left; width: 50%;">PEMERINTAH KAB. POHUWATO</td>
                <td style="text-align: right; width: 50%;">PERIODE PENILAIAN:</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: right;">{{ $start }} s.d {{ $end }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table-sasaran" style="width: 100%;">
        <tbody>
            <tr>
                <td colspan="2">Pegawai Yang Dinilai</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $bawahan['nama_asn'] }}</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>{{ $bawahan['id_asn'] }}</td>
            </tr>
            <tr>
                <td>PANGKAT/GOL RUANG</td>
                <td>PANGKAT/GOL RUANG</td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td>{{ $bawahan['nama_jabatan'] }}</td>
            </tr>
            <tr>
                <td>UNIT KERJA</td>
                <td>{{ $bawahan['unor']['nama'] }}</td>
            </tr>
            <tr>
                <td colspan="2">Pejabat Penilai Kinerja</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $bawahan['unor']['atasan']['asn']['nama_atasan'] }}</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>{{ $bawahan['unor']['atasan']['asn']['nip_atasan'] }}</td>
            </tr>
            <tr>
                <td>PANGKAT/GOL RUANG</td>
                <td>PANGKAT/GOL RUANG</td>

            </tr>
            <tr>
                <td>JABATAN</td>
                <td>{{ $bawahan['unor']['atasan']['unor_jabatan'] }}</td>
            </tr>
            <tr>
                <td>UNIT KERJA</td>
                <td>{{ $bawahan['unor']['atasan']['unor_nama'] }}</td>
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
                <td>{{ $bawahan['nama_jabatan'] }}</td>
                <td>{{ $bawahan['unor']['atasan']['unor_jabatan'] }}</td>
            </tr>
            <tr class="name-row">
                <td>{{ $bawahan['nama_asn'] }}</td>
                <td>{{ $bawahan['unor']['atasan']['asn']['nama_atasan'] }}</td>
            </tr>
            <tr class="id-row">
                <td>{{ $bawahan['id_asn'] }}</td>
                <td>{{ $bawahan['unor']['atasan']['asn']['nip_atasan'] }}</td>
            </tr>
        </tbody>
    </table>
</body>





</html>
