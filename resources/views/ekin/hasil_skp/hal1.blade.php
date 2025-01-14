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
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .table-evaluasi tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .table-evaluasi td {
            width: 50%;
            padding: 3rem 0;
            page-break-inside: avoid;
            page-break-after: auto;
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
        <div class="title">SASARAN KINERJA PEGAWAI</div>
        <div class="title">PENDEKATAN HASIL KINERJA KUANTITATIF</div>
        <div class="title">BAGI PEJABAT ADMINISTRASI DAN PEJABAT FUNGSIONAL</div>
        <div class="title">PERIODE :JANUARY</div>
    </div>
    <table class="table-sasaran">
        <tbody>
            <tr>
                <td style="text-align: left; font-size: 10; border: none">PEMERINTAH KAB. POHUWATO</td>
                <td style="text-align: right; font-size: 10; border: none">PERIODE PENILAIAN: 14 January 2025−14 January
                    2025</td>
            </tr>
        </tbody>
    </table>
    <table class="table-sasaran" style="font-size: 10">
        <tbody>
            <tr>
                <td>no</td>
                <td colspan="2">pegawai yang dinilai</td>
                <td>no</td>
                <td colspan="2">pegawai penilai kinerja</td>
            </tr>
            <tr>
                <td>1</td>
                <td>NAMA</td>
                <td>{bawahan?.nama_asn}</td>
                <td>1</td>
                <td>NAMA</td>
                <td>{atasan?.nama_asn}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>NIP</td>
                <td>{bawahan?.id_asn}</td>
                <td>2</td>
                <td>NIP</td>
                <td>{atasan?.id_asn}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>JABATAN</td>
                <td>{bawahan?.nama_jabatan}</td>
                <td>4</td>
                <td>JABATAN</td>
                <td>{atasan?.nama_jabatan}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>UNIT KERJA</td>
                <td>{bawahan?.unor.nama}</td>
                <td>5</td>
                <td>UNIT KERJA</td>
                <td>{atasan?.unor.nama}</td>
            </tr>
        </tbody>
    </table>
    <table class="table-sasaran" style="font-size: 10">
        <tbody>
            <tr>
                <td colspan="6" style="text-align: left">
                    Hasil Kerja
                </td>
            </tr>
            <tr style="font-weight: bold; ">
                <td>NO</td>
                <td>RENCANA HASIL KERJA PIMPINAN YANG DIINTERVENSI</td>
                <td>RENCANA HASIL KERJA </td>
                <td>ASPEK</td>
                <td>INDKATOR KINERJA INDIVIDU</td>
                <td>TARGET</td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: left">
                    Utama
                </td>
            </tr>

            {{-- {data?.rhks.map((item, index) => (
                <>
                    <tr>
                        <td className="border border-black p-2 text-center" rowSpan={item.aspek ? item.aspek.length + 1 : 1}>
                            {index + 1}
                        </td>
                        <td className="border border-black p-2 text-center" rowSpan={item.aspek ? item.aspek.length + 1 : 1} style={{ maxWidth: '12rem', padding: '8px' }}>
                            <div className="flex flex-col gap-y-2 text-left">
                                <p>{item.desc}</p>
                            </div>
                        </td>

                        <td className="border border-black p-2 text-center" rowSpan={item.aspek ? item.aspek.length + 1 : 1} style={{ maxWidth: '12rem', padding: '8px' }}>
                            <div className="flex flex-col gap-y-2 text-left">
                                <p>{item.desc}</p>
                                <span>{item.klasifikasi ? item.klasifikasi : ''}</span>
                            </div>
                        </td>
                    </tr>
                    {item.aspek?.map((aspek) => (
                        <>
                            <tr>
                                <td className="border border-black p-2 text-center">{aspek.jenis}</td>
                                <td className="border border-black p-2 text-center" style={{ maxWidth: '12rem', padding: '8px' }}>
                                    <div className="flex flex-col gap-y-2 text-left">
                                        <p>{aspek.indikator}</p>
                                    </div>
                                </td>
                                <td className="border border-black p-2 text-center">{aspek.target_tahunan.target + aspek.target_tahunan.satuan} </td>
                            </tr>
                        </>
                    ))}
                </>
            ))} --}}
            <tr>
                <td colspan="6" style="text-align: left">
                    Utama
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table-sasaran" style="font-size: 10">
        <tbody>
            <tr>
                <td colspan="4">
                    Perilaku Kerja
                </td>
            </tr>
            <tr style="font-weight: bold; font-size: 10">
                <td>NO</td>
                <td>PERILAKU KERJA</td>
                <td>EKSPEKTASI KHUSU PIMPINAN</td>
                <td>UMPAN BALIK BERKELANJUTAN BERDASARKAN BUKTI DUKUNG</td>
            </tr>
            {{-- {data?.perilakus?.map((item, index) => (
                <tr key={index}>
                    <td>{index + 1}</td>
                    <td style={{ padding: '8px' }}>
                        <div>
                            <b>{item.name}</b>
                            <ol className="list-decimal list-inside">
                                {item.isi.map((isiItem, isiIndex) => (
                                    <li key={isiIndex}>{isiItem}</li>
                                ))}
                            </ol>
                        </div>
                    </td>
                    <td>
                        {/* {item.feedback || (
                                <div className="flex items-center justify-center">
                                    <Button type="primary" onClick={() => setModal({ trigger: true, modalData: dummyFeedback, title: 'Tambah Feedback', formFields: formFields })}>
                                        Tambah
                                    </Button>
                                </div>
                            )} */}
                    </td>
                    <td></td>
                </tr>
            ))} --}}
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
    <p class="paragraf" style="font-style: italic">
        * Dalam hal rencana hasil kerja Pimpinan yang diintervensi adalah hasil kerja pejabat pimpinan tinggi dan
        Pimpinan unit kerja mandiri/ organisasi maka dituliskan rencana hasil kerja beserta indikator kinerja individu
        pejabat pimpinan tinggi dan Pimpinan unit kerja mandiri atau sasaran dan indikator kinerja organisasi yang
        diintervensi
    </p>
    <p class="paragraf" style="font-style: italic">
        ** Pimpinan dapat memberikan Ekspektasi khusus terhadap satu atau lebih aspek perilaku kerja Pegawai
    </p>
</body>





</html>
