<x-layouts.app :title="__('Escribe y cita con confianza')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/crea/seccion4_3.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        @php
            $recursosAcademicos = [
                [
                    'numero' => '01',
                    'categoria' => 'Integridad académica',
                    'titulo' => 'Comprende la integridad académica y usa el antiplagio',
                    'descripcion' => [
                        'Hacer un trabajo también es saber jugar bien con la información.',
                        'Aquí vas a descubrir cómo usar tus fuentes, darles el crédito que merecen y conocer Compilatio para revisar la similitud de tu texto antes de entregarlo.',
                        'Todo para que tu trabajo tenga buenas fuentes y, sobre todo, tu propia voz.',
                    ],
                    'tipo' => 'genially',
                    'recurso' => 'https://view.genially.com/6aac4509dcd556264cf5bbbd',
                    'boton' => null,
                    'url' => null,
                ],

                [
                    'numero' => '02',
                    'categoria' => 'Normas APA',
                    'titulo' => 'Cita y referencia tus fuentes con normas APA',
                    'descripcion' => [
                        'Citar y referenciar puede ser mucho más fácil cuando entiendes qué hacer en cada caso.',
                        'En este recurso interactivo pondrás a prueba tus conocimientos sobre normas APA y descubrirás cómo citar ideas, textos, datos, imágenes y otros contenidos según la fuente que estés utilizando.',
                        'Aprende jugando y lleva estas herramientas directamente a tus trabajos.',
                    ],
                    'tipo' => 'genially',
                    'recurso' => 'https://view.genially.com/6ab16a9b78a8d06185da4ac6',
                    'boton' => 'Ir al formulario de formaciones',
                    'url' =>
                        'https://forms.office.com/Pages/ResponsePage.aspx?id=oo7zSy2DUkW1CEIVcNpD_y2OAZMs_hhLhR5qOiKzRfZURjNESjFFQ0I4R0hSQjgzWjVTUkJYS0Q3My4u',
                ],

                [
                    'numero' => '03',
                    'categoria' => 'Gestor bibliográfico',
                    'titulo' => 'Usa un gestor bibliográfico',
                    'descripcion' => [
                        '¿Tienes mil fuentes para un trabajo?',
                        'Mendeley te ayuda a organizarlas, citarlas y llevarlas a Word en formato APA.',
                        'Descubre cómo usarlo desde el CRAI.',
                    ],
                    'tipo' => 'vimeo',
                    'recurso' =>
                        'https://player.vimeo.com/video/1229656540?badge=0&autopause=0&player_id=0&app_id=58479',
                    'boton' => 'Ir al formulario de formaciones',
                    'url' =>
                        'https://forms.office.com/Pages/ResponsePage.aspx?id=oo7zSy2DUkW1CEIVcNpD_y2OAZMs_hhLhR5qOiKzRfZURjNESjFFQ0I4R0hSQjgzWjVTUkJYS0Q3My4u',
                ],
            ];
        @endphp

        <section x-data="{ activo: 0 }" class="w-full max-w-7xl mx-auto px-4 py-10">

            {{-- =====================================================
        FILA TIPO NETFLIX
    ====================================================== --}}

            <div class="
            flex
            gap-5

            overflow-x-auto

            pb-6
            pt-2
            px-1

            snap-x
            snap-mandatory

            lg:grid
            lg:grid-cols-3
            lg:overflow-visible
            lg:pb-4
        "
                role="tablist">

                @foreach ($recursosAcademicos as $index => $recurso)
                    <button type="button" role="tab" x-on:click="activo = {{ $index }}"
                        :aria-selected="activo === {{ $index }}"
                        class="
                    group
                    relative

                    min-w-[82%]
                    sm:min-w-[55%]
                    lg:min-w-0

                    aspect-[16/9]

                    snap-center

                    overflow-hidden
                    rounded-2xl

                    border

                    text-left

                    shadow-md

                    transition-all
                    duration-300
                    ease-out

                    hover:-translate-y-1
                    hover:scale-[1.025]
                    hover:shadow-xl

                    focus:outline-none
                    focus:ring-2
                    focus:ring-[#7C3AED]
                    focus:ring-offset-2
                "
                        :class="activo === {{ $index }} ?
                            'border-[#7C3AED] ring-2 ring-[#7C3AED]/20' :
                            'border-gray-200 dark:border-gray-700'">

                        {{-- Fondo --}}
                        <div
                            class="
                        absolute
                        inset-0

                        bg-gradient-to-br
                        from-[#7C3AED]
                        via-[#6423C8]
                        to-[#362651]

                        transition-transform
                        duration-500

                        group-hover:scale-105
                    ">
                        </div>


                        {{-- Decoración --}}
                        <div
                            class="
                        absolute
                        -right-10
                        -top-14

                        h-36
                        w-36

                        rounded-full

                        border-[18px]
                        border-white/10
                    ">
                        </div>

                        <div
                            class="
                        absolute
                        -bottom-12
                        -left-8

                        h-28
                        w-28

                        rounded-full

                        bg-purple-300/10
                    ">
                        </div>


                        {{-- Tipo de contenido --}}
                        <span
                            class="
                        absolute
                        top-4
                        right-4

                        rounded-full

                        bg-black/25
                        backdrop-blur-sm

                        px-3
                        py-1

                        text-[10px]
                        font-bold
                        uppercase
                        tracking-wider
                        text-white
                    ">
                            {{ $recurso['tipo'] === 'vimeo' ? 'Video' : 'Interactivo' }}
                        </span>


                        {{-- Número --}}
                        <span
                            class="
                        absolute
                        top-4
                        left-4

                        flex
                        h-10
                        w-10

                        items-center
                        justify-center

                        rounded-full

                        bg-white
                        text-[#7C3AED]

                        text-xs
                        font-bold

                        shadow
                    ">
                            {{ $recurso['numero'] }}
                        </span>


                        {{-- Contenido inferior --}}
                        <div
                            class="
                        absolute
                        inset-x-0
                        bottom-0

                        bg-gradient-to-t
                        from-black/75
                        via-black/30
                        to-transparent

                        px-5
                        pb-5
                        pt-16
                    ">

                            <h3
                                class="
                            text-lg
                            md:text-xl

                            font-bold
                            leading-tight

                            text-white
                        ">
                                {{ $recurso['categoria'] }}
                            </h3>


                            <div
                                class="
                            mt-3

                            flex
                            items-center
                            gap-2

                            text-xs
                            font-semibold
                            text-white/90
                        ">
                                <span
                                    class="
                                flex
                                h-7
                                w-7
                                items-center
                                justify-center

                                rounded-full
                                bg-white
                                text-[#7C3AED]
                            ">
                                    →
                                </span>

                                Explorar recurso
                            </div>

                        </div>


                        {{-- Estado activo --}}
                        <div x-show="activo === {{ $index }}"
                            class="
                        absolute
                        bottom-0
                        left-0
                        right-0

                        h-1
                        bg-white
                    ">
                        </div>

                    </button>
                @endforeach

            </div>



            {{-- =====================================================
        PANEL EXPANDIDO
    ====================================================== --}}

            <div id="detalle-recurso" class="mt-5">

                @foreach ($recursosAcademicos as $index => $recurso)
                    <article x-show="activo === {{ $index }}"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-3"
                        x-transition:enter-end="opacity-100 translate-y-0"
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

                        <div
                            class="
                        grid
                        grid-cols-1

                        lg:grid-cols-5
                    ">

                            {{-- =====================================
                        MULTIMEDIA
                    ====================================== --}}

                            <div
                                class="
                            lg:col-span-3

                            bg-gray-950

                            p-3
                            md:p-5
                        ">

                                <div
                                    class="
                                relative
                                aspect-video

                                w-full

                                overflow-hidden
                                rounded-xl

                                bg-black
                            ">

                                    <iframe src="{{ $recurso['recurso'] }}" title="{{ $recurso['titulo'] }}"
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



                            {{-- =====================================
                        INFORMACIÓN
                    ====================================== --}}

                            <div
                                class="
                            lg:col-span-2

                            flex
                            flex-col

                            p-6
                            md:p-8
                        ">

                                <div>

                                    <div
                                        class="
                                    flex
                                    items-center
                                    gap-3
                                ">

                                        <span
                                            class="
                                        flex
                                        h-10
                                        w-10

                                        shrink-0

                                        items-center
                                        justify-center

                                        rounded-full

                                        bg-[#7C3AED]

                                        text-xs
                                        font-bold
                                        text-white
                                    ">
                                            {{ $recurso['numero'] }}
                                        </span>


                                        <span
                                            class="
                                        text-xs
                                        font-bold
                                        uppercase
                                        tracking-wider

                                        text-[#7C3AED]
                                        dark:text-purple-300
                                    ">
                                            {{ $recurso['categoria'] }}
                                        </span>

                                    </div>


                                    <h3
                                        class="
                                    mt-5

                                    text-xl
                                    md:text-2xl

                                    font-bold
                                    leading-tight

                                    text-gray-900
                                    dark:text-white
                                ">
                                        {{ $recurso['titulo'] }}
                                    </h3>


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

                                        @foreach ($recurso['descripcion'] as $parrafo)
                                            <p>
                                                {{ $parrafo }}
                                            </p>
                                        @endforeach

                                    </div>

                                </div>



                                {{-- BOTÓN --}}
                                @if (!empty($recurso['boton']) && !empty($recurso['url']))
                                    <div class="mt-7">

                                        <flux:button href="{{ $recurso['url'] }}" target="_blank"
                                            rel="noopener noreferrer" icon="arrow-up-right" variant="filled"
                                            class="
                                        !bg-[#7C3AED]
                                        !text-white

                                        hover:!bg-[#362651]

                                        dark:!bg-[#7C3AED]
                                        dark:!text-white

                                        dark:hover:!bg-[#b49bec]
                                        dark:hover:!text-gray-900

                                        transition-all
                                        duration-300
                                    ">
                                            {{ $recurso['boton'] }}
                                        </flux:button>

                                    </div>
                                @endif

                            </div>

                        </div>

                    </article>
                @endforeach

            </div>

        </section>


    </div>

    <x-section-rating sectionKey="escribe-y-cita-con-confianza" />
    @include('partials.footer')
</x-layouts.app>
