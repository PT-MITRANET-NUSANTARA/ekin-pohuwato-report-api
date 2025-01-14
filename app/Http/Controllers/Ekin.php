<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class Ekin extends Controller
{
    public function perjanjianKinerja()
    {
        // Generate PDF content
        $pdf = Pdf::loadView('ekin.perjanjian_kinerja.kop_surat', [])
            ->setPaper('a4', 'portrait');

        // Save PDF to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf');
        file_put_contents($tempFile, $pdf->output());

        // Return the file as a download response
        return response()->download($tempFile, 'kop_surat.pdf')->deleteFileAfterSend(true);
    }


    public function evaluasiKinerja()
    {
        // Generate PDF content
        $pdf = Pdf::loadView('ekin.evaluasi_kinerja.hal1', [])
            ->setPaper('a4', 'portrait');

        // Save PDF to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf');
        file_put_contents($tempFile, $pdf->output());

        // Return the file as a download response
        return response()->download($tempFile, 'evaluasi_kinerja.pdf')->deleteFileAfterSend(true);
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
        // Generate PDF content
        $pdf = Pdf::loadView('ekin.hasil_skp.hal2', [])
            ->setPaper('a4', 'portrait');

        // Save PDF to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf');
        file_put_contents($tempFile, $pdf->output());

        // Return the file as a download response
        return response()->download($tempFile, 'hasil_skp.pdf')->deleteFileAfterSend(true);
    }
    public function formPenilaian()
    {
        // Generate PDF content
        $pdf = Pdf::loadView('ekin.form_penilaian.hal1', [])
            ->setPaper('a4', 'portrait');

        // Save PDF to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf');
        file_put_contents($tempFile, $pdf->output());

        // Return the file as a download response
        return response()->download($tempFile, 'form_penilaian.pdf')->deleteFileAfterSend(true);
    }

    public function rencanaSkp()
    {
        // Generate PDF content
        $pdf = Pdf::loadView('ekin.rencana_skp.hal1', [])
            ->setPaper('a4', 'portrait');

        // Save PDF to a temporary file
        $tempFile = tempnam(sys_get_temp_dir(), 'pdf');
        file_put_contents($tempFile, $pdf->output());

        // Return the file as a download response
        return response()->download($tempFile, 'rencana_skp.pdf')->deleteFileAfterSend(true);
    }
}
