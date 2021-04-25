<?php

namespace App\Services;

use App\Models\Remessa;
use App\Models\RemessaAnexo;

use Carbon\Carbon;
use DB;


class RemessaService 
{
    
    public function save($data)
    {
        try {
            DB::beginTransaction();

            $data_envio_mal_formatada = str_replace('/', '-', $data['date']);
            $data_envio = date('Y-m-d', strtotime($data_envio_mal_formatada));

            $remessa = Remessa::create([
                'titulo' => $data['titulo'],
                'remessa_tipo_id' => $data['tipo'],
                'data_envio' => $data_envio
            ]);
            
            foreach($data['anexos'] as $anexo) 
            {
                RemessaAnexo::create([
                    'path' => $anexo->store('remessa_anexos'),
                    'remessa_id' => $remessa->id
                ]);
            }

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }
    }
}