<?php

it('renders the controller-driven admin dashboard without Livewire assets', function () {
    $this->get(route('admin.dashboard'))
        ->assertOk()
        ->assertViewIs('admin.dashboard.index')
        ->assertSee('Admin dashboard')
        ->assertDontSee('livewire.js', false);
});
