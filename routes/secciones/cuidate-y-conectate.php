<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])
    ->prefix('cuidate-y-conectate')
    ->name('cuidate-y-conectate.')
    ->group(function () {

        // Página principal de la sección
        Route::view('/', 'ruta.cuidate-y-conectate.index')
            ->name('index');

        // Subsecciones
        Route::view(
            '/mantente-activo-y-saludable',
            'ruta.cuidate-y-conectate.mantente-activo-y-saludable'
        )->name('mantente-activo-y-saludable');

        Route::view(
            '/equilibra-estudio-y-vida',
            'ruta.cuidate-y-conectate.equilibra-estudio-y-vida'
        )->name('equilibra-estudio-y-vida');

        Route::view(
            '/fortalece-tu-bienestar',
            'ruta.cuidate-y-conectate.fortalece-tu-bienestar'
        )->name('fortalece-tu-bienestar');

        Route::view(
            '/activa-tu-red-de-apoyo',
            'ruta.cuidate-y-conectate.activa-tu-red-de-apoyo'
        )->name('activa-tu-red-de-apoyo');

        Route::view(
            '/vive-ucompensar',
            'ruta.cuidate-y-conectate.vive-ucompensar'
        )->name('vive-ucompensar');

    });