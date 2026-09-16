<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('tus-tramites')
    ->name('tus-tramites.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.tus-tramites.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/matricula-cursos-y-pagos',
            'ruta.tus-tramites.matricula-cursos-y-pagos'
        )->name('matricula-cursos-y-pagos');

        Route::view(
            '/novedades-academicas',
            'ruta.tus-tramites.novedades-academicas'
        )->name('novedades-academicas');

        Route::view(
            '/certificados-y-resultados',
            'ruta.tus-tramites.certificados-y-resultados'
        )->name('certificados-y-resultados');

        Route::view(
            '/opciones-y-proceso-de-grado',
            'ruta.tus-tramites.opciones-y-proceso-de-grado'
        )->name('opciones-y-proceso-de-grado');
    });
