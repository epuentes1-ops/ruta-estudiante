<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('tramites-academicos')
    ->name('tramites-academicos.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.tramites-academicos.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/matricula-cursos-y-pagos',
            'ruta.tramites-academicos.matricula-cursos-y-pagos'
        )->name('matricula-cursos-y-pagos');

        Route::view(
            '/novedades-academicas',
            'ruta.tramites-academicos.novedades-academicas'
        )->name('novedades-academicas');

        Route::view(
            '/certificados-y-resultados',
            'ruta.tramites-academicos.certificados-y-resultados'
        )->name('certificados-y-resultados');

        Route::view(
            '/opciones-y-proceso-de-grado',
            'ruta.tramites-academicos.opciones-y-proceso-de-grado'
        )->name('opciones-y-proceso-de-grado');
    });
