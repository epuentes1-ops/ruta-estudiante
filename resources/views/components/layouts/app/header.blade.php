{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:header container class="border-b border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

        <a href="{{ route('aquiempiezatodo') }}" class="ms-2 me-5 flex items-center space-x-2 rtl:space-x-reverse lg:ms-0"
            wire:navigate>
            <x-app-logo />
        </a>
        

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="layout-grid" :href="route('aquiempiezatodo')" :current="request()->routeIs('aquiempiezatodo')"
                wire:navigate>
                {{ __('Aqui empieza todo') }}
            </flux:navbar.item>
            <flux:navbar.item icon="academic-cap" :href="route('cajadeherramientas')" :current="request()->routeIs('cajadeherramientas')"
                wire:navigate>
                {{ __('Mi ruta') }}
            </flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
            <flux:tooltip :content="__('Search')" position="bottom">
                <flux:navbar.item class="!h-10 [&>div>svg]:size-5" icon="magnifying-glass" href="#"
                    :label="__('Search')" />
            </flux:tooltip>
            <flux:tooltip :content="__('Repository')" position="bottom">
                <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="folder-git-2"
                    href="https://repositoriocrai.ucompensar.edu.co/" target="_blank" :label="__('Repository')" />
            </flux:tooltip>
            <flux:tooltip :content="__('Documentation')" position="bottom">
                <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="book-open-text"
                    href="https://laravel.com/docs/starter-kits#livewire" target="_blank" label="Documentation" />
            </flux:tooltip>
        </flux:navbar>

        <!-- Desktop User Menu -->
        <flux:dropdown position="top" align="end">
            <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()" />

            <flux:menu>
                <flux:menu.radio.group>
                    <div class="p-0 text-sm font-normal">
                        <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                            <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                    {{ auth()->user()->initials() }}
                                </span>
                            </span>

                            <div class="grid flex-1 text-start text-sm leading-tight">
                                <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                            </div>
                        </div>
                    </div>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.radio.group>
                    <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>{{ __('Settings') }}
                    </flux:menu.item>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full"
                        data-test="logout-button">
                        {{ __('Log Out') }}
                    </flux:menu.item>
                </form>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    <!-- Mobile Menu -->
    <flux:sidebar stashable sticky
        class="lg:hidden border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <a href="{{ route('aquiempiezatodo') }}" class="ms-1 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
            <x-app-logo />
        </a>

        <flux:navlist variant="outline">
            <flux:navlist.group :heading="__('Platform')">
                <flux:navlist.item icon="layout-grid" :href="route('aquiempiezatodo')"
                    :current="request()->routeIs('aquiempiezatodo')" wire:navigate>
                    {{ __('aquiempiezatodo') }}
                </flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="folder-git-2" href="https://repositoriocrai.ucompensar.edu.co/"
                target="_blank">
                {{ __('Repository') }}
            </flux:navlist.item>

            <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits#livewire"
                target="_blank">
                {{ __('Documentation') }}
            </flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>

    {{ $slot }}

    @fluxScripts
</body>

</html> --}}


@php
    /*
    |--------------------------------------------------------------------------
    | Navegacion principal - Ruta del estudiante
    |--------------------------------------------------------------------------
    | Layout horizontal basado en Flux Header. No utiliza sidebar.blade.php
    | ni ningun flux:sidebar. Esto evita que Flux reserve una columna lateral.
    */
    $routeItems = [
        ['label' => 'Tu camino', 'route' => 'tucaminodocente'],
        ['label' => 'Caja de herramientas', 'route' => 'cajadeherramientas'],
        ['label' => 'Clases con alma', 'route' => 'clasesconalma'],
        ['label' => 'Tu pausa necesaria', 'route' => 'tupausanecesaria'],
        ['label' => 'Al dia', 'route' => 'aldia'],
    ];

    $isRutaActive = request()->routeIs(
        'tucaminodocente',
        'cajadeherramientas',
        'clasesconalma',
        'tupausanecesaria',
        'aldia',
    );
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white text-zinc-900 antialiased dark:bg-zinc-950 dark:text-zinc-100">
    {{-- Accesibilidad: salto directo al contenido principal. --}}
    <a href="#main-content"
        class="fixed left-4 top-3 z-[100] -translate-y-24 rounded-lg bg-zinc-950 px-4 py-2 text-sm font-semibold text-white shadow-lg transition-transform focus:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-500 focus-visible:ring-offset-2 dark:bg-white dark:text-zinc-950">
        Saltar al contenido principal
    </a>

    {{--
        IMPORTANTE:
        Se usa flux:header porque flux:main participa en el sistema de layout
        de Flux. Mezclar un <header> HTML normal con <flux:main> puede hacer
        que Flux coloque ambos elementos en columnas diferentes.
    --}}
    <flux:header sticky container
        class="!min-h-[92px] border-b border-zinc-200 bg-white/95 shadow-sm backdrop-blur dark:border-zinc-800 dark:bg-zinc-950/95">
        {{-- Menu compacto para movil/tablet. Es dropdown, nunca sidebar. --}}
        <div class="lg:hidden">
            <flux:dropdown position="bottom" align="start">
                <button type="button"
                    class="inline-flex size-11 items-center justify-center rounded-xl text-zinc-700 transition hover:bg-zinc-100 hover:text-zinc-950 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-500 focus-visible:ring-offset-2 dark:text-zinc-300 dark:hover:bg-zinc-900 dark:hover:text-white dark:focus-visible:ring-offset-zinc-950"
                    aria-label="Abrir menu principal">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        class="size-6">
                        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                    </svg>
                </button>

                <flux:menu class="min-w-72">
                    <flux:menu.item icon="layout-grid" :href="route('aquiempiezatodo')" wire:navigate>
                        Aqui empieza todo
                    </flux:menu.item>

                    <flux:menu.separator />

                    @foreach ($routeItems as $item)
                        @continue(!\Illuminate\Support\Facades\Route::has($item['route']))
                        <flux:menu.item :href="route($item['route'])" wire:navigate>
                            {{ $item['label'] }}
                        </flux:menu.item>
                    @endforeach

                    <flux:menu.separator />

                    <flux:menu.item icon="book-open-text" href="https://repositoriocrai.ucompensar.edu.co/"
                        target="_blank" rel="noopener noreferrer">
                        Repositorio CRAI
                    </flux:menu.item>

                    <flux:menu.item icon="computer-desktop" href="https://virtual.ucompensar.edu.co"
                        target="_blank" rel="noopener noreferrer">
                        Solución E-Learning
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </div>

        {{-- Logo con dimensiones controladas. --}}
        <a href="{{ route('aquiempiezatodo') }}" wire:navigate
            class="inline-flex min-h-11 shrink-0 items-center rounded-xl focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-500 focus-visible:ring-offset-2 dark:focus-visible:ring-offset-zinc-950"
            aria-label="Ruta del estudiante, ir al inicio">
            <img src="{{ asset('images/logos_1/getsitelogo.png') }}" alt="Ruta del estudiante"
                class="h-auto max-h-[64px] w-auto max-w-[168px] object-contain sm:max-w-[190px]">
        </a>

        {{-- Navegacion horizontal de escritorio. --}}
        <nav class="ml-3 hidden self-stretch lg:flex" aria-label="Navegacion principal">
            <a href="{{ route('aquiempiezatodo') }}" wire:navigate
                @if (request()->routeIs('aquiempiezatodo')) aria-current="page" @endif
                class="relative inline-flex h-full items-center gap-2 border-b-[3px] px-4 text-sm font-semibold transition focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-cyan-500
                    {{ request()->routeIs('aquiempiezatodo')
                        ? 'border-zinc-900 text-zinc-950 dark:border-white dark:text-white'
                        : 'border-transparent text-zinc-600 hover:border-zinc-300 hover:text-zinc-950 dark:text-zinc-300 dark:hover:border-zinc-700 dark:hover:text-white' }}">
                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                    class="size-5">
                    <rect x="4" y="4" width="5" height="5" rx="1" />
                    <rect x="15" y="4" width="5" height="5" rx="1" />
                    <rect x="4" y="15" width="5" height="5" rx="1" />
                    <rect x="15" y="15" width="5" height="5" rx="1" />
                </svg>
                Aquí empieza todo
            </a>

            <flux:dropdown position="bottom" align="start">
                <button type="button" @if ($isRutaActive) aria-current="page" @endif
                    class="relative inline-flex h-full items-center gap-2 border-b-[3px] px-4 text-sm font-semibold transition focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-cyan-500
                        {{ $isRutaActive
                            ? 'border-zinc-900 text-zinc-950 dark:border-white dark:text-white'
                            : 'border-transparent text-zinc-600 hover:border-zinc-300 hover:text-zinc-950 dark:text-zinc-300 dark:hover:border-zinc-700 dark:hover:text-white' }}">
                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                        class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m3.5 9 8.5-4 8.5 4-8.5 4-8.5-4Z" />
                        <path stroke-linecap="round" d="M6.5 11.2V15c0 1.8 2.5 3.3 5.5 3.3s5.5-1.5 5.5-3.3v-3.8" />
                    </svg>
                    Mi ruta
                    <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" class="size-4 opacity-60">
                        <path fill-rule="evenodd"
                            d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

                <flux:menu class="min-w-64">
                    @foreach ($routeItems as $item)
                        @continue(!\Illuminate\Support\Facades\Route::has($item['route']))
                        <flux:menu.item :href="route($item['route'])" wire:navigate>
                            {{ $item['label'] }}
                        </flux:menu.item>
                    @endforeach
                </flux:menu>
            </flux:dropdown>
        </nav>

        <flux:spacer />



        {{-- Acciones del estudiante. --}}
        <div class="flex shrink-0 items-center gap-1 sm:gap-2">

            <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">
                <flux:tooltip :content="__('Repositorio CRAI')" position="bottom">
                    <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="folder-git-2"
                        href="https://repositoriocrai.ucompensar.edu.co/" target="_blank"
                        :label="__('Repositorio CRAI')" />
                </flux:tooltip>
                <flux:tooltip :content="__('Solución E-Learning')" position="bottom">
                    <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="computer-desktop"
                        href="https://virtual.ucompensar.edu.co" target="_blank" :label="__('Solución E-Learning')" />
                </flux:tooltip>
            </flux:navbar>


            <flux:dropdown position="bottom" align="end">
                <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()"
                    aria-label="Abrir menu de usuario" />

                <flux:menu class="min-w-64">
                    <div class="px-3 py-2.5">
                        <p class="truncate text-sm font-semibold text-zinc-950 dark:text-white">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="truncate text-xs text-zinc-500 dark:text-zinc-400">
                            {{ auth()->user()->email }}
                        </p>
                    </div>

                    <flux:menu.separator />

                    @if (\Illuminate\Support\Facades\Route::has('profile.edit'))
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            Mi perfil
                        </flux:menu.item>
                    @endif

                    @if (\Illuminate\Support\Facades\Route::has('appearance.edit'))
                        <flux:menu.item :href="route('appearance.edit')" icon="sun" wire:navigate>
                            Apariencia
                        </flux:menu.item>
                    @endif

                    <flux:menu.separator />

                    @hasanyrole('Administrador|Editor')
                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('admin.users.index')" icon="users" wire:navigate>
                                {{ __('Usuarios') }}
                            </flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('admin.categories.index')" icon="funnel" wire:navigate>
                                {{ __('Categorías') }}
                            </flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('admin.reports.index')" icon="presentation-chart-bar"
                                wire:navigate>
                                {{ __('Reportes') }}
                            </flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />
                    @endhasanyrole

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                            class="w-full" data-test="logout-button">
                            Cerrar sesion
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </div>
    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>
