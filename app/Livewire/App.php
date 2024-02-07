<?php

namespace App\Livewire;

use Livewire\Component;

class App extends Component
{
    public int $currentPage = 1;
    public string $testProperty = 'test';
    public function render()
    {
        return view('livewire.app');
    }
}
