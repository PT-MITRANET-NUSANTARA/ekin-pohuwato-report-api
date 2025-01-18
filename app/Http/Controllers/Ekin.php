<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;

class Ekin extends Controller
{
    public function perjanjianKinerja()
    {
        return $this->generatePdf('ekin.perjanjian_kinerja.kop_surat', 'kop_surat.pdf', 'a4', 'portrait');
    }

    public function evaluasiKinerja()
    {
        return $this->generatePdf('ekin.evaluasi_kinerja.hal1', 'evaluasi_kinerja.pdf', 'a4', 'portrait');
    }

    public function matriksPeranHasil()
    {
        return $this->generatePdf('ekin.matriks_peran_hasil.hal1', 'matriks_peran_hasil.pdf', 'a4', 'landscape');
    }

    public function hasilSkp()
    {
        return $this->generatePdf('ekin.hasil_skp.hal2', 'hasil_skp.pdf', 'a4', 'portrait');
    }

    public function formPenilaian()
    {
        return $this->generatePdf('ekin.form_penilaian.hal1', 'form_penilaian.pdf', 'a4', 'portrait');
    }

    public function rencanaSkp()
    {
        return $this->generatePdf('ekin.rencana_skp.hal1', 'rencana_skp.pdf', 'a4', 'portrait');
    }

    /**
     * Generate a PDF and return as a downloadable API response.
     *
     * @param string $view
     * @param string $filename
     * @param string $paper
     * @param string $orientation
     * @return \Illuminate\Http\Response
     */
    private function generatePdf($view, $filename, $paper, $orientation)
    {
        // Load the view and set PDF options
        $pdf = Pdf::loadView($view, [])
            ->setPaper($paper, $orientation);

        // Stream the PDF as a downloadable response
        return response()->streamDownload(
            fn() => print($pdf->output()),
            $filename,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ]
        );
    }
}
