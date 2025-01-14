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
            font-size: 6;
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
    <div class="title-wrapper" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="title">MATRIKS PEMBAGIAN PERAN DAN HASIL</div>
    </div>

    <table class="table-sasaran" style="width: 100%;">
        <thead style="background-color: whitesmoke">
            <tr>
                <td>Pegawai</td>
                <td>Jabatan</td>
                <td colspan="8">
                    OUTCOME ANTARA / OUTPUT / LAYANAN
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: whitesmoke">SYAIFUL SAFRIL LUMA</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI
                    KEPEGAWAIAN</td>
                <td>Terlaksananya Pengembangan Sistem Informasi
                    Kepegawaian</td>
                <td>Terlaksanakan tugas kedinasan lain yang diberikan
                    oleh atasan baik secara lisan maupun tertulis</td>
                <td>Tersedianya laporan pelaksanaan kegiatan Pengolahan
                    data dan arsip kepegawaian, Kegiatan Pengadaan ASN dan Kegiatan Pemberhentian ASN</td>
                <td>Terlaksananya Monitoring, Evaluasi, Rekonsiliasi
                    Data dan Informasi Kepegawaian antar instansi, unit kerja, perorangan, organisasi dan stakeholder
                    lainnya</td>
                <td>Terlaksananya pengoordinasian dan penyelenggaraan
                    kegiatan Pengadaan ASN serta penyelesaian administrasi pengangkatan ASN</td>
                <td>Tersedianya Dokumen Pelaksanaan Program dan Kegiatan
                    Bidang pengadaan pemberhentian dan informasi kepegawaian</td>
                <td>Terlaksananya pengoordinasian dan penyelenggaraan
                    kegiatan Pengolahan Data, Arsip dan Informasi Kepegawaian</td>
                <td>Terlaksananya pengoordinasian dan penyelenggaraan
                    kegiatan Pemberhentian ASN</td>
            </tr>
            <tr>
                <td style="background-color: whitesmoke">SYAIFUL SAFRIL LUMA</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI
                    KEPEGAWAIAN</td>
                <td className="border border-black p-2">Terlaksananya Pengembangan Sistem Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksanakan tugas kedinasan lain yang diberikan oleh atasan
                    baik secara lisan maupun tertulis</td>
                <td className="border border-black p-2">Tersedianya laporan pelaksanaan kegiatan Pengolahan data dan
                    arsip kepegawaian, Kegiatan Pengadaan ASN dan Kegiatan Pemberhentian ASN</td>
                <td className="border border-black p-2">Terlaksananya Monitoring, Evaluasi, Rekonsiliasi Data dan
                    Informasi Kepegawaian antar instansi, unit kerja, perorangan, organisasi dan stakeholder lainnya
                </td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengadaan ASN serta penyelesaian administrasi pengangkatan ASN</td>
                <td className="border border-black p-2">Tersedianya Dokumen Pelaksanaan Program dan Kegiatan Bidang
                    pengadaan pemberhentian dan informasi kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengolahan Data, Arsip dan Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pemberhentian ASN</td>
            </tr>
            <tr>
                <td style="background-color: whitesmoke">SYAIFUL SAFRIL LUMA</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI
                    KEPEGAWAIAN</td>
                <td className="border border-black p-2">Terlaksananya Pengembangan Sistem Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksanakan tugas kedinasan lain yang diberikan oleh atasan
                    baik secara lisan maupun tertulis</td>
                <td className="border border-black p-2">Tersedianya laporan pelaksanaan kegiatan Pengolahan data dan
                    arsip kepegawaian, Kegiatan Pengadaan ASN dan Kegiatan Pemberhentian ASN</td>
                <td className="border border-black p-2">Terlaksananya Monitoring, Evaluasi, Rekonsiliasi Data dan
                    Informasi Kepegawaian antar instansi, unit kerja, perorangan, organisasi dan stakeholder lainnya
                </td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengadaan ASN serta penyelesaian administrasi pengangkatan ASN</td>
                <td className="border border-black p-2">Tersedianya Dokumen Pelaksanaan Program dan Kegiatan Bidang
                    pengadaan pemberhentian dan informasi kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengolahan Data, Arsip dan Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pemberhentian ASN</td>
            </tr>
            <tr>
                <td style="background-color: whitesmoke">SYAIFUL SAFRIL LUMA</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI
                    KEPEGAWAIAN</td>
                <td className="border border-black p-2">Terlaksananya Pengembangan Sistem Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksanakan tugas kedinasan lain yang diberikan oleh atasan
                    baik secara lisan maupun tertulis</td>
                <td className="border border-black p-2">Tersedianya laporan pelaksanaan kegiatan Pengolahan data dan
                    arsip kepegawaian, Kegiatan Pengadaan ASN dan Kegiatan Pemberhentian ASN</td>
                <td className="border border-black p-2">Terlaksananya Monitoring, Evaluasi, Rekonsiliasi Data dan
                    Informasi Kepegawaian antar instansi, unit kerja, perorangan, organisasi dan stakeholder lainnya
                </td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengadaan ASN serta penyelesaian administrasi pengangkatan ASN</td>
                <td className="border border-black p-2">Tersedianya Dokumen Pelaksanaan Program dan Kegiatan Bidang
                    pengadaan pemberhentian dan informasi kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengolahan Data, Arsip dan Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pemberhentian ASN</td>
            </tr>
            <tr>
                <td style="background-color: whitesmoke">SYAIFUL SAFRIL LUMA</td>
                <td>KEPALA BIDANG PENGADAAN, PEMBERHENTIAN DAN INFORMASI
                    KEPEGAWAIAN</td>
                <td className="border border-black p-2">Terlaksananya Pengembangan Sistem Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksanakan tugas kedinasan lain yang diberikan oleh atasan
                    baik secara lisan maupun tertulis</td>
                <td className="border border-black p-2">Tersedianya laporan pelaksanaan kegiatan Pengolahan data dan
                    arsip kepegawaian, Kegiatan Pengadaan ASN dan Kegiatan Pemberhentian ASN</td>
                <td className="border border-black p-2">Terlaksananya Monitoring, Evaluasi, Rekonsiliasi Data dan
                    Informasi Kepegawaian antar instansi, unit kerja, perorangan, organisasi dan stakeholder lainnya
                </td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengadaan ASN serta penyelesaian administrasi pengangkatan ASN</td>
                <td className="border border-black p-2">Tersedianya Dokumen Pelaksanaan Program dan Kegiatan Bidang
                    pengadaan pemberhentian dan informasi kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pengolahan Data, Arsip dan Informasi Kepegawaian</td>
                <td className="border border-black p-2">Terlaksananya pengoordinasian dan penyelenggaraan kegiatan
                    Pemberhentian ASN</td>
            </tr>
        </tbody>
    </table>
</body>





</html>
