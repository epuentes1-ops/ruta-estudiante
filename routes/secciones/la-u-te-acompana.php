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
            '/comienza-tu-experiencia-virtual',
            'ruta.la-u-te-acompana.comienza-tu-experiencia-virtual'
        )->name('comienza-tu-experiencia-virtual');

        Route::view(
            '/herramientas-digitales-para-estudiar',
            'ruta.la-u-te-acompana.herramientas-digitales-para-estudiar'
        )->name('herramientas-digitales-para-estudiar');

        Route::view(
            '/organiza-tu-aprendizaje',
            'ruta.la-u-te-acompana.organiza-tu-aprendizaje'
        )->name('organiza-tu-aprendizaje');

        Route::view(
            '/participa-y-comunicate',
            'ruta.la-u-te-acompana.participa-y-comunicate'
        )->name('participa-y-comunicate');

        Route::view(
            '/evaluacion-y-progreso',
            'ruta.la-u-te-acompana.evaluacion-y-progreso'
        )->name('evaluacion-y-progreso');

        Route::view(
            '/acompanamiento-y-servicio',
            'ruta.la-u-te-acompana.acompanamiento-y-servicio'
        )->name('acompanamiento-y-servicio');

    });