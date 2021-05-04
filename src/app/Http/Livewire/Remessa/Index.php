<?php

namespace App\Http\Livewire\Remessa;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Remessa;
use App\Services\Montagem\DOU;


class Index extends Component
{
    use WithPagination;

    public function visualizar(Remessa $remessa)
    {
        $url = DOU::mount($remessa);

        return redirect($url);
    }

    public function render()
    {
        return view('livewire.remessa.index',[
            'remessas' => Remessa::where('instituicao_id', \Auth::user()->instituicao_id)
            ->paginate(10)
        ]);
    }
}
