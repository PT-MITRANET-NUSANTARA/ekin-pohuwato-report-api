<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class Ekin extends Controller
{
    public function perjanjianKinerja(Request $request)
    {
        $nama_pihak_pertama = $request->input('nama_pihak_pertama', '');
        $jabatan_pihak_pertama = $request->input('jabatan_pihak_pertama', '');
        $nip_pihak_pertama = $request->input('nip_pihak_pertama', '');
        $nama_pihak_kedua = $request->input('nama_pihak_kedua', '');
        $jabatan_pihak_kedua = $request->input('jabatan_pihak_kedua', '');
        $nip_pihak_kedua = $request->input('nip_pihak_kedua', '');

        $pdfMerger = PDFMerger::init();

        $kop_surat = Pdf::loadView('ekin.perjanjian_kinerja.kop_surat', compact(
            'nama_pihak_pertama',
            'jabatan_pihak_pertama',
            'nip_pihak_pertama',
            'nama_pihak_kedua',
            'jabatan_pihak_kedua',
            'nip_pihak_kedua'
        ))->setPaper('a4', 'portrait')->output();
        $pdfMerger->addString($kop_surat);

        $isi = Pdf::loadView('ekin.perjanjian_kinerja.isi', compact(
            'nama_pihak_pertama',
            'jabatan_pihak_pertama',
            'nip_pihak_pertama',
            'nama_pihak_kedua',
            'jabatan_pihak_kedua',
            'nip_pihak_kedua'
        ))->setPaper('a4', 'portrait')->output();
        $pdfMerger->addString($isi);

        $pdfMerger->merge();
        $mergedPdf = $pdfMerger->output();

        return response($mergedPdf, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="perjanjian_kinerja.pdf"');
    }



    public function evaluasiKinerja(Request $request)
    {
        $periode = $request->input('periode', '');
        $nama_penilai = $request->input('nama_penilai', '');
        $jabatan_penilai = $request->input('jabatan_penilai', '');
        $nip_penilai = $request->input('nip_penilai', '');
        $unit_penilai = $request->input('unit_penilai', '');
        $pangkat_penilai = $request->input('pangkat_penilai', '');
        $nama_dinilai = $request->input('nama_dinilai', '');
        $jabatan_dinilai = $request->input('jabatan_dinilai', '');
        $nip_dinilai = $request->input('nip_dinilai', '');
        $unit_dinilai = $request->input('unit_dinilai', '');
        $pangkat_dinilai = $request->input('pangkat_dinilai', '');

        $pdfMerger = PDFMerger::init();

        $hal1 = Pdf::loadView('ekin.evaluasi_kinerja.hal1', compact(
            'periode',
            'nama_penilai',
            'jabatan_penilai',
            'nip_penilai',
            'unit_penilai',
            'pangkat_penilai',
            'nama_dinilai',
            'jabatan_dinilai',
            'nip_dinilai',
            'unit_dinilai',
            'pangkat_dinilai'
        ))->setPaper('a4', 'portrait')->output();

        $pdfMerger->addString($hal1);
        $pdfMerger->merge();
        $mergedPdf = $pdfMerger->output();

        return response($mergedPdf, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="evaluasi_kinerja.pdf"');
    }


    public function matriksPeranHasil()
    {
        $pdf = Pdf::loadView('ekin.matriks_peran_hasil.hal1', [])
            ->setPaper('a4', 'landscape');

        return response($pdf->output(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="matriks_peran_hasil.pdf"');
    }


    public function hasilSkp(Request $request)
    {
        $periode = $request->input('periode', '');
        $nama_penilai = $request->input('nama_penilai', '');
        $jabatan_penilai = $request->input('jabatan_penilai', '');
        $nip_penilai = $request->input('nip_penilai', '');
        $unit_penilai = $request->input('unit_penilai', '');
        $pangkat_penilai = $request->input('pangkat_penilai', '');
        $nama_dinilai = $request->input('nama_dinilai', '');
        $jabatan_dinilai = $request->input('jabatan_dinilai', '');
        $nip_dinilai = $request->input('nip_dinilai', '');
        $unit_dinilai = $request->input('unit_dinilai', '');
        $pangkat_dinilai = $request->input('pangkat_dinilai', '');

        $chart = (new LarapexChart)->lineChart()
            ->setTitle('Capaian Kinerja Organisasi')
            ->setSubtitle('Hasil kinerja tahun 2023')
            ->addData('Capaian', [70, 85, 60, 90, 100])
            ->setXAxis(['Januari', 'Februari', 'Maret', 'April', 'Mei']);

        $pdfMerger = PDFMerger::init();

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
            'chart' => $chart,
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

        $pdfMerger->merge();
        $mergedPdf = $pdfMerger->output();

        return response($mergedPdf, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="hasil_skp.pdf"');
    }

    public function formPenilaian()
    {
        // Initialize PDFMerger instance
        $pdfMerger = PDFMerger::init();

        // Define the variables (could be passed dynamically or set in the controller)
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

        // Generate the first PDF (Hal1 view)
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
            ->setPaper('a4', 'portrait')
            ->output();

        // Add the generated content to the PDFMerger
        $pdfMerger->addString($hal1);

        // Merge the PDF contents
        $pdfMerger->merge();
        $mergedPdf = $pdfMerger->output();

        // Return the merged PDF as an inline response
        return response($mergedPdf, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="form_penilaian.pdf"');
    }


    public function rencanaSkp()
    {
        // Initialize PDFMerger instance
        $pdfMerger = PDFMerger::init();

        // Define the variables (could be passed dynamically or set in the controller)
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

        // Generate the first PDF (Hal1 view)
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
            ->setPaper('a4', 'landscape')
            ->output();

        // Add the generated content to the PDFMerger
        $pdfMerger->addString($hal1);

        // Merge the PDF contents
        $pdfMerger->merge();
        $mergedPdf = $pdfMerger->output();

        // Return the merged PDF as an inline response
        return response($mergedPdf, 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="rencana_skp.pdf"');
    }
}
