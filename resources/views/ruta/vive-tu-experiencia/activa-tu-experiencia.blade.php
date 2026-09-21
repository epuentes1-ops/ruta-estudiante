<x-layouts.app :title="__('Ruta del estudiante - Activa tu experiencia')">
    <div class="flex flex-col items-center w-full gap-10 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- Mensaje principal -->

        <div class="text-center max-w-4xl px-4">
            <h2
                class="text-base sm:text-lg md:text-xl lg:text-2xl font-semibold text-gray-800 dark:text-gray-100 leading-relaxed">
                Conoce tu ruta de ingreso a las plataformas
            </h2>
        </div>

        <div class="text-center w-full">
            <h4
                class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100 leading-relaxed ">
                ¿No sabes por dónde entrar? Tranqui.
            </h4>
        </div>

        <!-- Descripción secundaria -->
        <div class="text-center max-w-4xl px-4">
            <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-700 dark:text-gray-200 leading-relaxed">
                Aquí encuentras la ruta para llegar a las plataformas que vas a usar durante tu vida universitaria.
                Conoce dónde, cómo acceder y qué puedes hacer en cada una, para que moverte por tu espacio virtual sea
                mucho más fácil.
                <br><br>
                Explora tu ruta, accede sin enredos y sácale todo el provecho.
            </p>
        </div>

        <!-- Genially 1 -->
        <div class="w-full max-w-5xl mt-6 rounded-xl overflow-hidden shadow-lg">
            <div class="aspect-video">
                <iframe title="genially-1" src="https://view.genially.com/67453595c0aa74a15a5df1be"
                    class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4">

            <flux:button href="https://campusvirtual.ucompensar.edu.co" target="_blank" rel="noopener noreferrer"
                icon="building-office" variant="filled"
                class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
               transition-all duration-300">
                Ir a mi Campus Virtual
            </flux:button>

            <flux:button href="https://virtual.ucompensar.edu.co" target="_blank" rel="noopener noreferrer"
                icon="computer-desktop" variant="filled"
                class="!bg-[#7C3AED] !text-white
               hover:!bg-[#362651]
               dark:!bg-[#7C3AED] dark:!text-white
               dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900
               transition-all duration-300">
                Ir a la Solución E-Learning
            </flux:button>

        </div>


        <!-- CONTENIDO EN PESTAÑAS -->
        <div x-data="{ activeTab: 'descubre' }" class="w-full max-w-6xl mx-auto mt-8">

            <!-- Barra de pestañas -->
            <div
                class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-gray-700 rounded-t-xl overflow-hidden">
                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'descubre'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'descubre'">
                    1. Descubre tu Campus Virtual
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'organizado'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'organizado'">
                    2. Así está organizado tu semestre virtual
                </button>


            </div>

            <!-- Contenedor de contenido -->
            <div
                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-b-xl shadow-lg p-6">

                <!-- TAB 1: descubre -->
                <div x-show="activeTab === 'descubre'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿No sabes dónde hacer ese trámite que necesitas? ¿O dónde encontrar lo que te están
                        pidiendo?<br><br>
                        Tranqui. En tu Campus Virtual tienes varios de los servicios que vas a necesitar. Aquí te
                        mostramos cómo entrar, dónde buscar y cómo hacer tus solicitudes académicas o administrativas
                        sin perderte en el intento.<br><br>
                        Entra, ubícate y resuelve.<br><br>
                        ¡Así de fácil!
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-descubre-campus"
                                src="https://player.vimeo.com/video/999307435?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: organizado -->
                <div x-show="activeTab === 'organizado'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿16 semanas? Tranqui, no tienes que aprendértelas de memoria.<br><br>
                        Piensa en tu semestre como una ruta: hay momentos para arrancar, avanzar, hacer paradas y llegar
                        a la meta. En este video te contamos qué pasa semana a semana, desde el ingreso de tus
                        asignaturas hasta las evaluaciones, cortes, porcentajes y momentos clave.<br><br>
                        Además, conocerás cómo te acompañamos durante el recorrido.<br><br>
                        Dale play y ubícate en la ruta de tu semestre.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-estres"
                                src="https://player.vimeo.com/video/770059844?badge=0&autopause=0&player_id=0&app_id=58479"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div> <!-- fin contenedor contenido tabs -->
        </div> <!-- fin x-data tabs -->

        <div class="w-full max-w-5xl mx-auto text-center mb-4">
            <h3
                class="text-lg sm:text-xl md:text-2xl font-semibold 
               text-gray-800 dark:text-gray-100 
               leading-tight">
                Consulta tus fechas claves y recordatorios
            </h3>
        </div>


        <div class="flex flex-col md:flex-row items-center justify-center 
            gap-4 max-w-5xl mx-auto px-4">

            <!-- Imagen -->
            <div class="w-full md:w-5/12 rounded-xl overflow-hidden">

                <img src="/images/banners/vive/imgseccion1.png" alt="Consulta tus fechas claves"
                    class="w-full h-auto object-contain" id="modelImage" style="cursor: pointer;">

            </div>


            <!-- Texto -->
            <div class="w-full md:w-7/12 text-center md:text-left">

                <p
                    class="text-sm sm:text-base md:text-lg 
                   text-gray-700 dark:text-gray-200 
                   leading-relaxed">

                    ¿Otra vez se te pasó una fecha?<br><br>

                    Entre entregas, evaluaciones, encuentros y trámites, es fácil que algo se nos escape.
                    Aquí encontrarás cómo consultar tus fechas importantes, revisar las actividades de tus cursos
                    y crear recordatorios para tener todo bajo control.

                    <br><br>

                    Menos “se me olvidó”. Más “ya lo tenía agendado”.

                </p>


                <div class="flex justify-center md:justify-start mt-4">

                    <flux:button href="https://campusvirtual.ucompensar.edu.co" target="_blank"
                        rel="noopener noreferrer" icon="document-arrow-up" variant="filled"
                        class="!bg-[#7C3AED] !text-white
                       hover:!bg-[#362651]
                       dark:!bg-[#7C3AED] dark:!text-white
                       dark:hover:!bg-[#b49bec]
                       dark:hover:!text-gray-900
                       transition-all duration-300">

                        Haz clic aquí

                    </flux:button>

                </div>

            </div>

        </div>

    </div>

    <x-section-rating sectionKey="activa-tu-experiencia" />

    @include('partials.footer')
</x-layouts.app>
