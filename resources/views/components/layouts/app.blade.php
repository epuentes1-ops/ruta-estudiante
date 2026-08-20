{{-- <x-layouts.app.header :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.header> --}}

<x-layouts.app.header :title="$title ?? null">
    {{--
        En el layout horizontal Flux recomienda combinar flux:header con
        flux:main. El atributo container centra el contenido sin crear una
        columna lateral ni depender de sidebar.blade.php.
    --}}
    <flux:main container id="main-content" tabindex="-1" class="w-full min-w-0">
        {{ $slot }}
    </flux:main>
</x-layouts.app.header>