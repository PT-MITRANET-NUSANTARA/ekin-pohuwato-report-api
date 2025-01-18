<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

class Ekin extends Controller
{
    public function perjanjianKinerja()
    {
        $nama_pihak_pertama = '';
        $jabatan_pihak_pertama = '';
        $nip_pihak_pertama = '';
        $nama_pihak_kedua = '';
        $jabatan_pihak_kedua = '';
        $nip_pihak_kedua = '';
        // Inisialisasi PDFMerger
        $pdfMerger = PDFMerger::init();

        // Pastikan direktori penyimpanan sementara tersedia
        $tmpDir = storage_path('tmp');
        if (!file_exists($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }

        // Generate PDF untuk kop surat
        $kop_surat = Pdf::loadView('ekin.perjanjian_kinerja.kop_surat', [
            'nama_pihak_pertama' => $nama_pihak_pertama,
            'jabatan_pihak_pertama' => $jabatan_pihak_pertama,
            'nip_pihak_pertama' => $nip_pihak_pertama,
            'nama_pihak_kedua' => $nama_pihak_kedua,
            'jabatan_pihak_kedua' => $jabatan_pihak_kedua,
            'nip_pihak_kedua' => $nip_pihak_kedua,
        ])
            ->setPaper('a4', 'portrait')
            ->output(); // Konversi ke string PDF
        $pdfMerger->addString($kop_surat);

        // Generate PDF untuk isi
        $isi = Pdf::loadView('ekin.perjanjian_kinerja.isi', [
            'nama_pihak_pertama' => $nama_pihak_pertama,
            'jabatan_pihak_pertama' => $jabatan_pihak_pertama,
            'nip_pihak_pertama' => $nip_pihak_pertama,
            'nama_pihak_kedua' => $nama_pihak_kedua,
            'jabatan_pihak_kedua' => $jabatan_pihak_kedua,
            'nip_pihak_kedua' => $nip_pihak_kedua,
        ])
            ->setPaper('a4', 'portrait')
            ->output(); // Konversi ke string PDF
        $pdfMerger->addString($isi);

        // Path untuk menyimpan file hasil merge
        $filePath = storage_path('tmp/perjanjian_kinerja.pdf');

        // Lakukan merge dan simpan hasilnya
        $pdfMerger->merge();

        // Simpan ke file
        file_put_contents($filePath, $pdfMerger->output());

        // Return file sebagai download response
        return response()->download($filePath)->deleteFileAfterSend(true);
    }


    public function evaluasiKinerja()
    {
        $pdfMerger = PDFMerger::init();


        $periode = '';
        $nama_penilai = '';
        $jabatan_penilai = '';
        $nip_penilai = '';
        $unit_penilai = '';
        $nama_dinilai = '';
        $jabatan_dinilai = '';
        $nip_dinilai = '';
        $unit_dinilai = '';
        $pangkat_dinilai = '';
        $pangkat_penilai = '';
        // Generate PDF content

        // Pastikan direktori penyimpanan sementara tersedia
        $tmpDir = storage_path('tmp');
        if (!file_exists($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }
        $hal1 = Pdf::loadView('ekin.evaluasi_kinerja.hal1', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'portrait')->output();
        $pdfMerger->addString($hal1);

        // Path untuk menyimpan file hasil merge
        $filePath = storage_path('tmp/evaluasi_kinerja.pdf');

        // Lakukan merge dan simpan hasilnya
        $pdfMerger->merge();

        // Simpan ke file
        file_put_contents($filePath, $pdfMerger->output());

        // Return file sebagai download response
        return response()->download($filePath)->deleteFileAfterSend(true);
    }

    public function matriksPeranHasil()
    {
        // Generate PDF content
        $pdf = Pdf::loadView('ekin.matriks_peran_hasil.hal1', [])
            ->setPaper('a4', 'landscape');

        // Save PDF to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf');
        file_put_contents($tempFile, $pdf->output());

        // Return the file as a download response
        return response()->download($tempFile, 'matriks_peran_hasil.pdf')->deleteFileAfterSend(true);
    }

    public function hasilSkp()
    {
        $pdfMerger = PDFMerger::init();


        $periode = '';
        $nama_penilai = '';
        $jabatan_penilai = '';
        $nip_penilai = '';
        $unit_penilai = '';
        $nama_dinilai = '';
        $jabatan_dinilai = '';
        $nip_dinilai = '';
        $unit_dinilai = '';
        $pangkat_dinilai = '';
        $pangkat_penilai = '';

        // Pastikan direktori penyimpanan sementara tersedia
        $tmpDir = storage_path('tmp');
        if (!file_exists($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }

        // Generate PDF content
        $cover = Pdf::loadView('ekin.hasil_skp.cover', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'potrait')->output();
        $pdfMerger->addString($cover);


        $cover = Pdf::loadView('ekin.hasil_skp.hal1', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'landscape')->output();
        $pdfMerger->addString($cover);


        $cover = Pdf::loadView('ekin.hasil_skp.hal2', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'landscape')->output();
        $pdfMerger->addString($cover);

        $cover = Pdf::loadView('ekin.hasil_skp.last', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'potrait')->output();
        $pdfMerger->addString($cover);


        // Path untuk menyimpan file hasil merge
        $filePath = storage_path('tmp/hasil_skp.pdf');

        // Lakukan merge dan simpan hasilnya
        $pdfMerger->merge();

        // Simpan ke file
        file_put_contents($filePath, $pdfMerger->output());

        // Return file sebagai download response
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
    public function formPenilaian()
    {
        $pdfMerger = PDFMerger::init();


        $periode = '';
        $nama_penilai = '';
        $jabatan_penilai = '';
        $nip_penilai = '';
        $unit_penilai = '';
        $nama_dinilai = '';
        $jabatan_dinilai = '';
        $nip_dinilai = '';
        $unit_dinilai = '';
        $pangkat_dinilai = '';
        $pangkat_penilai = '';
        // Generate PDF content

        // Pastikan direktori penyimpanan sementara tersedia
        $tmpDir = storage_path('tmp');
        if (!file_exists($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }
        // Generate PDF content
        $hal1 = Pdf::loadView('ekin.form_penilaian.hal1', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'portrait')->output();
        $pdfMerger->addString($hal1);


        // Path untuk menyimpan file hasil merge
        $filePath = storage_path('tmp/form_penilaian.pdf');

        // Lakukan merge dan simpan hasilnya
        $pdfMerger->merge();

        // Simpan ke file
        file_put_contents($filePath, $pdfMerger->output());

        // Return file sebagai download response
        return response()->download($filePath)->deleteFileAfterSend(true);
    }

    public function rencanaSkp()
    {
        $pdfMerger = PDFMerger::init();


        $periode = '';
        $nama_penilai = '';
        $jabatan_penilai = '';
        $nip_penilai = '';
        $unit_penilai = '';
        $nama_dinilai = '';
        $jabatan_dinilai = '';
        $nip_dinilai = '';
        $unit_dinilai = '';
        $pangkat_dinilai = '';
        $pangkat_penilai = '';
        // Generate PDF content

        // Pastikan direktori penyimpanan sementara tersedia
        $tmpDir = storage_path('tmp');
        if (!file_exists($tmpDir)) {
            mkdir($tmpDir, 0755, true);
        }
        // Generate PDF content
        $hal1 = Pdf::loadView('ekin.rencana_skp.hal1', [
            'periode' => $periode,
            'nama_penilai' => $nama_penilai,
            'jabatan_penilai' => $jabatan_penilai,
            'nip_penilai' => $nip_penilai,
            'unit_penilai' => $unit_penilai,
            'pangkat_penilai' => $pangkat_penilai,
            'nama_dinilai' => $nama_dinilai,
            'jabatan_dinilai' => $jabatan_dinilai,
            'nip_dinilai' => $nip_dinilai,
            'unit_dinilai' => $unit_dinilai,
            'pangkat_dinilai' => $pangkat_dinilai,
        ])
            ->setPaper('a4', 'portrait')->output();
        $pdfMerger->addString($hal1);


        // Path untuk menyimpan file hasil merge
        $filePath = storage_path('tmp/form_penilaian.pdf');

        // Lakukan merge dan simpan hasilnya
        $pdfMerger->merge();

        // Simpan ke file
        file_put_contents($filePath, $pdfMerger->output());

        // Return file sebagai download response
        return response()->download($filePath)->deleteFileAfterSend(true);
    }
}
