<?php

namespace App\Services\Montagem;

use Illuminate\Support\Facades\Storage;
use PDF;

class DOE 
{
    
    public static function mount($data) {

        // do something

        $filenameTmp = sha1(md5(rand())).'.pdf';

        $html = '<h1>DOE DOCUMENT</h1>';
        $html .= json_encode($data);
        
        $pdf = PDF::loadHtml($html);    
        $pdf->save( Storage::disk('public')->path('pdf-tmp/'.$filenameTmp) );
        

        $url = Storage::disk('public')->url('pdf-tmp/'.$filenameTmp);

        return $url; 

    }

}