<?php

namespace App\Http\Livewire\Processo;

use Livewire\Component;

class Form extends Component
{

    public $counter = 0;

    public function Increment()
    {
        $this->counter++;
    }

    public function render()
    {
        return view('livewire.processo.form');
    }
}
