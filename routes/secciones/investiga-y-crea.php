<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('investiga-y-crea')
    ->name('investiga-y-crea.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.investiga-y-crea.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/encuentra-guia-y-orientacion',
            'ruta.investiga-y-crea.encuentra-guia-y-orientacion'
        )->name('encuentra-guia-y-orientacion');

        Route::view(
            '/encuentra-lo-que-buscas',
            'ruta.investiga-y-crea.encuentra-lo-que-buscas'
        )->name('encuentra-lo-que-buscas');

        Route::view(
            '/escribe-y-cita-con-confianza',
            'ruta.investiga-y-crea.escribe-y-cita-con-confianza'
        )->name('escribe-y-cita-con-confianza');

        Route::view(
            '/investiga-crea-y-comparte',
            'ruta.investiga-y-crea.investiga-crea-y-comparte'
        )->name('investiga-crea-y-comparte');

    });