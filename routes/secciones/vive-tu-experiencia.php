<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('vive-tu-experiencia')
    ->name('vive-tu-experiencia.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.vive-tu-experiencia.index')
            ->name('index');

        // Subsecciones
        Route::view( 
            '/comienza-tu-experiencia-virtual',
            'ruta.vive-tu-experiencia.comienza-tu-experiencia-virtual'
        )->name('comienza-tu-experiencia-virtual');

        Route::view(
            '/herramientas-digitales-para-estudiar',
            'ruta.vive-tu-experiencia.herramientas-digitales-para-estudiar'
        )->name('herramientas-digitales-para-estudiar');

        Route::view(
            '/organiza-tu-aprendizaje',
            'ruta.vive-tu-experiencia.organiza-tu-aprendizaje'
        )->name('organiza-tu-aprendizaje');

        Route::view(
            '/participa-y-comunicate',
            'ruta.vive-tu-experiencia.participa-y-comunicate'
        )->name('participa-y-comunicate');

        Route::view(
            '/evaluacion-y-progreso',
            'ruta.vive-tu-experiencia.evaluacion-y-progreso'
        )->name('evaluacion-y-progreso');

        Route::view(
            '/acompanamiento-y-servicio',
            'ruta.vive-tu-experiencia.acompanamiento-y-servicio'
        )->name('acompanamiento-y-servicio');

    });