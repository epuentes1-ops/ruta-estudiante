<x-layouts.app :title="__('Vive UCompensar')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/conectate/seccion3_5.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>




        <div class="text-center max-w-4xl px-4"">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white ">
                Explora conferencias y contenidos de vida universitaria
            </h2>
        </div>

        <!-- Descripción secundaria -->
        <div class="text-center max-w-4xl px-4">
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-700 dark:text-gray-200 leading-relaxed">
                La U también se disfruta cuando sales un rato de la rutina de clases y trabajos.<br>
                Aquí encuentras conferencias y contenidos para aprender de otras miradas, descubrir temas nuevos y
                conectar con eso que también te mueve.<br>
                Porque aprender también puede empezar con una charla que te pique la curiosidad.
            </p>
        </div>


        {{-- ============================================================
    SECCIÓN: Fortalece tu bienestar
    Laravel 12 + Blade + Flux + Alpine
============================================================ --}}

        @php
            $fortalecer = [
                [
                    'numero' => '01',
                    'categoria' => 'Aceleración Digital',
                    'titulo' => 'Aceleracion digital para las Pymes y Startups',

                    'descripcion' => [],

                    'tipo' => 'video',

                    'video' =>
                        'https://player.vimeo.com/video/817784743?h=0709e83e09&amp;badge=0&autopause=0&player_id=0&app_id=58479',
                ],

                [
                    'numero' => '02',
                    'categoria' => 'Aceleración de Pymes y Startups',
                    'titulo' => 'Conferencia Aceleración de Pymes y Startups a través de la transformación digital',

                    'descripcion' => [],

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/1222727728?badge=0&autopause=0&player_id=0&app_id=58479',
                ],

                [
                    'numero' => '03',
                    'categoria' => 'Inteligencia Artificial',
                    'titulo' => 'Inteligencia Artificial aplicada a la educación',

                    'descripcion' => [],

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/829458987?badge=0&autopause=0&player_id=0&app_id=58479',
                ],

                [
                    'numero' => '04',
                    'categoria' => 'Inteligencia Artificial y creatividad',
                    'titulo' =>
                        'Conferencia Inteligencia Artificial y creatividad: ¿Cómo pueden colaborar los humanos y las maquinas?',

                    'descripcion' => [],

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/1222727727?badge=0&autopause=0&player_id=0&app_id=58479',
                ],
            ];
        @endphp



        <section x-data="{
            activo: 0,
        
            seleccionar(index) {
                this.activo = index;
            },
        
            toggle(index) {
                this.activo = this.activo === index ? null : index;
            }
        }"
            class="
        relative
        isolate
        z-0

        w-full

        py-10
        md:py-14
    ">



            {{-- ========================================================
        ESCRITORIO
    ========================================================= --}}

            <div
                class="
            hidden
            md:block

            mx-auto
            max-w-7xl
            px-6
        ">

                {{-- =====================================================
    ESTACIONES
===================================================== --}}

                <div class="mb-10">

                    <div class="
            grid
            grid-cols-2
            lg:grid-cols-4
            gap-4
        "
                        role="tablist" aria-label="Fortalece tu bienestar">

                        @foreach ($fortalecer as $index => $fortalece)
                            <button type="button" x-on:click="seleccionar({{ $index }})" role="tab"
                                :aria-selected="activo === {{ $index }}"
                                class="
                    group
                    relative

                    flex
                    min-h-[110px]
                    w-full

                    items-center
                    gap-4

                    rounded-2xl
                    border

                    px-5
                    py-4

                    text-left

                    transition-all
                    duration-300

                    focus:outline-none
                    focus:ring-2
                    focus:ring-[#7C3AED]
                    focus:ring-offset-2
                "
                                :class="activo === {{ $index }} ?
                                    'border-[#7C3AED] bg-purple-50 shadow-md dark:border-purple-500 dark:bg-purple-950/30' :
                                    'border-gray-200 bg-white hover:border-purple-300 hover:bg-purple-50/50 hover:shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:hover:border-purple-700 dark:hover:bg-gray-800'">

                                {{-- Número --}}
                                <span
                                    class="
                        flex
                        h-12
                        w-12
                        shrink-0
                        items-center
                        justify-center

                        rounded-full

                        text-sm
                        font-bold

                        transition-all
                        duration-300
                    "
                                    :class="activo === {{ $index }} ?
                                        'bg-[#7C3AED] text-white shadow-md scale-105' :
                                        'bg-gray-100 text-gray-600 group-hover:bg-purple-100 group-hover:text-[#7C3AED] dark:bg-gray-800 dark:text-gray-300'">
                                    {{ $fortalece['numero'] }}
                                </span>


                                {{-- Categoría --}}
                                <span
                                    class="
                        min-w-0
                        text-sm
                        lg:text-base

                        font-semibold
                        leading-tight

                        transition-colors
                        duration-300
                    "
                                    :class="activo === {{ $index }} ?
                                        'text-[#7C3AED] dark:text-purple-300' :
                                        'text-gray-700 dark:text-gray-200'">
                                    {{ $fortalece['categoria'] }}
                                </span>


                                {{-- Indicador activo --}}
                                <span x-show="activo === {{ $index }}"
                                    class="
                        absolute
                        right-3
                        top-3

                        h-2
                        w-2

                        rounded-full
                        bg-[#7C3AED]
                    "
                                    aria-hidden="true"></span>

                            </button>
                        @endforeach

                    </div>

                </div>


                {{-- ====================================================
            PANEL ACTIVO
        ===================================================== --}}

                @foreach ($fortalecer as $index => $fortalece)
                    <template x-if="activo === {{ $index }}">

                        <article
                            class="
                        overflow-hidden

                        rounded-2xl
                        border
                        border-gray-200

                        bg-white

                        shadow-lg

                        dark:border-gray-700
                        dark:bg-gray-900
                    ">

                            {{-- ========================================
                        ENCABEZADO / DESCRIPCIÓN
                    ========================================= --}}

                            <div
                                class="
                            px-7
                            py-7

                            md:px-10
                            lg:px-12
                        ">

                                <div
                                    class="
                                flex
                                items-start
                                gap-4
                            ">

                                    {{-- Número --}}
                                    <div
                                        class="
                                    hidden
                                    lg:flex

                                    h-12
                                    w-12
                                    shrink-0
                                    items-center
                                    justify-center

                                    rounded-full

                                    bg-[#7C3AED]

                                    text-sm
                                    font-bold
                                    text-white
                                ">
                                        {{ $fortalece['numero'] }}
                                    </div>


                                    <div class="min-w-0">

                                        <span
                                            class="
                                        text-xs
                                        font-bold
                                        uppercase
                                        tracking-wider

                                        text-[#7C3AED]
                                        dark:text-purple-300
                                    ">
                                            {{ $fortalece['categoria'] }}
                                        </span>


                                        <h3
                                            class="
                                        mt-1

                                        text-2xl
                                        font-bold
                                        leading-tight

                                        text-gray-900
                                        dark:text-white
                                    ">
                                            {{ $fortalece['titulo'] }}
                                        </h3>


                                        <div
                                            class="
                                        mt-4
                                        max-w-5xl

                                        space-y-3

                                        text-base
                                        leading-7

                                        text-gray-700
                                        dark:text-gray-200
                                    ">

                                            @foreach ($fortalece['descripcion'] as $parrafo)
                                                <p>
                                                    {{ $parrafo }}
                                                </p>
                                            @endforeach


                                            @if (!empty($fortalece['cierre']))
                                                <p
                                                    class="
                                                font-semibold
                                                text-gray-900
                                                dark:text-white
                                            ">
                                                    {{ $fortalece['cierre'] }}
                                                </p>
                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </div>



                            {{-- ========================================
                        CONTENIDO MULTIMEDIA
                    ========================================= --}}

                            <div
                                class="
                            border-t
                            border-gray-100

                            bg-gray-50

                            p-6

                            dark:border-gray-800
                            dark:bg-gray-950

                            lg:p-8
                        ">

                                {{-- ====================================
                            VIDEO o Genially
                        ===================================== --}}

                                @if ($fortalece['tipo'] === 'video')
                                    <div
                                        class="
                                    mx-auto
                                    max-w-6xl
                                ">

                                        <div
                                            class="
                                        relative
                                        aspect-video
                                        w-full
                                        overflow-hidden

                                        rounded-xl

                                        bg-black

                                        shadow-md
                                    ">

                                            <iframe src="{{ $fortalece['video'] }}" title="{{ $fortalece['titulo'] }}"
                                                class="
                                            absolute
                                            inset-0

                                            h-full
                                            w-full
                                        "
                                                frameborder="0" loading="lazy"
                                                allow="
                                            autoplay;
                                            fullscreen;
                                            picture-in-picture;
                                            clipboard-write;
                                            encrypted-media;
                                            web-share
                                        "
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>

                                        </div>

                                    </div>
                                @endif



                                {{-- ====================================
                            IMAGEN + PDF
                        ===================================== --}}

                                @if ($fortalece['tipo'] === 'imagen')
                                    <div
                                        class="
                                    mx-auto

                                    grid
                                    max-w-6xl
                                    grid-cols-1
                                    gap-6

                                    lg:grid-cols-3
                                ">

                                        {{-- Imagen --}}
                                        <div
                                            class="
                                        lg:col-span-2

                                        overflow-hidden

                                        rounded-xl

                                        bg-white

                                        shadow-md

                                        dark:bg-gray-900
                                    ">

                                            <img src="{{ $fortalece['imagen'] }}" alt="{{ $fortalece['titulo'] }}"
                                                class="
                                            block
                                            h-auto
                                            w-full
                                            object-contain
                                        ">

                                        </div>


                                        {{-- PDF --}}
                                        <div
                                            class="
                                        flex
                                        flex-col
                                        justify-center

                                        rounded-xl
                                        border
                                        border-gray-200

                                        bg-white

                                        p-6

                                        dark:border-gray-700
                                        dark:bg-gray-900
                                    ">

                                            <div
                                                class="
                                            mb-4

                                            flex
                                            h-12
                                            w-12
                                            items-center
                                            justify-center

                                            rounded-xl

                                            bg-purple-100

                                            text-[#7C3AED]

                                            dark:bg-purple-950
                                            dark:text-purple-300
                                        ">

                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"
                                                    class="h-6 w-6" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375
                                                   3.375 0 00-3.375-3.375h-1.5
                                                   a1.125 1.125 0
                                                   01-1.125-1.125v-1.5A3.375
                                                   3.375 0 0010.125 2.25H8.25
                                                   m0 12.75h7.5m-7.5 3h4.5M10.5
                                                   2.25H5.625c-.621
                                                   0-1.125.504-1.125
                                                   1.125v17.25c0
                                                   .621.504 1.125
                                                   1.125 1.125h12.75c.621
                                                   0 1.125-.504
                                                   1.125-1.125V11.625a9.75
                                                   9.75 0 00-9.75-9.75z" />
                                                </svg>

                                            </div>


                                            <h4
                                                class="
                                            text-lg
                                            font-bold

                                            text-gray-900
                                            dark:text-white
                                        ">
                                                Guía del proceso
                                            </h4>


                                            <p
                                                class="
                                            mt-2

                                            text-sm
                                            leading-relaxed

                                            text-gray-600
                                            dark:text-gray-300
                                        ">
                                                Consulta los requisitos y pasos antes
                                                de realizar tu solicitud.
                                            </p>


                                            <a href="{{ $fortalece['pdf'] }}" target="_blank" rel="noopener noreferrer"
                                                class="
                                            mt-5

                                            inline-flex
                                            items-center
                                            justify-center
                                            gap-2

                                            rounded-lg
                                            border
                                            border-[#7C3AED]

                                            px-4
                                            py-2.5

                                            text-sm
                                            font-semibold

                                            text-[#7C3AED]

                                            transition

                                            hover:bg-purple-50

                                            dark:text-purple-300
                                            dark:hover:bg-purple-950/50
                                        ">

                                                <span aria-hidden="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="size-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                                    </svg>

                                                </span>

                                                Ver guía PDF

                                            </a>

                                        </div>

                                    </div>
                                @endif



                                {{-- ====================================
                            BOTÓN PRINCIPAL
                        ===================================== --}}



                            </div>

                        </article>

                    </template>
                @endforeach

            </div>



            {{-- ========================================================
        MÓVIL - ACORDEÓN
    ========================================================= --}}

            <div
                class="
            mx-auto
            max-w-2xl
            space-y-3
            px-4

            md:hidden
        ">

                @foreach ($fortalecer as $index => $fortalece)
                    <div
                        class="
                    overflow-hidden

                    rounded-xl
                    border
                    border-gray-200

                    bg-white

                    shadow-sm

                    dark:border-gray-700
                    dark:bg-gray-900
                ">

                        {{-- ============================================
                    CABECERA ACORDEÓN
                ============================================= --}}

                        <button type="button" x-on:click="toggle({{ $index }})"
                            class="
                        flex
                        w-full
                        items-center
                        gap-3

                        px-4
                        py-4

                        text-left

                        transition

                        hover:bg-gray-50

                        dark:hover:bg-gray-800
                    "
                            :aria-expanded="activo === {{ $index }}">

                            {{-- Número --}}
                            <span
                                class="
                            flex
                            h-9
                            w-9
                            shrink-0
                            items-center
                            justify-center

                            rounded-full

                            text-xs
                            font-bold

                            transition-colors
                        "
                                :class="activo === {{ $index }} ?
                                    'bg-[#7C3AED] text-white' :
                                    'bg-gray-100 text-gray-600 dark:bg-gray-800 dark:text-gray-200'">
                                {{ $fortalece['numero'] }}
                            </span>


                            {{-- Título --}}
                            <span
                                class="
                            flex-1

                            text-sm
                            font-semibold
                            leading-tight

                            text-gray-900
                            dark:text-white
                        ">
                                {{ $fortalece['titulo'] }}
                            </span>


                            {{-- Flecha --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor"
                                class="
                            h-5
                            w-5
                            shrink-0

                            text-gray-500

                            transition-transform
                            duration-300
                        "
                                :class="activo === {{ $index }} ?
                                    'rotate-180' :
                                    ''">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25L12 15.75 4.5 8.25" />
                            </svg>

                        </button>



                        {{-- ============================================
                    CONTENIDO
                ============================================= --}}

                        <template x-if="activo === {{ $index }}">

                            <div
                                class="
                            border-t
                            border-gray-100

                            dark:border-gray-800
                        ">

                                {{-- Descripción --}}
                                <div
                                    class="
                                space-y-3

                                px-4
                                py-5

                                text-sm
                                leading-6

                                text-gray-700
                                dark:text-gray-200
                            ">

                                    @foreach ($fortalece['descripcion'] as $parrafo)
                                        <p>
                                            {{ $parrafo }}
                                        </p>
                                    @endforeach


                                    @if (!empty($fortalece['cierre']))
                                        <p
                                            class="
                                        font-semibold

                                        text-gray-900
                                        dark:text-white
                                    ">
                                            {{ $fortalece['cierre'] }}
                                        </p>
                                    @endif

                                </div>



                                {{-- ====================================
                            VIDEO
                        ===================================== --}}

                                @if ($fortalece['tipo'] === 'video')
                                    <div class="px-3 pb-4">

                                        <div
                                            class="
                                        relative

                                        aspect-video
                                        w-full

                                        overflow-hidden

                                        rounded-lg

                                        bg-black
                                    ">

                                            <iframe src="{{ $fortalece['video'] }}"
                                                title="{{ $fortalece['titulo'] }}"
                                                class="
                                            absolute
                                            inset-0

                                            h-full
                                            w-full
                                        "
                                                loading="lazy" frameborder="0"
                                                allow="
                                            autoplay;
                                            fullscreen;
                                            picture-in-picture;
                                            clipboard-write;
                                            encrypted-media;
                                            web-share
                                        "
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen></iframe>

                                        </div>

                                    </div>
                                @endif



                                {{-- ====================================
                            IMAGEN
                        ===================================== --}}

                                @if ($fortalece['tipo'] === 'imagen')
                                    <div class="px-3 pb-3">

                                        <img src="{{ $fortalece['imagen'] }}" alt="{{ $fortalece['titulo'] }}"
                                            class="
                                        h-auto
                                        w-full

                                        rounded-lg
                                    ">

                                    </div>


                                    <div
                                        class="
                                    px-4
                                    pb-4
                                ">

                                        <a href="{{ $fortalece['pdf'] }}" target="_blank" rel="noopener noreferrer"
                                            class="
                                        flex
                                        w-full
                                        items-center
                                        justify-center
                                        gap-2

                                        rounded-lg
                                        border
                                        border-[#7C3AED]

                                        px-4
                                        py-2.5

                                        text-sm
                                        font-semibold

                                        text-[#7C3AED]

                                        dark:text-purple-300
                                    ">
                                            Ver guía PDF

                                            <span aria-hidden="true">
                                                ↗
                                            </span>

                                        </a>

                                    </div>
                                @endif



                                {{-- ====================================
                            ACCIÓN
                        ===================================== --}}



                            </div>

                        </template>

                    </div>
                @endforeach

            </div>

        </section>

        
        <!-- Sección Texto + video -->
        {{-- <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">

            
            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Bachata
            </h3>
            <br>
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Te animas a sacar tus mejores pasos? <br> <br>
                    En esta ruta de bachata vas a aprender desde lo más básico, descubrir tu ritmo y soltar el cuerpo
                    paso a paso. Una experiencia para moverte, practicar y disfrutar la música mientras conviertes esos
                    primeros pasos en puro flow.
                </p>
            </div>

            <!-- Genially -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="video-correo"
                        src="https://player.vimeo.com/video/1229528893?badge=0&autopause=0&player_id=0&app_id=58479%22"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        
        <!-- Video + Sección Texto o -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Video -->

            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="OneDrive"
                        src="https://player.vimeo.com/video/996267166?badge=0&autopause=0&player_id=0&app_id=58479%22"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Guitarra
            </h3><br>
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    ¿Siempre quisiste aprender guitarra o retomar ese talento que tenías guardado? <br> <br>
                    En esta ruta vas a descubrir que aprender también es encontrar tu propia forma de hacerlo. Con
                    historias, ejercicios y recursos para practicar, empieza a soltar los dedos, encontrar tu ritmo y
                    hacer que la guitarra suene a ti.
                </p>
            </div>
        </div> --}}

        

        <!-- Sección Texto + video -->
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 max-w-6xl mx-auto mt-8 px-4">
            <!-- Texto -->
            <div class="w-full md:w-1/3 text-center md:text-left">
                <h3
                class="text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-relaxed text-left">
                Inscríbete en actividades
            </h3><br>
                <p class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                    La U también se vive haciendo cosas que disfrutas, descubriendo nuevos intereses y compartiendo con otras personas. <br> <br>
                    Explora las actividades disponibles, encuentra algo que te guste y hazle un espacio en tu semestre a algo diferente a las clases.
                </p>
                <br>
                <div class="flex flex-col sm:flex-row gap-4">

                    <flux:button
                        href="https://alertastempranas.ucompensar.edu.co/app/default.php"
                        target="_blank" rel="noopener noreferrer" icon="document-check" variant="filled"
                        class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                        Ir a inscribirme 
                    </flux:button>
                </div>
            </div>

            <!-- video -->
            <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                <div class="aspect-video">
                    <iframe title="video-correo"
                        src="https://player.vimeo.com/video/1223685139?badge=0&autopause=0&player_id=0&app_id=58479"
                        class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                        allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>





    </div>

    <x-section-rating sectionKey="vive-ucompensar" />
    @include('partials.footer')
</x-layouts.app>
