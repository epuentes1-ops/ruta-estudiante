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
            '/acceso-y-orientacion',
            'ruta.centro-de-recursos.acceso-y-orientacion'
        )->name('acceso-y-orientacion');

        Route::view(
            '/recursos-de-informacion',
            'ruta.centro-de-recursos.recursos-de-informacion'
        )->name('recursos-de-informacion');

        Route::view(
            '/escritura-e-integridad-academica',
            'ruta.centro-de-recursos.escritura-e-integridad-academica'
        )->name('escritura-e-integridad-academica');

        Route::view(
            '/investigacion-y-trabajos-academicos',
            'ruta.centro-de-recursos.investigacion-y-trabajos-academicos'
        )->name('investigacion-y-trabajos-academicos');

    });