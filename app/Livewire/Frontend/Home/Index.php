<?php

namespace App\Livewire\Frontend\Home;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public int $interactions = 0;

    public function demonstrateInteraction(): void
    {
        $this->interactions++;
    }

    public function render(): View
    {
        return view('livewire.frontend.home.index')
            ->layout('frontend.layouts.app');
    }
}
