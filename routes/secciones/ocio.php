<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('ocio')
    ->name('ocio.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.ocio.index')
            ->name('index');

        // // Subsecciones
        // Route::view(
        //     '/comienza-tu-experiencia-virtual',
        //     'ruta.tramites-academicos.comienza-tu-experiencia-virtual'
        // )->name('comienza-tu-experiencia-virtual');

        // Route::view(
        //     '/herramientas-digitales-para-estudiar',
        //     'ruta.tramites-academicos.herramientas-digitales-para-estudiar'
        // )->name('herramientas-digitales-para-estudiar');

        // Route::view(
        //     '/organiza-tu-aprendizaje',
        //     'ruta.tramites-academicos.organiza-tu-aprendizaje'
        // )->name('organiza-tu-aprendizaje');

        // Route::view(
        //     '/participa-y-comunicate',
        //     'ruta.tramites-academicos.participa-y-comunicate'
        // )->name('participa-y-comunicate');

        // Route::view(
        //     '/evaluacion-y-progreso',
        //     'ruta.tramites-academicos.evaluacion-y-progreso'
        // )->name('evaluacion-y-progreso');

        // Route::view(
        //     '/acompanamiento-y-servicio',
        //     'ruta.tramites-academicos.acompanamiento-y-servicio'
        // )->name('acompanamiento-y-servicio');

    });