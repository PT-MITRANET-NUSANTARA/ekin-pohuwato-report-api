<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            margin: 2cm;
        }

        body {
            font-family: 'Helvetica', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
        }

        .paragraf {
            text-align: justify;
            text-indent: 25px;
            line-height: 1.50em;
        }


        .container img {
            width: 150px;
        }

        .title {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
        }

        .subtitle {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }

        img {
            width: 2rem;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
        }

        .table th {
            text-align: center;
            vertical-align: middle;
        }

        .table td {
            text-align: left;
            vertical-align: top;
        }

        .ttd {
            width: 100%;
        }

        .ttd td {
            width: 33.33%;
            text-align: center;
        }

        .details {
            margin-top: 1rem;
            text-align: left;
            line-height: 1.5em;
        }

        .details p {
            margin: 0.5em 0;
        }

        
    </style>
</head>

<body>
    <div class="container" style="display: flex; justify-content: space-between; height: 100%;">
        <img class="logo" style="width: 120px" src="{{ public_path('image/pohuwato.jpg') }}" alt="Logo pohuwato">
        <div class="title-wrapper" style="margin-top: 2rem">
            <div class="title">PERJANJIAN KINERJA</div>
            <div class="title">TAHUN 2020</div>
            <div class="title" style="padding-block: 6rem">BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</div>
            <div class="title" style="padding-block: 6rem">KABUPATEN POHUWATO</div>
        </div>

        <p class="paragraf" style="margin-top: 2rem">
            Dalam rangka mewujudkan manajemen pemerintahan yang efektif, transparan, dan akuntabel serta berorientasi
            pada hasil, kami yang bertanda tangan dibawah ini :
        </p>
        <div class="details">
            <p class="paragraf">Nama: Mohamad Rafiq Daud</p>
            <p class="paragraf">Jabatan: Front End Developer</p>
            <p style="margin-top: 1rem">Selanjutnya disebut Pihak Pertama</p>
            <p class="paragraf">Nama: Mohamad Rafiq Daud</p>
            <p class="paragraf">Jabatan: Front End Developer</p>
            <p style="margin-top: 1rem">Selaku atasan langsung pihak pertama, selanjutnya disebut Pihak Kedua</p>
        </div>
        <p class="paragraf">
            Pihak pertama berjanji akan mewujudkan target kinerja yang seharusnya sesuai lampiran perjanjian ini, dalam
            rangka mencapai target kinerja jangka menengah seperti yang telah ditetapkan dalam dokumen perencanaan.
            Keberhasilan dan kegagalan pencapaian target kinerja tersebut menjadi tanggung jawab kami.
        </p>
        <p class="paragraf">
            Pihak kedua akan melakukan supervisi yang diperlukan serta akan melakukan evaluasi terhadap capaian kinerja
            dari perjanjian ini dan mengambil tindakan yang diperlukan dalam rangka pemberian penghargaan dan sanksi.
        </p>
        <table style="width: 100%; margin-top: 1.50rem">
            <tbody>
                <tr style="width: 50%;">
                    <td style="width: 50%;">Pegawai yang dinilai</td>
                    <td style="width: 50%;">Pejabat penilai kinerja</td>
                </tr>
                <tr style="width: 50%;">
                    <td style="padding: 3rem 0; width: 50%;"></td>
                    <td style="padding: 3rem 0; width: 50%;"></td>
                </tr>
                <tr style="width: 50%;">
                    <td style="width: 50%;">Kepala LPMPP UNG</td>
                    <td style="width: 50%;">Kepala Pusat SIM dan Survei SPMI</td>
                </tr>
                <tr style="width: 50%;">
                    <td style="width: 50%;">Mohamad Rafiq Daud</td>
                    <td style="width: 50%;">Ical Sumargo</td>
                </tr>
                <tr style="width: 50%;">
                    <td style="width: 50%;">123123123</td>
                    <td style="width: 50%;">123123123</td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
