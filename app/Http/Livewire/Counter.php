<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $disabled = false;

    public function mount()
    {
        $this->count = rand(0, 10000);
    }

    public function increment()
    {
        $this->count++;
        $this->disabled = true;
    }

    public function render(): string
    {
        return <<<'blade'
            <div class="flex justify-center items-center gap-2">
                <button
                    class="bg-rose-500 text-white font-extrabold h-10 w-10 rounded-full disabled:opacity-50"
                    wire:click="increment"
                    {{ $disabled ? 'disabled' : '' }}
                >
                    +1
                </button>
                <p class="text-2xl font-bold">{{ $count }}</p>
            </div>
        blade;
    }
}
