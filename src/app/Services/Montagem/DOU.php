<?php

namespace App\Services\Montagem;

use App\Models\Pdf;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Fpdi;



class DOU
{
    
    public static function mount($remessa) {

        Carbon::setLocale('pt-br');

        $dt = Carbon::now('America/Bahia')->translatedFormat('l\, j \d\e F \d\e Y');

        $pdf = new Pdf();
        
        foreach($remessa->anexos as $file) {
            $filepath =  \Storage::disk('public')->path($file->path);
            
            // add a page
            $pdf->AddPage();

            // set the source file
            $pageCount = $pdf->setSourceFile($filepath);

            for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {

                $templateId = $pdf->importPage($pageNo);
                
                // use the imported page and place it at point 10,10 with a width of 100 mm
                $pdf->useTemplate($templateId, 5, 70, 200, 245);

                // now write some text above the imported page
                $pdf->SetFont('Helvetica', '', 10);
                $pdf->SetTextColor(0, 0, 0);
                $pdf->SetXY(145, 15);
                $pdf->Write(0,  $dt);

                if($pageNo < $pageCount) {
                      // add a page
                    $pdf->AddPage();
                }

            }
        }

        $filenameTmp = sha1(md5(rand())).'.pdf';

        $pdf->Output( Storage::disk('public')->path('pdf-tmp/'.$filenameTmp) ,'F');  

        $url = Storage::disk('public')->url('pdf-tmp/'.$filenameTmp);

        return $url;
    }
}