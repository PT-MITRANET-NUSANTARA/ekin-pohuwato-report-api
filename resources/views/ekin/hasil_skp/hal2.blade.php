<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            font-size: 10;
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
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .table-sasaran th,
        .table-sasaran td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            vertical-align: middle;
            page-break-inside: avoid;
            page-break-after: auto;
        }

        .table-sasaran th {
            background-color: #f2f2f2;
            font-weight: bold;
            page-break-inside: avoid;
            page-break-after: auto;
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
        <div class="title">PERIODE :{{ $periode['name'] }}</div>
    </div>
    <table class="table-sasaran">
        <tbody>
            <tr>
                <td style="text-align: left; font-size: 10; border: none">PEMERINTAH KAB. POHUWATO</td>
                <td style="text-align: right; font-size: 10; border: none">{{ $start }} s.d {{ $end }}
                </td>
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
                <td>{{ $bawahan['nama_asn'] }}</td>
                <td>1</td>
                <td>NAMA</td>
                <td>{{ $bawahan['unor']['atasan']['asn']['nama_atasan'] }}</td>
            </tr>
            <tr>
                <td>2</td>
                <td>NIP</td>
                <td>{{ $bawahan['id_asn'] }}</td>
                <td>2</td>
                <td>NIP</td>
                <td>{{ $bawahan['unor']['atasan']['asn']['nip_atasan'] }}</td>
            </tr>
            <tr>
                <td>4</td>
                <td>JABATAN</td>
                <td>{{ $bawahan['nama_jabatan'] }}</td>
                <td>4</td>
                <td>JABATAN</td>
                <td>{{ $bawahan['unor']['atasan']['unor_jabatan'] }}</td>
            </tr>
            <tr>
                <td>5</td>
                <td>UNIT KERJA</td>
                <td>{{ $bawahan['unor']['nama'] }}</td>
                <td>5</td>
                <td>UNIT KERJA</td>
                <td>{{ $bawahan['unor']['atasan']['unor_nama'] }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table-sasaran" style="font-size: 8">
        <tbody style="font-size: 8">
            <tr style="font-size: 8">
                <td colspan="8" style="font-size: 8; text-align: left">
                    Capaian Kinerja Organisasi: Baik
                </td>
            </tr>
            <tr style="font-size: 8">
                <td colspan="8" style="font-size: 8; text-align: left">
                    <div className="flex flex-col gap-y-2 p-4">
                        <div style="font-size: 8; text-align: left">Pola Distribusi :</div>
                        <div>
                            <div style="font-size: 8; text-align: left">
                                {{-- <Line data={penilaianChart} /> --}}
                                {{-- Ini line chart --}}
                                {{-- {!! $chart->container() !!} --}}
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr style="font-size: 8">
                <td style="font-size: 8">NO</td>
                <td style="font-size: 8">RENCANA HASIL KERJA PIMPINAN YANG DIINTERVENSI</td>
                <td style="font-size: 8">RENCANA HASIL KERJA </td>
                <td style="font-size: 8">ASPEK</td>
                <td style="font-size: 8">INDKATOR KINERJA INDIVIDU</td>
                <td style="font-size: 8">TARGET</td>
                <td style="font-size: 8">RELASI BERDASARKAN BUKTI DUKUNG</td>
                <td style="font-size: 8">UMPAN BALIK BERKELANJUTAN BERDASARKAN BUKTI DUKUNG</td>
            </tr>
            <tr>
                <td colspan="8" style="text-align: left">
                    Utama
                </td>
            </tr>
            {{-- <tr>
                <td rowspan="3">1</td>
                <td rowspan="3">deskripsi</td>
                <td rowspan="3">deskripsi</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
            </tr>
            <tr>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
            </tr>
            <tr>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
                <td>a</td>
            </tr> --}}
            @foreach ($utama as $rhk)
                <tr>
                    <td rowspan="{{ max(count($rhk['aspek'] ?? []), 1) }}">
                        {{ $loop->iteration }}
                    </td>
                    <td rowspan="{{ max(count($rhk['aspek'] ?? []), 1) }}">
                        {{ $rhk['desc'] }}
                    </td>
                    <td rowspan="{{ max(count($rhk['aspek'] ?? []), 1) }}">
                        <p>{{ $rhk['desc'] }}</p>
                        <span>{{ $rhk['klasifikasi'] ?? '' }}</span>
                    </td>
                    @if (!empty($rhk['aspek']) && count($rhk['aspek']) > 0)
                        {{-- Tampilkan aspek pertama --}}
                        <td>{{ $rhk['aspek'][0]['jenis'] }}</td>
                        <td>{{ $rhk['aspek'][0]['indikator'] }}</td>
                        @php
                            $target = $rhk['aspek'][0]['target_tahunan']['target'] ?? 0;
                            $satuan = $rhk['aspek'][0]['target_tahunan']['satuan'] ?? '';

                            // Check if target is an integer, if so, cast it to string
                            if (is_int($target)) {
                                $target = (string) $target;
                            }

                            // If satuan is not already a string, cast it to string
                            if (!is_string($satuan)) {
                                $satuan = (string) $satuan;
                            }
                        @endphp

                        <td>{{ $target . $satuan }}</td>
                        <td>{{ $realisasi[$rhk['_id']][$rhk['aspek'][0]['_id']] ?? '' }}</td>
                        <td>{{ $rhk['aspek'][0]['feedback'][$periode['_id']]['feedback'] ?? '' }}</td>
                    @else
                        {{-- Jika tidak ada aspek --}}
                        <td colspan="5">No aspek available</td>
                    @endif
                </tr>
                {{-- Tampilkan aspek lainnya jika ada lebih dari 1 --}}
                @if (!empty($rhk['aspek']) && count($rhk['aspek']) > 1)
                    @foreach ($rhk['aspek'] as $key => $aspek)
                        @if ($key > 0)
                            {{-- Lewati aspek pertama yang sudah ditampilkan --}}
                            <tr>
                                <td>{{ $aspek['jenis'] }}</td>
                                <td>{{ $aspek['indikator'] }}</td>
                                @php
                                    $target = $aspek['target_tahunan']['target'] ?? 0;
                                    $satuan = $aspek['target_tahunan']['satuan'] ?? '';

                                    // Ensure target is cast to string if it's an integer
if (is_int($target)) {
    $target = (string) $target;
}

// Ensure satuan is cast to string if it's not already a string
                                    if (!is_string($satuan)) {
                                        $satuan = (string) $satuan;
                                    }
                                @endphp

                                <td>{{ $target . $satuan }}</td>
                                <td>{{ $realisasi[$rhk['_id']][$aspek['_id']] ?? '' }}</td>
                                <td>{{ $aspek['feedback'][$periode['_id']]['feedback'] ?? '' }}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach


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

                                <td className="border border-black p-2 text-center">
                                    {' '}
                                    {getRealisasi(
                                        aspek,
                                        item.harians?.filter((h) => {
                                            const hDate = dayjs(h.date); // Convert h.date to Day.js object
                                            const endDateTime = dayjs(periode.endDateTime); // Convert endDateTime to Day.js object
                                            console.log(h);
                                            // Check if h.date is less than or equal to endDateTime
                                            return hDate.isBefore(endDateTime) || hDate.isSame(endDateTime);
                                        })
                                    )}
                                </td>
                                <td className="border border-black p-2 text-center"></td>
                            </tr>
                        </>
                    ))}
                </>
            ))} --}}
            <tr style="font-size: 8 ; text-align: left">
                <td colspan="8" style="font-size: 8; text-align: left">
                    Tambahan
                </td>
            </tr>
            @foreach ($tambahan as $rhk)
                <tr>
                    <td rowspan="{{ max(count($rhk['aspek'] ?? []), 1) }}">
                        {{ $loop->iteration }}
                    </td>
                    <td rowspan="{{ max(count($rhk['aspek'] ?? []), 1) }}">
                        {{ $rhk['desc'] }}
                    </td>
                    <td rowspan="{{ max(count($rhk['aspek'] ?? []), 1) }}">
                        <p>{{ $rhk['desc'] }}</p>
                        <span>{{ $rhk['klasifikasi'] ?? '' }}</span>
                    </td>
                    @if (!empty($rhk['aspek']) && count($rhk['aspek']) > 0)
                        {{-- Tampilkan aspek pertama --}}
                        <td>{{ $rhk['aspek'][0]['jenis'] }}</td>
                        <td>{{ $rhk['aspek'][0]['indikator'] }}</td>
                        @php
                            $target = $rhk['aspek'][0]['target_tahunan']['target'] ?? 0;
                            $satuan = $rhk['aspek'][0]['target_tahunan']['satuan'] ?? '';

                            // Check if target is an integer, if so, cast it to string
                            if (is_int($target)) {
                                $target = (string) $target;
                            }

                            // If satuan is not already a string, cast it to string
                            if (!is_string($satuan)) {
                                $satuan = (string) $satuan;
                            }
                        @endphp

                        <td>{{ $target . $satuan }}</td>
                        <td>{{ $realisasi[$rhk['_id']][$rhk['aspek'][0]['_id']] ?? '' }}</td>
                        <td>{{ $rhk['aspek'][0]['feedback'][$periode['_id']]['feedback'] ?? '' }}</td>
                    @else
                        {{-- Jika tidak ada aspek --}}
                        <td colspan="5">No aspek available</td>
                    @endif
                </tr>
                {{-- Tampilkan aspek lainnya jika ada lebih dari 1 --}}
                @if (!empty($rhk['aspek']) && count($rhk['aspek']) > 1)
                    @foreach ($rhk['aspek'] as $key => $aspek)
                        @if ($key > 0)
                            {{-- Lewati aspek pertama yang sudah ditampilkan --}}
                            <tr>
                                <td>{{ $aspek['jenis'] }}</td>
                                <td>{{ $aspek['indikator'] }}</td>
                                @php
                                    $target = $aspek['target_tahunan']['target'] ?? 0;
                                    $satuan = $aspek['target_tahunan']['satuan'] ?? '';

                                    // Ensure target is cast to string if it's an integer
if (is_int($target)) {
    $target = (string) $target;
}

// Ensure satuan is cast to string if it's not already a string
                                    if (!is_string($satuan)) {
                                        $satuan = (string) $satuan;
                                    }
                                @endphp

                                <td>{{ $target . $satuan }}</td>
                                <td>{{ $realisasi[$rhk['_id']][$aspek['_id']] ?? '' }}</td>
                                <td>{{ $aspek['feedback'][$periode['_id']]['feedback'] ?? '' }}</td>
                            </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
            <tr style="font-size: 8; text-align: left">
                <td colspan="8" style="font-size: 8; text-align: left">
                    Rating Hasil Kerja : {{ $penilain?->ratingKinerja ?? '' }}
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
                <td>EKSPEKTASI KHUSUS PIMPINAN</td>
                <td>UMPAN BALIK BERKELANJUTAN BERDASARKAN BUKTI DUKUNG</td>
            </tr>
            @foreach ($skp['perilakus'] as $perilaku)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        <div>
                            <b>
                                {{ $perilaku['name'] }}
                            </b>
                            <ol>
                                @foreach ($perilaku['isi'] as $isi)
                                    <li>{{ $isi }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </td>
                    <td>
                        {{ $perilaku['espektasi'] }}
                    </td>
                    <td>
                        {{ $perilaku['feedback'][$periode['_id']]['isi'] ?? '' }}
                    </td>
                </tr>
            @endforeach
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
            <tr style="font-size: 8; text-align: left">
                <td colspan="4" style="font-size: 8; text-align: left">
                    RATING PERILAKU KERJA : {{ $penilain?->ratingPerilaku ?? '' }}
                </td>
            </tr>
            <tr style="font-size: 8; text-align: left">
                <td colspan="4" style="font-size: 8; text-align: left">
                    PREDIKAT KINERJA PEGAWAI* : {{ $penilain?->ratingPredikat ?? '' }}
                </td>
            </tr>
        </tbody>
    </table>
    <table class="table-evaluasi">
        <tbody>
            <tr class="header-row">
                <td>Pegawai yang dinilai</td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr class="title-row">
                <td>{{ $bawahan['nama_jabatan'] }}</td>
            </tr>
            <tr class="name-row">
                <td>{{ $bawahan['nama_asn'] }}</td>
            </tr>
            <tr class="id-row">
                <td>{{ $bawahan['id_asn'] }}</td>
            </tr>
        </tbody>
    </table>
    {{-- <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }} --}}
</body>





</html>
