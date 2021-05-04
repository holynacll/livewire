<?php

namespace App\Services;

use App\Models\Remessa;
use App\Models\RemessaAnexo;

use Carbon\Carbon;
use DB;
use Auth;


class RemessaService 
{
    
    public function save($data)
    {
        try {
            if( !empty($data) ) {

                DB::beginTransaction();

                $data_envio_mal_formatada = str_replace('/', '-', $data['date']);
                $data_envio = date('Y-m-d', strtotime($data_envio_mal_formatada));

                $remessa = Remessa::create([
                    'titulo' => $data['titulo'],
                    'tipo_remessa_id' => $data['tipo'],
                    'instituicao_id' => Auth::user()->instituicao_id,
                    'user_id' => Auth::user()->id,
                    'data_envio' => $data_envio
                ]);
                
                foreach($data['anexos'] as $anexo) 
                {
                    RemessaAnexo::create([
                        'path' => $anexo->store('remessa_anexos'),
                        'remessa_id' => $remessa->id
                    ]);
                }

                return $remessa;

                DB::commit();
            } else {
                dd('data is empty');
            }

        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }
}