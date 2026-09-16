<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('investiga-y-crea')
    ->name('investiga-y-crea.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.investiga-y-crea.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/acceso-y-orientacion',
            'ruta.investiga-y-crea.acceso-y-orientacion'
        )->name('acceso-y-orientacion');

        Route::view(
            '/recursos-de-informacion',
            'ruta.investiga-y-crea.recursos-de-informacion'
        )->name('recursos-de-informacion');

        Route::view(
            '/escritura-e-integridad-academica',
            'ruta.investiga-y-crea.escritura-e-integridad-academica'
        )->name('escritura-e-integridad-academica');

        Route::view(
            '/investigacion-y-trabajos-academicos',
            'ruta.investiga-y-crea.investigacion-y-trabajos-academicos'
        )->name('investigacion-y-trabajos-academicos');

    });