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
            '/activa-tu-experiencia',
            'ruta.vive-tu-experiencia.activa-tu-experiencia'
        )->name('activa-tu-experiencia');

        Route::view(
            '/equipate-para-estudiar',
            'ruta.vive-tu-experiencia.equipate-para-estudiar'
        )->name('equipate-para-estudiar');

        Route::view(
            '/organiza-tu-aprendizaje',
            'ruta.vive-tu-experiencia.organiza-tu-aprendizaje'
        )->name('organiza-tu-aprendizaje');

        Route::view(
            '/conecta-y-participa',
            'ruta.vive-tu-experiencia.conecta-y-participa'
        )->name('conecta-y-participa');

        Route::view(
            '/revisa-como-vas',
            'ruta.vive-tu-experiencia.revisa-como-vas'
        )->name('revisa-como-vas');

        Route::view(
            '/resuelve-dudas-y-apoyo',
            'ruta.vive-tu-experiencia.resuelve-dudas-y-apoyo'
        )->name('resuelve-dudas-y-apoyo');

    });