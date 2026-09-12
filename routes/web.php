<?php

use App\Livewire\Frontend\Home\Index;
use Illuminate\Support\Facades\Route;

Route::livewire('/', Index::class)->name('home');
