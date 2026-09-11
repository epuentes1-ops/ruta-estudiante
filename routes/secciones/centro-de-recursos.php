<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('centro-de-recursos')
    ->name('centro-de-recursos.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.centro-de-recursos.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/comienza-tu-experiencia-virtual',
            'ruta.centro-de-recursos.comienza-tu-experiencia-virtual'
        )->name('comienza-tu-experiencia-virtual');

        Route::view(
            '/herramientas-digitales-para-estudiar',
            'ruta.centro-de-recursos.herramientas-digitales-para-estudiar'
        )->name('herramientas-digitales-para-estudiar');

        Route::view(
            '/organiza-tu-aprendizaje',
            'ruta.centro-de-recursos.organiza-tu-aprendizaje'
        )->name('organiza-tu-aprendizaje');

        Route::view(
            '/participa-y-comunicate',
            'ruta.centro-de-recursos.participa-y-comunicate'
        )->name('participa-y-comunicate');

        Route::view(
            '/evaluacion-y-progreso',
            'ruta.centro-de-recursos.evaluacion-y-progreso'
        )->name('evaluacion-y-progreso');

        Route::view(
            '/acompanamiento-y-servicio',
            'ruta.centro-de-recursos.acompanamiento-y-servicio'
        )->name('acompanamiento-y-servicio');

    });