<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('cuidate-y-conectate')
    ->name('cuidate-y-conectate.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.cuidate-y-conectate.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/bienestar-fisico-y-habitos-saludables',
            'ruta.cuidate-y-conectate.bienestar-fisico-y-habitos-saludables'
        )->name('bienestar-fisico-y-habitos-saludables');

        Route::view(
            '/estudio-familia-y-cuidado',
            'ruta.cuidate-y-conectate.estudio-familia-y-cuidado'
        )->name('estudio-familia-y-cuidado');

        Route::view(
            '/bienestar-emocional-y-convivencia',
            'ruta.cuidate-y-conectate.bienestar-emocional-y-convivencia'
        )->name('bienestar-emocional-y-convivencia');

        Route::view(
            '/redes-de-apoyo-y-servicios',
            'ruta.cuidate-y-conectate.redes-de-apoyo-y-servicios'
        )->name('redes-de-apoyo-y-servicios');

        Route::view(
            '/vida-universitaria-y-comunidad',
            'ruta.cuidate-y-conectate.vida-universitaria-y-comunidad'
        )->name('vida-universitaria-y-comunidad');

    });