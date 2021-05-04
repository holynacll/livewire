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
        
    $remessas = \App\Models\Remessa::where('data_envio', date('Y-m-d', strtotime(now())))->get();

    $dt = new \Carbon\Carbon( date('Y-m-d', strtotime(now())) );

    $date_header = $dt->translatedFormat('l\, j \d\e F \d\e Y');

    $pdf = new \App\Models\Pdf();

    // add a page
    $pdf->AddPage();

    // CAPA
    $pdf->SetFont('Helvetica', '', 32);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetXY(60, 45);
    $pdf->Write(0,  'CAPA');
    

    // add a page
    $pdf->AddPage();

    // CAPA
    $pdf->SetFont('Helvetica', '', 32);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetXY(60, 75);
    $pdf->Write(0,  'SUMARIO');

    $pdf->SetFont('Helvetica', '', 14);
    $gap = 0;

    // SUMARIO
    foreach($remessas as $remessa) {
        $gap += 20;
        $pdf->SetXY(20, 75+$gap);
        $pdf->Write(0,  $remessa->tipo->descricao);
    }

    // CONTEUDO
    foreach($remessas as $remessa) {
            
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
                $pdf->Write(0,  $date_header);

                if($pageNo < $pageCount) {
                      // add a page
                    $pdf->AddPage();
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
