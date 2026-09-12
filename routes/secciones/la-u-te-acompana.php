<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('la-u-te-acompana')
    ->name('la-u-te-acompana.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.la-u-te-acompana.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/bienestar-fisico-y-habitos-saludables',
            'ruta.la-u-te-acompana.bienestar-fisico-y-habitos-saludables'
        )->name('bienestar-fisico-y-habitos-saludables');

        Route::view(
            '/estudio-familia-y-cuidado',
            'ruta.la-u-te-acompana.estudio-familia-y-cuidado'
        )->name('estudio-familia-y-cuidado');

        Route::view(
            '/bienestar-emocional-y-convivencia',
            'ruta.la-u-te-acompana.bienestar-emocional-y-convivencia'
        )->name('bienestar-emocional-y-convivencia');

        Route::view(
            '/redes-de-apoyo-y-servicios',
            'ruta.la-u-te-acompana.redes-de-apoyo-y-servicios'
        )->name('redes-de-apoyo-y-servicios');

        Route::view(
            '/vida-universitaria-y-comunidad',
            'ruta.la-u-te-acompana.vida-universitaria-y-comunidad'
        )->name('vida-universitaria-y-comunidad');

    });