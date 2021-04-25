<?php

namespace App\Http\Livewire\Remessa;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\RemessaTipo;
use App\Services\Montagem\DOU;

class Form extends Component
{
    use WithFileUploads;

    public $date = '';
    public $titulo;
    public $tipo;
    public $anexos = [];
    public $destinos;
    public $temporaryUrls = [];
    public $data = [];


    public function resetFilters()
    {
        $this->reset([
            'date',
            'titulo',
            'anexos',
            'tipo',
            'destinos'
        ]);
    }

    protected $rules = [
        'date' => 'required|date_format:d/m/Y|after_or_equal:yesterday',
        'titulo' => 'required|regex:/^[a-zA-Z0-9 ]+$/i|max:255',
        'tipo' => 'required|integer',
        'anexos' => 'required',
        'anexos.*' => 'file|mimes:pdf|max:102400',
        'destinos' => 'required',
        'destinos.*' => 'string'
    ];

    protected $messages = [
        'date.after_or_equal' => 'The date must be a date after or equal to today.'
    ];

    public function updated($propertyName, $value)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->data = $this->validate();
      
        $temporaryUrls = [];
        foreach($this->data['destinos'] as $destino){
            $className = "\App\Services\Montagem\\$destino";

            $this->temporaryUrls[$destino] = $className::mount($this->data);
        }

        // session()->flash('temporaryUrls', $temporaryUrls);
    }

    public function confirmarRemessa(\App\Services\RemessaService $remessaService)
    {
        if(!empty($this->data)) {
            $remessaService->save($this->data);
        }
    }

    public function cancelarRemessa()
    {
        return redirect()->to('/');
    }

   
 

    public function render()
    {
        return view('livewire.remessa.form', [
            'remessa_tipo_collection' => RemessaTipo::all()
        ]);
    }
}
