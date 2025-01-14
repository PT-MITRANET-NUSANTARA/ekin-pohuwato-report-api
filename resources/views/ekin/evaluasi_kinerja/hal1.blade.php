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


<body>
    <div class="title-wrapper" style="margin-top: 2rem">
        <img class="logo" style="width: 120px; margin-bottom: 12px" src="{{ public_path('image/garuda.png') }}"
            alt="Logo Garuda">
        <div class="title">DOKUMEN EVALUASI KINERJA PEGAWA</div>
        <div class="title">PERIODE : JANUARI</div>
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
                <td style="text-align: right;">1 JANUARI SD 31 JANUARI TAHUN 2024</td>
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
                <td>Mohamad Rafiq Daud</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>197904012005011015</td>
            </tr>
            <tr>
                <td>PANGKAT/GOL RUANG</td>
                <td>Penata Tingkat I / III/d</td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI KEPEGAWAIAN</td>
            </tr>
            <tr>
                <td>UNIT KERJA</td>
                <td>BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI KEPEGAWAIAN</td>
            </tr>
            <tr>
                <td colspan="2">Pejabat Penilai Kinerja</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Mohamad Rafiq Daud</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>197904012005011015</td>
            </tr>
            <tr>
                <td>PANGKAT/GOL RUANG</td>
                <td>Penata Tingkat I / III/d</td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI KEPEGAWAIAN</td>
            </tr>
            <tr>
                <td>UNIT KERJA</td>
                <td>BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI KEPEGAWAIAN</td>
            </tr>
            <tr>
                <td colspan="2">Pegawai Yang Dinilai</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>Mohamad Rafiq Daud</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>197904012005011015</td>
            </tr>
            <tr>
                <td>PANGKAT/GOL RUANG</td>
                <td>Penata Tingkat I / III/d</td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI KEPEGAWAIAN</td>
            </tr>
            <tr>
                <td>UNIT KERJA</td>
                <td>BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI KEPEGAWAIAN</td>
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
                <td>Kepala LPMPP UNG</td>
                <td>Kepala Pusat SIM dan Survei SPMI</td>
            </tr>
            <tr class="name-row">
                <td>Mohamad Rafiq Daud</td>
                <td>Ical Sumargo</td>
            </tr>
            <tr class="id-row">
                <td>123123123</td>
                <td>123123123</td>
            </tr>
        </tbody>
    </table>
</body>





</html>
