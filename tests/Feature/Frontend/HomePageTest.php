<?php

use App\Livewire\Frontend\Home\Index;
use Livewire\Livewire;

it('renders the public Livewire home page', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSeeLivewire(Index::class)
        ->assertSee('We Drive')
        ->assertSee('Growth')
        ->assertSee('Contact Us');
});

it('updates the frontend interaction counter', function () {
    Livewire::test(Index::class)
        ->assertSet('interactions', 0)
        ->call('demonstrateInteraction')
        ->assertSet('interactions', 1);
});
