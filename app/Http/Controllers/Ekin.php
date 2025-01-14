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
}
