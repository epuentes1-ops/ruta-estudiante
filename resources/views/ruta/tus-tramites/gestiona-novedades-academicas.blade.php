<x-layouts.app :title="__('Gestiona novedades académicas')">


    <div class="flex flex-col items-center w-full gap-8 p-6">
        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/tramites/seccion2_2.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        {{-- ============================================================
    SECCIÓN: GESTIONA TU VIDA ACADÉMICA
    Laravel 12 + Blade + Flux + Alpine
============================================================ --}}

        @php
            $tramites = [
                [
                    'numero' => '01',
                    'categoria' => 'Datos personales',
                    'titulo' => 'Actualiza tus datos personales y de contacto',

                    'descripcion' => [
                        '¿Cambiaste de número, correo, nombre o algún dato personal? Mantener tu información actualizada hace que tu proceso en UCompensar siga fluyendo.',
                        'Aquí te mostramos cómo hacerlo paso a paso, fácil y desde el Campus Virtual.',
                    ],

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/1229567183?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Ir a actualizar mis datos',

                    'url' => 'https://ucompensar2.my.site.com/estudiantes/s/',
                ],

                [
                    'numero' => '02',
                    'categoria' => 'Retiro de materia',
                    'titulo' => 'Retira una materia dentro de las fechas permitidas',

                    'descripcion' => [
                        '¿Sientes que este semestre te quedó más cargado de lo que esperabas?',
                        'A veces toca parar, mirar el horario y decir: “ok, necesito reorganizar esto”. Cancelar una materia puede ayudarte a bajar un poco la carga académica y quedarte con los cursos que realmente puedes llevar bien.',
                        'En este video te mostramos cómo hacerlo y qué debes tener en cuenta para realizarlo dentro de las fechas permitidas.',
                    ],

                    'cierre' => 'Organiza tu semestre para que también puedas disfrutarlo.',

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/1042918168?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Ir a solicitar un retiro',

                    'url' => 'https://ucompensar2.my.site.com/estudiantes/s/',
                ],

                [
                    'numero' => '03',
                    'categoria' => 'Cambio académico',
                    'titulo' => 'Gestiona un cambio de ciclo, programa o sede',

                    'descripcion' => [
                        'A veces tu camino cambia: quieres avanzar de ciclo, explorar otro programa o estudiar desde otra sede.',
                        'Aquí encuentras la ruta para hacer ese cambio de forma clara y seguir avanzando con tu proceso.',
                    ],

                    'tipo' => 'imagen',

                    'imagen' => '/images/banners/tramites/imgseccion2_1.png',

                    'pdf' => 'https://bancodecontenidos.ucompensar.edu.co/index.php/s/Xx7Cr3t8cPYkaFJ',

                    'boton' => 'Solicitar un cambio',

                    'url' => 'https://academico.ucompensar.edu.co:8091/academusoft/academico/inscripcion/ins_control_acceso.jsp?proceso=3',
                ],

                [
                    'numero' => '04',
                    'categoria' => 'Aplazamiento',
                    'titulo' => 'Aplaza o cancela tu semestre',

                    'descripcion' => [
                        '¿Necesitas ponerle pausa al semestre?',
                        'A veces la vida cambia de ritmo y continuar como si nada no es la mejor opción. Si estás pensando en aplazar o cancelar tu semestre, aquí podrás conocer la diferencia entre las dos opciones y qué pasa con tu pago en cada caso.',
                        'Te contamos qué debes tener en cuenta, cuáles son los requisitos y cómo hacer el proceso paso a paso, para que tomes la decisión que mejor se ajuste a tu situación.',
                    ],

                    'cierre' => 'Infórmate primero y haz tu proceso con claridad.',

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/1042916131?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Radicar mi solicitud',

                    'url' => 'https://ucompensar2.my.site.com/estudiantes/s/',
                ],

                [
                    'numero' => '05',
                    'categoria' => 'Reingresos',
                    'titulo' => 'Solicita tu reingreso',

                    'descripcion' => [
                        'A veces haces una pausa para organizar tu vida y luego llega ese momento en el que dices: “Listo, quiero volver”.',
                        'Si ese momento llegó para ti, aquí tienes la ruta para solicitar tu reingreso a UCompensar y continuar con ese proyecto que empezaste.',
                    ],

                    'tipo' => 'video',

                    'video' => 'https://player.vimeo.com/video/1229591756?badge=0&autopause=0&player_id=0&app_id=58479',

                    'boton' => 'Solicitar mi reingreso',

                    'url' => 'https://ucompensar.edu.co/reingresos/',
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

                {{-- ====================================================
            ESTACIONES
        ===================================================== --}}

                <div class="
                relative
                mb-8
            ">

                    {{-- Línea de la ruta --}}
                    <div class="
                    absolute
                    left-[8%]
                    right-[8%]
                    top-6

                    h-[2px]

                    bg-gray-200
                    dark:bg-gray-700
                "
                        aria-hidden="true"></div>


                    {{-- Estaciones --}}
                    <div class="
                    relative
                    z-10

                    grid
                    grid-cols-5
                    gap-4
                "
                        role="tablist" aria-label="Trámites académicos">

                        @foreach ($tramites as $index => $tramite)
                            <button type="button" x-on:click="seleccionar({{ $index }})" role="tab"
                                :aria-selected="activo === {{ $index }}"
                                class="
                            group
                            flex
                            flex-col
                            items-center

                            text-center

                            focus:outline-none
                        ">

                                {{-- Número --}}
                                <span
                                    class="
                                relative
                                flex
                                h-12
                                w-12
                                items-center
                                justify-center

                                rounded-full
                                border-4

                                text-sm
                                font-bold

                                shadow-sm

                                transition-all
                                duration-300
                            "
                                    :class="activo === {{ $index }} ?
                                        'border-purple-200 bg-[#7C3AED] text-white scale-110 shadow-lg dark:border-purple-900' :
                                        'border-white bg-gray-200 text-gray-600 group-hover:bg-purple-100 group-hover:text-[#7C3AED] dark:border-gray-900 dark:bg-gray-700 dark:text-gray-200'">
                                    {{ $tramite['numero'] }}
                                </span>


                                {{-- Título compacto --}}
                                <span
                                    class="
                                mt-3
                                max-w-[160px]
                                text-sm
                                font-semibold
                                leading-tight

                                transition-colors
                            "
                                    :class="activo === {{ $index }} ?
                                        'text-[#7C3AED] dark:text-purple-300' :
                                        'text-gray-600 dark:text-gray-300'">
                                    {{ $tramite['categoria'] }}
                                </span>

                            </button>
                        @endforeach

                    </div>

                </div>



                {{-- ====================================================
            PANEL ACTIVO
        ===================================================== --}}

                @foreach ($tramites as $index => $tramite)
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
                                        {{ $tramite['numero'] }}
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
                                            {{ $tramite['categoria'] }}
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
                                            {{ $tramite['titulo'] }}
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

                                            @foreach ($tramite['descripcion'] as $parrafo)
                                                <p>
                                                    {{ $parrafo }}
                                                </p>
                                            @endforeach


                                            @if (!empty($tramite['cierre']))
                                                <p
                                                    class="
                                                font-semibold
                                                text-gray-900
                                                dark:text-white
                                            ">
                                                    {{ $tramite['cierre'] }}
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
                            VIDEO
                        ===================================== --}}

                                @if ($tramite['tipo'] === 'video')
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

                                            <iframe src="{{ $tramite['video'] }}" title="{{ $tramite['titulo'] }}"
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

                                @if ($tramite['tipo'] === 'imagen')
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

                                            <img src="{{ $tramite['imagen'] }}" alt="{{ $tramite['titulo'] }}"
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


                                            <a href="{{ $tramite['pdf'] }}" target="_blank" rel="noopener noreferrer"
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
                                                Ver guía PDF

                                                <span aria-hidden="true">
                                                    ↗
                                                </span>

                                            </a>

                                        </div>

                                    </div>
                                @endif



                                {{-- ====================================
                            BOTÓN PRINCIPAL
                        ===================================== --}}

                                <div
                                    class="
                                mt-7

                                flex
                                justify-center
                            ">

                                    <flux:button href="{{ $tramite['url'] }}" target="_blank" rel="noopener noreferrer"
                                        class="
                                    !rounded-xl

                                    !bg-[#7C3AED]

                                    !px-7
                                    !py-3

                                    !font-semibold
                                    !text-white

                                    shadow-md

                                    transition

                                    hover:!bg-[#362651]
                                ">
                                        {{ $tramite['boton'] }}

                                        <span class="ml-1" aria-hidden="true">
                                            →
                                        </span>

                                    </flux:button>

                                </div>

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

                @foreach ($tramites as $index => $tramite)
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
                                {{ $tramite['numero'] }}
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
                                {{ $tramite['titulo'] }}
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

                                    @foreach ($tramite['descripcion'] as $parrafo)
                                        <p>
                                            {{ $parrafo }}
                                        </p>
                                    @endforeach


                                    @if (!empty($tramite['cierre']))
                                        <p
                                            class="
                                        font-semibold

                                        text-gray-900
                                        dark:text-white
                                    ">
                                            {{ $tramite['cierre'] }}
                                        </p>
                                    @endif

                                </div>



                                {{-- ====================================
                            VIDEO
                        ===================================== --}}

                                @if ($tramite['tipo'] === 'video')
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

                                            <iframe src="{{ $tramite['video'] }}" title="{{ $tramite['titulo'] }}"
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

                                @if ($tramite['tipo'] === 'imagen')
                                    <div class="px-3 pb-3">

                                        <img src="{{ $tramite['imagen'] }}" alt="{{ $tramite['titulo'] }}"
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

                                        <a href="{{ $tramite['pdf'] }}" target="_blank" rel="noopener noreferrer"
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

                                <div
                                    class="
                                border-t
                                border-gray-100

                                p-4

                                dark:border-gray-800
                            ">

                                    <flux:button href="{{ $tramite['url'] }}" target="_blank"
                                        rel="noopener noreferrer"
                                        class="
                                    !w-full
                                    !justify-center
                                    !rounded-lg

                                    !bg-[#7C3AED]

                                    !font-semibold
                                    !text-white

                                    hover:!bg-[#362651]
                                ">
                                        {{ $tramite['boton'] }}

                                        <span class="ml-1" aria-hidden="true">
                                            →
                                        </span>

                                    </flux:button>

                                </div>

                            </div>

                        </template>

                    </div>
                @endforeach

            </div>

        </section>




    </div>

    <x-section-rating sectionKey="gestiona-novedades-academicas" />
    @include('partials.footer')
</x-layouts.app>
