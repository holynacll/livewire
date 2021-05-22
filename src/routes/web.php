<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
   
    Route::get('/dashboard', App\Http\Livewire\Dashboard::class)->name('dashboard');
    Route::get('/', App\Http\Livewire\Remessa\NovaRemessa::class)->name('remessa.create'); 

    Route::view('profile', 'profile')->name('profile');

    Route::prefix('remessa')->group(function () {
        Route::get('/', App\Http\Livewire\Remessa\Index::class)->name('remessa.index'); 
        Route::get('/nova-remessa', App\Http\Livewire\Remessa\NovaRemessa::class)->name('remessa.create'); 

        Route::post('confirmation', function(){
            return view('livewire.remessa.form-confirmation');
        })->name('remessa.form-confirmation'); 

    });

    Route::get('users', App\Http\Livewire\Users::class)->name('users');

});

// TEMP FUNCTIONS

Route::get('gerar-diario-oficial', function () {

    \Carbon\Carbon::setLocale('pt-br');

    $date_today = date('Y-m-d', strtotime(now()));
        
    $remessas = \App\Models\Remessa::where('data_envio', $date_today)->get();

    $dt = new \Carbon\Carbon( date('Y-m-d', strtotime(now())) );

    $date_header = $dt->translatedFormat('l\, j \d\e F \d\e Y');

    $pdf = new \App\Models\Pdf();

    // add a page - capa
    $pdf->AddPage();

    // CAPA
    $filepath = storage_path('app/public/capa.pdf');

    // set the source file
    $pdf->setSourceFile($filepath);

    // import page 1
    $tplIdx = $pdf->importPage(1);
    // use the imported page and place it at point 10,10 with a width of 100 mm
    $pdf->useTemplate($tplIdx);
    // $pdf->SetFont('Helvetica', '', 32);
    // $pdf->SetTextColor(0, 0, 0);
    // $pdf->SetXY(60, 45);
    // $pdf->Write(0,  'CAPA');
    

    // add a page - sumario
    $pdf->AddPage();
    $pdf->setCustomTemplate();

    // SUMARIO
    $pdf->SetFont('Helvetica', '', 32);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetXY(78, 80);
    $pdf->Write(0,  'SUMARIO');

    $pdf->SetFont('Helvetica', '', 12);
    $gap = 0;

    // SUMARIO
    $sumarioList = array();
    $sumarioList['bullet'] = chr(149);
    $sumarioList['margin'] = ' ';
    $sumarioList['indent'] = 0;
    $sumarioList['spacer'] = 0;
    $sumarioList['text'] = array();

    foreach($remessas as $remessa) {
        $txtWithoutSplashs = stripslashes($remessa->titulo.' N° '.$remessa->id.'/'.date('Y', strtotime($remessa->data_envio)));
        $sumarioList['text'][] = iconv('UTF-8', 'windows-1252', $txtWithoutSplashs);
    }

    $column_width = $pdf->GetPageWidth()-30;
    $pdf->SetXY(20, 105);
    $pdf->MultiCellBltArray($column_width-$pdf->getX(),6,$sumarioList);
    $pdf->Ln(20);    


    // CONTEUDO
    foreach($remessas as $remessa) {
            
        foreach($remessa->anexos as $file) {
            $filepath =  \Storage::disk('public')->path($file->path);
            
            // add a page
            $pdf->AddPage();
            $pdf->setCustomTemplate();

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
                $pdf->Write(0,  $date_header);

                if($pageNo < $pageCount) {
                      // add a page
                    $pdf->AddPage();
                    $pdf->setCustomTemplate();
                }

            }
        }
    }

    $filenameTmp = sha1(md5(rand())).'.pdf';

    $pdf->Output( Storage::disk('public')->path('pdf-tmp/'.$filenameTmp) ,'F');  

    $url = Storage::disk('public')->url('pdf-tmp/'.$filenameTmp);

    return '<a href='.$url.'>'.$url.'</a>';
    

});

// SCRIPTS
Route::get('create_tipo_remessa/{desc}', function ($desc) {
    \App\Models\TipoRemessa::create([
        'descricao' => $desc
    ]);
});

Route::get('create_tipo_instituicao/{desc}', function ($desc) {
    \App\Models\TipoInstituicao::create([
        'descricao' => $desc
    ]);
});

Route::get('create_instituicao/{desc}', function ($desc) {
    \App\Models\Instituicao::create([
        'descricao' => $desc,
        'tipo_instituicao_id' => 1
    ]);
});


require __DIR__.'/auth.php';
