@php
    /*
    |--------------------------------------------------------------------------
    | Navegación principal - Ruta del estudiante
    |--------------------------------------------------------------------------
    | Cada sección del portal tiene sus propias rutas y subsecciones.
    |
    | IMPORTANTE:
    | Los nombres de las subsecciones de las nuevas áreas son temporales.
    | Posteriormente se reemplazarán por los nombres definitivos.
    */

    $sections = [
        /*
        |--------------------------------------------------------------------------
        | Vive al máximo tu espacio virtual
        |--------------------------------------------------------------------------
        */

        [
            'label' => 'Vive al máximo tu espacio virtual',
            'prefix' => 'vive-al-maximo',

            'items' => [
                [
                    'label' => 'Inicio de la sección',
                    'route' => 'vive-al-maximo.index',
                ],
                [
                    'label' => 'Comienza tu experiencia virtual',
                    'route' => 'vive-al-maximo.comienza-tu-experiencia-virtual',
                ],
                [
                    'label' => 'Herramientas digitales para estudiar',
                    'route' => 'vive-al-maximo.herramientas-digitales-para-estudiar',
                ],
                [
                    'label' => 'Organiza tu aprendizaje',
                    'route' => 'vive-al-maximo.organiza-tu-aprendizaje',
                ],
                [
                    'label' => 'Participa y comunícate',
                    'route' => 'vive-al-maximo.participa-y-comunicate',
                ],
                [
                    'label' => 'Evaluación y progreso',
                    'route' => 'vive-al-maximo.evaluacion-y-progreso',
                ],
                [
                    'label' => 'Acompañamiento y servicio',
                    'route' => 'vive-al-maximo.acompanamiento-y-servicio',
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Mis trámites académicos
        |--------------------------------------------------------------------------
        */

        [
            'label' => 'Mis trámites académicos',
            'prefix' => 'tramites-academicos',

            'items' => [
                [
                    'label' => 'Inicio de la sección',
                    'route' => 'tramites-academicos.index',
                ],
                [
                    'label' => 'Comienza tu experiencia virtual',
                    'route' => 'tramites-academicos.comienza-tu-experiencia-virtual',
                ],
                [
                    'label' => 'Herramientas digitales para estudiar',
                    'route' => 'tramites-academicos.herramientas-digitales-para-estudiar',
                ],
                [
                    'label' => 'Organiza tu aprendizaje',
                    'route' => 'tramites-academicos.organiza-tu-aprendizaje',
                ],
                [
                    'label' => 'Participa y comunícate',
                    'route' => 'tramites-academicos.participa-y-comunicate',
                ],
                [
                    'label' => 'Evaluación y progreso',
                    'route' => 'tramites-academicos.evaluacion-y-progreso',
                ],
                [
                    'label' => 'Acompañamiento y servicio',
                    'route' => 'tramites-academicos.acompanamiento-y-servicio',
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | La U te acompaña
        |--------------------------------------------------------------------------
        */

        [
            'label' => 'La U te acompaña',
            'prefix' => 'la-u-te-acompana',

            'items' => [
                [
                    'label' => 'Inicio de la sección',
                    'route' => 'la-u-te-acompana.index',
                ],
                [
                    'label' => 'Comienza tu experiencia virtual',
                    'route' => 'la-u-te-acompana.comienza-tu-experiencia-virtual',
                ],
                [
                    'label' => 'Herramientas digitales para estudiar',
                    'route' => 'la-u-te-acompana.herramientas-digitales-para-estudiar',
                ],
                [
                    'label' => 'Organiza tu aprendizaje',
                    'route' => 'la-u-te-acompana.organiza-tu-aprendizaje',
                ],
                [
                    'label' => 'Participa y comunícate',
                    'route' => 'la-u-te-acompana.participa-y-comunicate',
                ],
                [
                    'label' => 'Evaluación y progreso',
                    'route' => 'la-u-te-acompana.evaluacion-y-progreso',
                ],
                [
                    'label' => 'Acompañamiento y servicio',
                    'route' => 'la-u-te-acompana.acompanamiento-y-servicio',
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Centro de recursos
        |--------------------------------------------------------------------------
        */

        [
            'label' => 'Centro de recursos',
            'prefix' => 'centro-de-recursos',

            'items' => [
                [
                    'label' => 'Inicio de la sección',
                    'route' => 'centro-de-recursos.index',
                ],
                [
                    'label' => 'Comienza tu experiencia virtual',
                    'route' => 'centro-de-recursos.comienza-tu-experiencia-virtual',
                ],
                [
                    'label' => 'Herramientas digitales para estudiar',
                    'route' => 'centro-de-recursos.herramientas-digitales-para-estudiar',
                ],
                [
                    'label' => 'Organiza tu aprendizaje',
                    'route' => 'centro-de-recursos.organiza-tu-aprendizaje',
                ],
                [
                    'label' => 'Participa y comunícate',
                    'route' => 'centro-de-recursos.participa-y-comunicate',
                ],
                [
                    'label' => 'Evaluación y progreso',
                    'route' => 'centro-de-recursos.evaluacion-y-progreso',
                ],
                [
                    'label' => 'Acompañamiento y servicio',
                    'route' => 'centro-de-recursos.acompanamiento-y-servicio',
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Ocio
        |--------------------------------------------------------------------------
        */

        [
            'label' => 'Ocio',
            'prefix' => 'ocio',

            'items' => [
                [
                    'label' => 'Inicio de la sección',
                    'route' => 'ocio.index',
                ],
            ],
        ],
    ];
@endphp

<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-white text-zinc-900 antialiased dark:bg-zinc-950 dark:text-zinc-100">

    {{-- Accesibilidad: salto directo al contenido principal. --}}
    <a href="#main-content"
        class="fixed left-4 top-3 z-[100] -translate-y-24 rounded-lg bg-zinc-950 px-4 py-2 text-sm font-semibold text-white shadow-lg transition-transform
               focus:translate-y-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-500 focus-visible:ring-offset-2
               dark:bg-white dark:text-zinc-950">
        Saltar al contenido principal
    </a>

    {{-- ============================================================= --}}
    {{-- HEADER PRINCIPAL --}}
    {{-- ============================================================= --}}

    <flux:header sticky container
        class="!min-h-[92px] border-b border-zinc-200 bg-white/95 shadow-sm backdrop-blur
               dark:border-zinc-800 dark:bg-zinc-950/95">

        {{-- ========================================================= --}}
        {{-- MENÚ MÓVIL / TABLET --}}
        {{-- ========================================================= --}}

        <div class="xl:hidden">

            <flux:dropdown position="bottom" align="start">

                {{-- Botón hamburguesa --}}
                <button type="button"
                    class="inline-flex size-11 items-center justify-center rounded-xl
                   text-zinc-700 transition
                   hover:bg-zinc-100
                   hover:text-zinc-950
                   focus:outline-none
                   focus-visible:ring-2
                   focus-visible:ring-violet-500
                   focus-visible:ring-offset-2
                   dark:text-zinc-300
                   dark:hover:bg-zinc-900
                   dark:hover:text-white
                   dark:focus-visible:ring-offset-zinc-950"
                    aria-label="Abrir menú principal">

                    <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        class="size-6">
                        <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
                    </svg>

                </button>


                {{-- ================================================= --}}
                {{-- MENÚ PRINCIPAL --}}
                {{-- ================================================= --}}

                <flux:menu class="w-80 max-w-[calc(100vw-2rem)]">

                    {{-- Inicio --}}
                    <flux:menu.item icon="layout-grid" :href="route('inicio')" wire:navigate>
                        Inicio
                    </flux:menu.item>


                    <flux:menu.separator />


                    {{-- ================================================= --}}
                    {{-- SECCIONES DEL PORTAL --}}
                    {{-- ================================================= --}}

                    @foreach ($sections as $section)
                        @continue(!\Illuminate\Support\Facades\Route::has($section['prefix'] . '.index'))

                        @php
                            $isSectionActive = request()->routeIs($section['prefix'] . '.*');
                        @endphp


                        {{-- ============================================= --}}
                        {{-- SECCIÓN CONTRAÍDA --}}
                        {{-- ============================================= --}}

                        <flux:menu.submenu :heading="$section['label']">

                            {{-- ========================================= --}}
                            {{-- SUBSECCIONES --}}
                            {{-- ========================================= --}}

                            @foreach ($section['items'] as $item)
                                @continue(!\Illuminate\Support\Facades\Route::has($item['route']))

                                <flux:menu.item :href="route($item['route'])" wire:navigate
                                    class="{{ request()->routeIs($item['route']) ? 'font-semibold text-violet-700 dark:text-violet-300' : '' }}">

                                    {{ $item['label'] }}

                                </flux:menu.item>
                            @endforeach

                        </flux:menu.submenu>
                    @endforeach


                    <flux:menu.separator />


                    {{-- ================================================= --}}
                    {{-- ACCESOS EXTERNOS --}}
                    {{-- ================================================= --}}

                    <flux:menu.item icon="folder" href="https://repositoriocrai.ucompensar.edu.co/" target="_blank"
                        rel="noopener noreferrer">
                        Repositorio CRAI
                    </flux:menu.item>


                    <flux:menu.item icon="computer-desktop" href="https://virtual.ucompensar.edu.co" target="_blank"
                        rel="noopener noreferrer">
                        Solución E-Learning
                    </flux:menu.item>

                </flux:menu>

            </flux:dropdown>

        </div>

        {{-- ========================================================= --}}
        {{-- LOGO --}}
        {{-- ========================================================= --}}

        <a href="{{ route('inicio') }}" wire:navigate
            class="inline-flex min-h-11 shrink-0 items-center rounded-xl
                   focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-500
                   focus-visible:ring-offset-2 dark:focus-visible:ring-offset-zinc-950"
            aria-label="Ruta del estudiante, ir al inicio">

            <img src="{{ asset('images/logos_1/LogoRutaE.png') }}" alt="Ruta del estudiante"
                class="h-auto max-h-[64px] w-auto max-w-[168px] object-contain sm:max-w-[190px]">

        </a>

        {{-- ========================================================= --}}
        {{-- NAVEGACIÓN HORIZONTAL DE ESCRITORIO --}}
        {{-- ========================================================= --}}

        <nav class="ml-3 hidden self-stretch xl:flex" aria-label="Navegación principal">

            {{-- ===================================================== --}}
            {{-- INICIO --}}
            {{-- ===================================================== --}}

            <a href="{{ route('inicio') }}" wire:navigate @if (request()->routeIs('inicio')) aria-current="page" @endif
                class="relative inline-flex h-full items-center gap-2
               border-b-[3px] px-3 text-xs font-semibold transition
               2xl:px-4 2xl:text-sm

               focus:outline-none
               focus-visible:ring-2
               focus-visible:ring-inset
               focus-visible:ring-cyan-500

               {{ request()->routeIs('inicio')
                   ? 'border-violet-600 text-violet-700 dark:border-violet-400 dark:text-violet-300'
                   : 'border-transparent text-zinc-600 hover:border-violet-300 hover:text-violet-700
                                                                     dark:text-zinc-300 dark:hover:border-violet-700 dark:hover:text-violet-300' }}">

                <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                    class="size-5 shrink-0">
                    <rect x="4" y="4" width="5" height="5" rx="1" />
                    <rect x="15" y="4" width="5" height="5" rx="1" />
                    <rect x="4" y="15" width="5" height="5" rx="1" />
                    <rect x="15" y="15" width="5" height="5" rx="1" />
                </svg>

                Inicio

            </a>


            {{-- ===================================================== --}}
            {{-- SECCIONES DEL PORTAL --}}
            {{-- ===================================================== --}}

            @foreach ($sections as $section)
                @continue(!\Illuminate\Support\Facades\Route::has($section['prefix'] . '.index'))

                @php
                    $isSectionActive = request()->routeIs($section['prefix'] . '.*');
                @endphp


                <flux:dropdown position="bottom" align="start">

                    {{-- Botón de la sección --}}
                    <button type="button" @if ($isSectionActive) aria-current="page" @endif
                        class="relative inline-flex h-full items-center gap-1.5
                       whitespace-nowrap border-b-[3px]
                       px-2 text-xs font-semibold transition
                       2xl:px-3 2xl:text-sm

                       focus:outline-none
                       focus-visible:ring-2
                       focus-visible:ring-inset
                       focus-visible:ring-cyan-500

                       {{ $isSectionActive
                           ? 'border-violet-600 text-violet-700 dark:border-violet-400 dark:text-violet-300'
                           : 'border-transparent text-zinc-600 hover:border-violet-300 hover:text-violet-700
                                                                             dark:text-zinc-300 dark:hover:border-violet-700 dark:hover:text-violet-300' }}">

                        {{ $section['label'] }}

                        {{-- Flecha --}}
                        <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                            class="size-4 shrink-0 opacity-60">

                            <path fill-rule="evenodd"
                                d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />

                        </svg>

                    </button>


                    {{-- ================================================= --}}
                    {{-- SUBSECCIONES --}}
                    {{-- ================================================= --}}

                    <flux:menu class="min-w-80">

                        @foreach ($section['items'] as $item)
                            @continue(!\Illuminate\Support\Facades\Route::has($item['route']))

                            <flux:menu.item :href="route($item['route'])" wire:navigate>

                                {{ $item['label'] }}

                            </flux:menu.item>
                        @endforeach

                    </flux:menu>

                </flux:dropdown>
            @endforeach

        </nav>
        {{-- Empuja las acciones hacia la derecha --}}
        <flux:spacer />


        {{-- ========================================================= --}}
        {{-- ACCIONES DEL ESTUDIANTE --}}
        {{-- ========================================================= --}}

        <div class="flex shrink-0 items-center gap-1 sm:gap-2">

            {{-- Enlaces externos --}}
            <flux:navbar class="me-1.5 space-x-0.5 rtl:space-x-reverse py-0!">

                <flux:tooltip :content="__('Repositorio CRAI')" position="bottom">

                    <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="folder-git-2"
                        href="https://repositoriocrai.ucompensar.edu.co/" target="_blank" rel="noopener noreferrer"
                        :label="__('Repositorio CRAI')" />

                </flux:tooltip>


                <flux:tooltip :content="__('Solución E-Learning')" position="bottom">

                    <flux:navbar.item class="h-10 max-lg:hidden [&>div>svg]:size-5" icon="computer-desktop"
                        href="https://virtual.ucompensar.edu.co" target="_blank" rel="noopener noreferrer"
                        :label="__('Solución E-Learning')" />

                </flux:tooltip>

            </flux:navbar>


            {{-- ===================================================== --}}
            {{-- PERFIL DEL USUARIO --}}
            {{-- ===================================================== --}}

            <flux:dropdown position="bottom" align="end">

                <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()"
                    aria-label="Abrir menú de usuario" />

                <flux:menu class="min-w-64">

                    {{-- Datos del usuario --}}
                    <div class="px-3 py-2.5">

                        <p class="truncate text-sm font-semibold text-zinc-950 dark:text-white">
                            {{ auth()->user()->name }}
                        </p>

                        <p class="truncate text-xs text-zinc-500 dark:text-zinc-400">
                            {{ auth()->user()->email }}
                        </p>

                    </div>

                    <flux:menu.separator />


                    {{-- Perfil --}}
                    @if (\Illuminate\Support\Facades\Route::has('profile.edit'))
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            Mi perfil
                        </flux:menu.item>
                    @endif


                    {{-- Apariencia --}}
                    @if (\Illuminate\Support\Facades\Route::has('appearance.edit'))
                        <flux:menu.item :href="route('appearance.edit')" icon="sun" wire:navigate>
                            Apariencia
                        </flux:menu.item>
                    @endif

                    <flux:menu.separator />


                    {{-- ================================================= --}}
                    {{-- OPCIONES ADMINISTRATIVAS --}}
                    {{-- ================================================= --}}

                    @hasanyrole('Administrador|Editor')
                        <flux:menu.item :href="route('admin.users.index')" icon="users" wire:navigate>
                            {{ __('Usuarios') }}
                        </flux:menu.item>


                        <flux:menu.item :href="route('admin.categories.index')" icon="funnel" wire:navigate>
                            {{ __('Categorías') }}
                        </flux:menu.item>


                        <flux:menu.item :href="route('admin.reports.index')" icon="presentation-chart-bar" wire:navigate>
                            {{ __('Reportes') }}
                        </flux:menu.item>

                        <flux:menu.separator />
                    @endhasanyrole


                    {{-- ================================================= --}}
                    {{-- CERRAR SESIÓN --}}
                    {{-- ================================================= --}}

                    <form method="POST" action="{{ route('logout') }}" class="w-full">

                        @csrf

                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle"
                            class="w-full" data-test="logout-button">
                            Cerrar sesión
                        </flux:menu.item>

                    </form>

                </flux:menu>

            </flux:dropdown>

        </div>

    </flux:header>


    {{-- ============================================================= --}}
    {{-- CONTENIDO PRINCIPAL --}}
    {{-- ============================================================= --}}

    {{ $slot }}


    @fluxScripts

</body>

</html>
