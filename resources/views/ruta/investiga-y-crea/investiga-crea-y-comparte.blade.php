<x-layouts.app :title="__('Investiga, crea y comparte')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/crea/seccion4_4.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        {{-- ============================================================
    SECCIÓN: INVESTIGA, CREA Y COMPARTE
    Bento Grid + panel dinámico
    Laravel + Blade + Tailwind + Alpine + Flux
============================================================ --}}

        @php

            $recursosCrai = [
                [
                    'numero' => '01',
                    'accion' => 'Fórmate',
                    'titulo' => 'Realiza la ruta de formación de usuarios CRAI',

                    'descripcion' => [
                        '¿Quieres sacarle más provecho al CRAI? Aquí encuentras una ruta de formación pensada para que conozcas sus recursos y servicios, avances a tu ritmo y descubras todo lo que puedes hacer con ellos.',
                    ],

                    'tipo' => 'vimeo',

                    'recurso' =>
                        'https://player.vimeo.com/video/1229658458?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Ir a la ruta de formación',

                    'url' => 'https://crai.ucompensar.edu.co/cgi-bin/koha/pages.pl?p=servicios',

                    'tamano' => 'md:col-span-7',
                ],

                [
                    'numero' => '02',
                    'accion' => 'Busca',
                    'titulo' => 'Busca, investiga y crea',

                    'descripcion' => [
                        'Cuando tienes un trabajo y llega ese momento de “¿y ahora dónde encuentro información que sí me sirva?”, el CRAI se convierte en tu punto de partida.',
                        'Aquí descubres cómo buscar información especializada y confiable para pasar de una idea a una buena investigación y convertirla en algo propio.',
                    ],

                    'tipo' => 'genially',

                    'recurso' => 'https://view.genially.com/64c3e7a2cf8f2b00127ecd04',

                    'boton' => null,

                    'url' => null,

                    'tamano' => 'md:col-span-5',
                ],

                [
                    'numero' => '03',
                    'accion' => 'Consulta',
                    'titulo' => 'Consulta información actualizada y confiable',

                    'descripcion' => [
                        'Cuando buscas información para un trabajo, encontrar mucho no siempre significa encontrar lo que necesitas.',
                        'Aprende a reconocer fuentes confiables, revisar qué tan actuales son y buscar en los recursos del CRAI para que tus ideas tengan un buen respaldo.',
                    ],

                    'tipo' => 'vimeo',

                    'recurso' =>
                        'https://player.vimeo.com/video/1229660907?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Ir a las revistas digitales',

                    'url' => 'https://crai.ucompensar.edu.co/cgi-bin/koha/pages.pl?p=revistas',

                    'tamano' => 'md:col-span-4',
                ],

                [
                    'numero' => '04',
                    'accion' => 'Explora',
                    'titulo' => 'Accede a tu repositorio digital',

                    'descripcion' => [
                        'Hay trabajos que empiezan con una pregunta y terminan con horas de búsqueda.',
                        'En el repositorio digital del CRAI puedes encontrar producción académica e investigativa de UCompensar para explorar, consultar y darle más fuerza a tus ideas.',
                    ],

                    'tipo' => 'vimeo',

                    'recurso' =>
                        'https://player.vimeo.com/video/1229660907?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Ir al repositorio digital',

                    'url' => 'https://repositoriocrai.ucompensar.edu.co/home',

                    'tamano' => 'md:col-span-4',
                ],

                [
                    'numero' => '05',
                    'accion' => 'Aprende',
                    'titulo' => 'Talleres CRAI',

                    'descripcion' => [
                        'A veces una clase te deja una pregunta, un trabajo te pide una herramienta nueva o simplemente te dan ganas de aprender algo diferente.',
                        'En el CRAI encuentras talleres para explorar, crear, investigar y poner tus ideas en movimiento.',
                        'Recorre las opciones, descubre cuál conecta contigo y dale espacio a algo nuevo en tu semestre.',
                    ],

                    'tipo' => 'genially',

                    'recurso' => 'https://view.genially.com/6ab1933bd042d7b1610234f5',

                    'boton' => 'Ver el portafolio de talleres',

                    'url' =>
                        'https://unipanamericanaeduco.sharepoint.com/:b:/s/Comunidadesdeaprendizaje/IQC2DHqC9KXJRKRz6d3crNkOAeSs7h2ZxfWXQkpk0ymtzrw?e=FWjS3c',

                    'tamano' => 'md:col-span-4',
                ],

                [
                    'numero' => '06',
                    'accion' => 'Recibe apoyo',
                    'titulo' => 'Solicita apoyo para trabajos de grado e investigación',

                    'descripcion' => [
                        'Ese momento en el que tienes el tema, tienes las ganas… pero el documento parece decirte: “bueno, ¿y ahora qué?”.',
                        'En el CRAI puedes encontrar acompañamiento para buscar información, organizar tus fuentes, citar y darle forma a tu trabajo de grado o proyecto de investigación.',
                        'Una buena idea también crece cuando tienes a alguien que te orienta en el camino.',
                    ],

                    'tipo' => 'vimeo',

                    'recurso' =>
                        'https://player.vimeo.com/video/1229664759?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Solicitar apoyo',

                    'url' =>
                        'https://teams.microsoft.com/dl/launcher/launcher.html?url=%2F_%23%2Fl%2Fteam%2F19%3Aafde9c8a792944c1b16b96ea43d87dce%40thread.tacv2%2Fconversations%3FgroupId%3D8277133f-6de4-4522-866f-7186245bc257%26tenantId%3D4bf38ea2-832d-4552-b508-421570da43ff&type=team&deeplinkId=78304da8-f352-46e0-876b-876e519a9d3d&directDl=true&msLaunch=true&enableMobilePage=true&suppressPrompt=true',

                    'tamano' => 'md:col-span-12',
                ],
            ];

        @endphp


        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>


        <section x-data="{
            recursos: @js($recursosCrai),
        
            activo: null,
            modalAbierto: false,
        
            get recursoActivo() {
                if (this.activo === null) {
                    return null;
                }
        
                return this.recursos[this.activo] ?? null;
            },
        
            abrirRecurso(index) {
                this.activo = Number(index);
                this.modalAbierto = true;
            },
        
            cerrarRecurso() {
                this.modalAbierto = false;
                this.activo = null;
                document.body.style.overflow = '';
            }
        }"
            x-effect="
        document.body.style.overflow =
            modalAbierto ? 'hidden' : ''
    "
            @keydown.escape.window="
        if (modalAbierto) cerrarRecurso()
    "
            class="
        w-full
        max-w-7xl
        mx-auto
        px-4
        py-10
        md:px-6
        md:py-14
    ">



            {{-- =====================================================
        BENTO GRID
    ====================================================== --}}

            <div class="
            grid
            grid-cols-1

            md:grid-cols-12

            gap-4
        "
                role="tablist" aria-label="Recursos CRAI">

                @foreach ($recursosCrai as $index => $recurso)
                    <button type="button" x-on:click="abrirRecurso({{ $index }})" role="tab"
                        :aria-selected="modalAbierto && activo === {{ $index }}"
                        ? 'border-[#7C3AED] bg-purple-50 shadow-md dark:border-purple-500 dark:bg-purple-950/30'
                        : 'border-gray-200 bg-white hover:border-purple-300 dark:border-gray-700 dark:bg-gray-900 dark:hover:border-purple-700'"
                        class="
                    {{ $recurso['tamano'] }}

                    group
                    relative

                    min-h-[180px]

                    overflow-hidden

                    rounded-2xl
                    border

                    p-6

                    text-left

                    transition-all
                    duration-300

                    focus:outline-none
                    focus:ring-2
                    focus:ring-[#7C3AED]
                    focus:ring-offset-2

                    hover:-translate-y-1
                    hover:shadow-lg
                "
                        :class="activo === {{ $index }}
                        
                            ?
                            'border-[#7C3AED] bg-purple-50 shadow-md dark:border-purple-500 dark:bg-purple-950/30'
                        
                            :
                            'border-gray-200 bg-white hover:border-purple-300 dark:border-gray-700 dark:bg-gray-900 dark:hover:border-purple-700'">


                        {{-- =================================================
                    DECORACIÓN
                ================================================== --}}

                        <div class="
                        absolute
                        -right-10
                        -top-12

                        h-32
                        w-32

                        rounded-full

                        border-[18px]

                        border-purple-100/70

                        transition-transform
                        duration-500

                        group-hover:scale-110

                        dark:border-purple-900/30
                    "
                            aria-hidden="true"></div>


                        <div class="
                        absolute

                        right-16
                        bottom-6

                        h-3
                        w-3

                        rounded-full

                        bg-purple-200

                        dark:bg-purple-800
                    "
                            aria-hidden="true"></div>



                        {{-- =================================================
                    CABECERA TARJETA
                ================================================== --}}

                        <div
                            class="
                        relative
                        z-10

                        flex
                        items-start
                        justify-between
                        gap-4
                    ">

                            <div class="
                            flex
                            h-11
                            w-11

                            shrink-0

                            items-center
                            justify-center

                            rounded-full

                            text-xs
                            font-bold

                            transition-all
                            duration-300
                        "
                                :class="activo === {{ $index }}
                                
                                    ?
                                    'bg-[#7C3AED] text-white shadow-md'
                                
                                    :
                                    'bg-gray-100 text-gray-600 group-hover:bg-purple-100 group-hover:text-[#7C3AED] dark:bg-gray-800 dark:text-gray-300'">
                                {{ $recurso['numero'] }}
                            </div>



                            {{-- Tipo --}}
                            <span
                                class="
                            rounded-full

                            border
                            border-gray-200

                            bg-white/80

                            px-3
                            py-1

                            text-[10px]
                            font-bold
                            uppercase
                            tracking-wider

                            text-gray-500

                            backdrop-blur

                            dark:border-gray-700
                            dark:bg-gray-900/80
                            dark:text-gray-300
                        ">
                                {{ $recurso['tipo'] === 'genially' ? 'Interactivo' : 'Video' }}
                            </span>

                        </div>



                        {{-- =================================================
                    CONTENIDO TARJETA
                ================================================== --}}

                        <div
                            class="
                        relative
                        z-10

                        mt-7

                        max-w-xl
                    ">

                            <span
                                class="
                            text-xs
                            font-bold
                            uppercase
                            tracking-wider

                            text-[#7C3AED]
                            dark:text-purple-300
                        ">
                                {{ $recurso['accion'] }}
                            </span>


                            <h3
                                class="
                            mt-2

                            text-lg
                            md:text-xl

                            font-bold
                            leading-tight

                            text-gray-900
                            dark:text-white
                        ">
                                {{ $recurso['titulo'] }}
                            </h3>


                            {{-- Acción visual --}}
                            <div
                                class="
                            mt-5

                            flex
                            items-center
                            gap-2

                            text-sm
                            font-semibold

                            text-gray-500

                            transition-colors

                            group-hover:text-[#7C3AED]

                            dark:text-gray-400
                            dark:group-hover:text-purple-300
                        ">

                                <span
                                    class="
                                flex
                                h-8
                                w-8

                                items-center
                                justify-center

                                rounded-full

                                bg-gray-100

                                transition-all

                                group-hover:bg-[#7C3AED]
                                group-hover:text-white

                                dark:bg-gray-800
                            ">
                                    ↓
                                </span>

                                Explorar recurso

                            </div>

                        </div>



                        {{-- =================================================
                    INDICADOR ACTIVO
                ================================================== --}}

                        <span x-show="activo === {{ $index }}"
                            class="
                        absolute

                        bottom-0
                        left-6
                        right-6

                        h-1

                        rounded-t-full

                        bg-[#7C3AED]
                    "
                            aria-hidden="true"></span>

                    </button>
 @endforeach

            </div>



            {{-- ============================================================
    MODAL CRAI
============================================================ --}}

            <template x-teleport="body">

                <div x-cloak x-show="modalAbierto"
                    class="
            fixed
            inset-0
            z-[99999]

            flex
            items-center
            justify-center

            p-3
            sm:p-5
            md:p-8
        "
                    role="dialog" aria-modal="true" aria-label="Recurso CRAI">

                    {{-- ===================================================
            FONDO
        ==================================================== --}}

                    <div class="
                absolute
                inset-0

                bg-black/70
                backdrop-blur-sm
            "
                        @click="cerrarRecurso()" aria-hidden="true"></div>


                    {{-- ===================================================
            VENTANA
        ==================================================== --}}

                    <div x-show="recursoActivo" @click.stop
                        class="
                relative
                z-10

                w-full
                max-w-6xl

                max-h-[90vh]

                overflow-y-auto

                rounded-2xl

                bg-white

                shadow-2xl

                dark:bg-gray-900
            ">

                        {{-- ===============================================
                CERRAR
            ================================================ --}}

                        <button type="button" @click="cerrarRecurso()"
                            class="
                    absolute
                    right-4
                    top-4

                    z-30

                    flex
                    h-11
                    w-11

                    items-center
                    justify-center

                    rounded-full

                    bg-white

                    text-gray-700

                    shadow-lg

                    transition-all
                    duration-200

                    hover:bg-[#7C3AED]
                    hover:text-white

                    focus:outline-none
                    focus:ring-2
                    focus:ring-[#7C3AED]

                    dark:bg-gray-800
                    dark:text-white

                    dark:hover:bg-[#7C3AED]
                "
                            aria-label="Cerrar recurso">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>

                        </button>



                        {{-- ===============================================
                CONTENIDO DINÁMICO
            ================================================ --}}

                        <template x-if="recursoActivo">

                            <div
                                class="
                        grid
                        grid-cols-1
                        lg:grid-cols-5
                    ">

                                {{-- =======================================
                        VIDEO / GENIALLY
                    ======================================== --}}

                                <div
                                    class="
                            lg:col-span-3

                            flex
                            items-center

                            bg-gray-950

                            p-3
                            sm:p-5
                            lg:p-7
                        ">

                                    <div
                                        class="
                                relative

                                aspect-video

                                w-full

                                overflow-hidden

                                rounded-xl

                                bg-black

                                shadow-xl
                            ">

                                        <iframe x-bind:src="recursoActivo.recurso" x-bind:title="recursoActivo.titulo"
                                            class="
                                    absolute
                                    inset-0

                                    h-full
                                    w-full
                                "
                                            frameborder="0"
                                            allow="
                                    autoplay;
                                    fullscreen;
                                    picture-in-picture;
                                    clipboard-write;
                                    encrypted-media;
                                    web-share
                                "
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                                    </div>

                                </div>



                                {{-- =======================================
                        INFORMACIÓN
                    ======================================== --}}

                                <div
                                    class="
                            lg:col-span-2

                            flex
                            flex-col

                            p-6
                            pt-16

                            sm:p-8
                            sm:pt-16

                            lg:p-10
                            lg:pt-10
                        ">

                                    {{-- Número + categoría --}}
                                    <div
                                        class="
                                flex
                                items-center
                                gap-3
                            ">

                                        <span
                                            class="
                                    flex
                                    h-11
                                    w-11

                                    shrink-0

                                    items-center
                                    justify-center

                                    rounded-full

                                    bg-[#7C3AED]

                                    text-xs
                                    font-bold
                                    text-white

                                    shadow-sm
                                "
                                            x-text="recursoActivo.numero"></span>


                                        <div>

                                            <span
                                                class="
                                        block

                                        text-xs
                                        font-bold
                                        uppercase
                                        tracking-wider

                                        text-[#7C3AED]

                                        dark:text-purple-300
                                    "
                                                x-text="recursoActivo.accion"></span>


                                            <span
                                                class="
                                        mt-1
                                        block

                                        text-xs

                                        text-gray-500
                                        dark:text-gray-400
                                    "
                                                x-text="
                                        recursoActivo.tipo === 'genially'
                                            ? 'Recurso interactivo'
                                            : 'Recurso en video'
                                    "></span>

                                        </div>

                                    </div>



                                    {{-- ===================================
                            TÍTULO
                        ==================================== --}}

                                    <h3 class="
                                mt-6

                                text-xl
                                md:text-2xl

                                font-bold
                                leading-tight

                                text-gray-900

                                dark:text-white
                            "
                                        x-text="recursoActivo.titulo"></h3>



                                    {{-- ===================================
                            DESCRIPCIÓN
                        ==================================== --}}

                                    <div
                                        class="
                                mt-5

                                space-y-3

                                text-sm
                                md:text-base

                                leading-7

                                text-gray-600

                                dark:text-gray-300
                            ">

                                        <template x-for="(parrafo, indice) in recursoActivo.descripcion"
                                            :key="indice">

                                            <p x-text="parrafo"></p>

                                        </template>

                                    </div>



                                    {{-- ===================================
                            BOTÓN EXTERNO
                        ==================================== --}}

                                    <div x-show="
                                recursoActivo.boton &&
                                recursoActivo.url
                            "
                                        class="
                                mt-7

                                lg:mt-auto
                                lg:pt-8
                            ">

                                        <a x-bind:href="recursoActivo.url" target="_blank" rel="noopener noreferrer"
                                            class="
                                    inline-flex

                                    items-center
                                    justify-center

                                    gap-2

                                    rounded-lg

                                    bg-[#7C3AED]

                                    px-5
                                    py-3

                                    text-sm
                                    font-semibold

                                    text-white

                                    transition-all
                                    duration-300

                                    hover:bg-[#362651]

                                    focus:outline-none
                                    focus:ring-2
                                    focus:ring-[#7C3AED]
                                    focus:ring-offset-2

                                    dark:bg-[#7C3AED]
                                    dark:text-white

                                    dark:hover:bg-[#b49bec]
                                    dark:hover:text-gray-900
                                ">

                                            <span x-text="recursoActivo.boton"></span>


                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13.5 6H18m0 0v4.5M18 6l-7.5 7.5M6 7.5v10.125c0 .621.504 1.125 1.125 1.125H17.25" />
                                            </svg>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </template>

                    </div>

                </div>

            </template>



        </section>



    </div>

    <x-section-rating sectionKey="investiga-crea-y-comparte" />
    @include('partials.footer')
</x-layouts.app>
