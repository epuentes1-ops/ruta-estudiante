<x-layouts.app :title="__('Conecta y participa')">
    <div class="flex flex-col items-center w-full gap-10 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1_4.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>


        {{-- ============================================================
    RECURSOS INTERACTIVOS
    Laravel 12 + Blade + Flux UI + Alpine
============================================================ --}}

        @php
            $recursos = [
                [
                    'numero' => '01',
                    'titulo' => 'Comunícate con tu docente y tus compañeros',
                    'descripcion' => [
                        '¿Tienes una duda y no sabes a quién preguntarle?',
                        'En UCompensar no todo se resuelve buscando en Google o escribiendo en el grupo de WhatsApp. 😅',
                        'Tienes diferentes espacios para hablar con tus docentes y compañeros, preguntar, compartir información y seguirle el hilo a tus cursos.',
                        'En este video te mostramos dónde encontrarlos y cómo escribirles desde la Solución E-Learning.',
                    ],
                    'cierre' => 'Pregunta, conversa y encuentra el canal que necesitas.',
                    'genially' => 'https://player.vimeo.com/video/1229535385?badge=0&autopause=0&player_id=0&app_id=58479%22',
                ],

                [
                    'numero' => '02',
                    'titulo' => 'Cómo participar en un foro',
                    'descripcion' => [
                        '¿Vas a participar en un foro? Que no sea solo entrar, escribir y salir.',
                        'Un buen aporte puede abrir una conversación, ayudar a alguien más y hasta hacerte ver el tema desde otro lado.',
                        'En este recurso encontrarás tips sencillos para participar, argumentar tus ideas y conversar con tus compañeros sin perder el hilo.',
                    ],
                    'cierre' => 'Entra, participa y deja algo que sume.',
                    'genially' => 'https://view.genially.com/66a7b136a1e079dde8633643',
                ],

                [
                    'numero' => '03',
                    'titulo' => 'Colabora en equipo en el aula virtual',
                    'descripcion' => [
                        'Trabajar en equipo a veces es un parche… y a veces es un caos.',
                        'Entre mensajes que nadie responde, tareas que nadie sabe quién hace y el clásico “¿pero eso quién lo tenía?”, trabajar con otros en virtual puede ponerse interesante.',
                        'En este recurso encontrarás 5 tips para organizarse mejor, comunicarse sin enredos, repartir tareas y sacarle provecho al trabajo en equipo.',
                    ],
                    'cierre' => 'Porque cuando todos saben qué hacer, todo fluye mucho mejor.',
                    'genially' => 'https://view.genially.com/66abd2bdd825f6db15a40bed',
                ],
            ];
        @endphp


        <section class="w-full py-8 md:py-12" x-data="{
            actual: 0,
            total: {{ count($recursos) }},
        
            siguiente() {
                this.actual = (this.actual + 1) % this.total;
            },
        
            anterior() {
                this.actual = (this.actual - 1 + this.total) % this.total;
            },
        
            irA(index) {
                this.actual = index;
            }
        }" x-on:keydown.right.window="siguiente()"
            x-on:keydown.left.window="anterior()">

            

            {{-- ========================================================
        CONTENEDOR DEL CARRUSEL
    ========================================================= --}}

            <div
                class="
            relative
            mx-auto
            w-full
            max-w-6xl
            px-4
            sm:px-6
            lg:px-8
        ">

                {{-- IMPORTANTE:
             overflow-hidden evita que aparezca parte
             de la siguiente diapositiva.
        --}}
                <div
                    class="
                relative
                w-full
                overflow-hidden
                rounded-2xl
            ">

                    {{-- =================================================
                TRACK
            ================================================== --}}

                    <div class="
                    flex
                    w-full
                    transition-transform
                    duration-500
                    ease-in-out
                "
                        :style="`transform: translateX(-${actual * 100}%);`">

                        @foreach ($recursos as $index => $recurso)
                            {{-- ===========================================
                        DIAPOSITIVA
                    ============================================ --}}

                            <article
                                class="
                            w-full
                            min-w-full
                            flex-none
                            shrink-0
                        "
                                aria-roledescription="slide"
                                aria-label="Recurso {{ $index + 1 }} de {{ count($recursos) }}">

                                <div
                                    class="
                                mx-auto
                                w-full
                                overflow-hidden
                                rounded-2xl
                                border
                                border-gray-200
                                bg-white
                                shadow-sm
                                dark:border-gray-700
                                dark:bg-gray-900
                            ">

                                    {{-- ===================================
                                TEXTO SUPERIOR
                            ==================================== --}}

                                    <div
                                        class="
                                    border-b
                                    border-gray-100
                                    px-5
                                    py-6
                                    dark:border-gray-800
                                    sm:px-8
                                    md:px-10
                                    md:py-8
                                ">

                                        <div
                                            class="
                                        mx-auto
                                        max-w-5xl
                                    ">

                                            {{-- Número --}}
                                            <div
                                                class="
                                            mb-3
                                            flex
                                            h-9
                                            w-9
                                            items-center
                                            justify-center
                                            rounded-full
                                            !bg-[#7C3AED]
                                            text-xs
                                            font-bold
                                            text-white
                                        ">
                                                {{ $recurso['numero'] }}
                                            </div>


                                            {{-- Título --}}
                                            <h3
                                                class="
                                            text-xl
                                            font-bold
                                            leading-tight
                                            text-gray-900
                                            dark:text-white
                                            md:text-2xl
                                        ">
                                                {{ $recurso['titulo'] }}
                                            </h3>


                                            {{-- Descripción --}}
                                            <div
                                                class="
                                            mt-4
                                            space-y-3
                                            text-sm
                                            leading-6
                                            text-gray-700
                                            dark:text-gray-200
                                            md:text-base
                                            md:leading-7
                                        ">

                                                @foreach ($recurso['descripcion'] as $parrafo)
                                                    <p>
                                                        {{ $parrafo }}
                                                    </p>
                                                @endforeach


                                                <p
                                                    class="
                                                pt-1
                                                font-semibold
                                                text-gray-900
                                                dark:text-white
                                            ">
                                                    {{ $recurso['cierre'] }}
                                                </p>

                                            </div>

                                        </div>

                                    </div>


                                    {{-- =========================================================
    GENIALLY - RECURSO INTERACTIVO
========================================================= --}}

                                    <div
                                        class="
        w-full
        border-t
        border-gray-100
        bg-gray-50
        px-4
        py-5
        dark:border-gray-800
        dark:bg-gray-950
        sm:px-6
        md:px-8
        md:py-7
    ">

                                        <div
                                            class="
            relative
            mx-auto
            w-full
            max-w-7xl
            overflow-hidden
            rounded-xl
            bg-white
            shadow-md
            dark:bg-gray-900
        ">

                                            {{-- 
            Proporción 16:9.
            Hace que Genially utilice todo el ancho y una altura
            equivalente, evitando que aparezca pequeño en el centro.
        --}}
                                            <div class="relative w-full aspect-video">

                                                <iframe src="{{ $recurso['genially'] }}"
                                                    title="{{ $recurso['titulo'] }}"
                                                    class="
                    absolute
                    inset-0
                    h-full
                    w-full
                    border-0
                "
                                                    loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
                                                    referrerpolicy="strict-origin-when-cross-origin"
                                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                                    allowfullscreen></iframe>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </article>
                        @endforeach

                    </div>

                </div>


                {{-- ====================================================
            BOTÓN ANTERIOR
        ===================================================== --}}

                <div
                    class="
                absolute
                left-0
                top-1/2
                z-20
                -translate-y-1/2
                sm:left-1
            ">
                    <flux:button type="button" variant="filled"
                        class="
                    !h-11
                    !w-11
                    !rounded-full
                    !p-0
                    shadow-lg
                "
                        x-on:click="anterior()" aria-label="Recurso anterior">
                        <span aria-hidden="true" class="text-3xl leading-none">
                            ‹
                        </span>
                    </flux:button>
                </div>


                {{-- ====================================================
            BOTÓN SIGUIENTE
        ===================================================== --}}

                <div
                    class="
                absolute
                right-0
                top-1/2
                z-20
                -translate-y-1/2
                sm:right-1
            ">
                    <flux:button type="button" variant="filled"
                        class="
                    !h-11
                    !w-11
                    !rounded-full
                    !p-0
                    shadow-lg
                "
                        x-on:click="siguiente()" aria-label="Siguiente recurso">
                        <span aria-hidden="true" class="text-3xl leading-none">
                            ›
                        </span>
                    </flux:button>
                </div>

            </div>


            {{-- ========================================================
        INDICADORES
    ========================================================= --}}

            <div
                class="
            mt-6
            flex
            flex-col
            items-center
            justify-center
            gap-2
        ">

                <div
                    class="
                flex
                items-center
                justify-center
                gap-2
            ">

                    @foreach ($recursos as $index => $recurso)
                        <button type="button" x-on:click="irA({{ $index }})"
                            class="
                        h-2
                        rounded-full
                        transition-all
                        duration-300
                    "
                            :class="actual === {{ $index }} ?
                                'w-8 !bg-[#7C3AED]' :
                                'w-2 bg-gray-300 dark:bg-gray-600'"
                            aria-label="Ir al recurso {{ $index + 1 }}"></button>
                    @endforeach

                </div>


                {{-- Contador --}}
                <div class="
                text-xs
                font-medium
                text-gray-500
                dark:text-gray-400
            "
                    aria-live="polite">
                    <span x-text="actual + 1"></span>
                    /
                    {{ count($recursos) }}
                </div>

            </div>

        </section>


    </div>

    <x-section-rating sectionKey="conecta-y-participa" />
    @include('partials.footer')
</x-layouts.app>
