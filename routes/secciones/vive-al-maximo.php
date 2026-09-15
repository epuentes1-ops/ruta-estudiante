<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('vive-al-maximo')
    ->name('vive-al-maximo.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.vive-al-maximo.index')
            ->name('index');

        // Subsecciones
        Route::view( 
            '/comienza-tu-experiencia-virtual',
            'ruta.vive-al-maximo.comienza-tu-experiencia-virtual'
        )->name('comienza-tu-experiencia-virtual');

        Route::view(
            '/herramientas-digitales-para-estudiar',
            'ruta.vive-al-maximo.herramientas-digitales-para-estudiar'
        )->name('herramientas-digitales-para-estudiar');

        Route::view(
            '/organiza-tu-aprendizaje',
            'ruta.vive-al-maximo.organiza-tu-aprendizaje'
        )->name('organiza-tu-aprendizaje');

        Route::view(
            '/participa-y-comunicate',
            'ruta.vive-al-maximo.participa-y-comunicate'
        )->name('participa-y-comunicate');

        Route::view(
            '/evaluacion-y-progreso',
            'ruta.vive-al-maximo.evaluacion-y-progreso'
        )->name('evaluacion-y-progreso');

        Route::view(
            '/acompanamiento-y-servicio',
            'ruta.vive-al-maximo.acompanamiento-y-servicio'
        )->name('acompanamiento-y-servicio');

    });