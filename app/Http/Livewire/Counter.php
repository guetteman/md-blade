<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render(): string
    {
        return <<<'blade'
            <div style="text-align: center">
                <button wire:click="increment">+</button>
                <h1>{{ $count }}</h1>
            </div>
        blade;
    }
}
