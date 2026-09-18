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
            '/gestiona-matricula-y-pagos',
            'ruta.tus-tramites.gestiona-matricula-y-pagos'
        )->name('gestiona-matricula-y-pagos');

        Route::view(
            '/gestiona-novedades-academicas',
            'ruta.tus-tramites.gestiona-novedades-academicas'
        )->name('gestiona-novedades-academicas');

        Route::view(
            '/consulta-resultados-y-certificados',
            'ruta.tus-tramites.consulta-resultados-y-certificados'
        )->name('consulta-resultados-y-certificados');

        Route::view(
            '/preparate-para-tu-grado',
            'ruta.tus-tramites.preparate-para-tu-grado'
        )->name('preparate-para-tu-grado');
    });
