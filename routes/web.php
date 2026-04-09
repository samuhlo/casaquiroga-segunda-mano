<?php

declare(strict_types=1);
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;

Route::redirect('/', Filament::getPanel('employee')->getUrl()); // @phpstan-ignore-line
Route::redirect('/login', Filament::getPanel('employee')->getUrl())->name('login'); // @phpstan-ignore-line
