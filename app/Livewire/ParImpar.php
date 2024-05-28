<?php

namespace App\Livewire;

use Livewire\Component;

class ParImpar extends Component
{
    public int $numeru = 0;
    public string $mensajen;

    public function check()
    {
        $this->mensajen = $this->numeru % 2 == 0 ? 'Numeru Par' : 'Numeru Impar';
    }
    public function render()
    {
        return view('livewire.par-impar');
    }
}
