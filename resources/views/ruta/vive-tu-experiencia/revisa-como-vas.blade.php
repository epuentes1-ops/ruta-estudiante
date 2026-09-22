<x-layouts.app :title="__('Revisa cómo vas')">

    <main class="w-full px-6 py-10">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1_5.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- CONTENIDO EN PESTAÑAS -->
        <div x-data="{ activeTab: 'evaluan' }" class="w-full max-w-6xl mx-auto mt-8">

            <!-- Barra de pestañas -->
            <div
                class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-gray-700 rounded-t-xl overflow-hidden">
                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'evaluan'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'evaluan'">
                    1. Cómo te evalúan
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'coevaluacion'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'coevaluacion'">
                    2. ¿Cómo realizo la coevaluación del grupo?
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'progreso'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'progreso'">
                    3. ¿Cómo puedo ver mi progreso académico?
                </button>


            </div>

            <!-- Contenedor de contenido -->
            <div
                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-b-xl shadow-lg p-6">

                <!-- TAB 1: evaluan -->
                <div x-show="activeTab === 'evaluan'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        <strong>¿Y esa nota de dónde salió?</strong><br><br>
                        En la U no todo es entregar un trabajo y esperar a ver qué pasó.<br><br>
                        Durante el semestre vas teniendo diferentes momentos para poner en práctica lo que aprendes,
                        recibir feedback, revisar cómo vas y entender qué puedes mejorar.<br><br>
                        En este video te contamos cómo funciona todo ese proceso, desde las actividades y la
                        retroalimentación hasta la autoevaluación y la forma en que se construyen tus
                        resultados.<br><br>
                        Dale play y descubre qué hay detrás de esa nota.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-marco-evaluativo"
                                src="https://player.vimeo.com/video/1002793377?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: coevaluacion -->
                <div x-show="activeTab === 'coevaluacion'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        <strong>¿Cómo saber cómo fue el trabajo de tu equipo?</strong><br><br>
                        La coevaluación es ese momento para mirar el trabajo en equipo desde otra perspectiva, reconocer
                        los aportes de cada integrante y hacer una valoración del proceso.
                        <br><br>
                        En este video te mostramos paso a paso cómo realizarla, desde encontrar el formato hasta
                        completar y entregar la actividad correctamente.
                        <br><br>
                        Entra y descubre cómo hacer tu coevaluación sin enredos.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="video-coevaluacion"
                                src="https://player.vimeo.com/video/766660122?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 3: progreso -->
                <div x-show="activeTab === 'progreso'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        <strong>¿Quieres saber cómo vas en tus cursos sin esperar hasta el final?</strong><br><br>
                        En la U puedes revisar tu progreso académico en cualquier momento del semestre. <br><br>
                        En este video te mostramos cómo hacerlo, paso a paso, para que tengas claridad sobre tu avance
                        y puedas tomar decisiones a tiempo.<br><br>
                        Aquí podrás revisar tus notas, ver tu avance y detectar a tiempo qué va bien, y dónde necesitas
                        ponerle un poquito más de atención.
                    </p>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="genially-notas" src="https://view.genially.com/66bbbbea5328193b14066e13"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div> <!-- fin contenedor contenido tabs -->
        </div> <!-- fin x-data tabs -->

        <div>
            <br>
        </div>

        {{-- ============================================================
    IMAGEN PERCEPCIÓN DOCENTE
============================================================ --}}

        <div x-data="{ modalImagen: false }" x-on:keydown.escape.window="modalImagen = false"
            x-effect="document.body.classList.toggle('overflow-hidden', modalImagen)">

            {{-- Título --}}
            <div class="w-full text-left">

                <h4
                    class="
                text-base
                sm:text-lg
                md:text-xl
                lg:text-xl
                font-semibold
                text-gray-800
                dark:text-gray-100
                leading-relaxed
                text-left
            ">
                    Participa en la evaluación docente y de tu experiencia
                </h4>

            </div>


            {{-- ========================================================
        CONTENIDO
    ========================================================= --}}

            <div
                class="
            flex
            flex-col
            md:flex-row
            items-center
            justify-center
            gap-6
            max-w-6xl
            mx-auto
            mt-8
            px-4
        ">

                {{-- Imagen --}}
                <div
                    class="
                w-full
                md:w-2/3
                rounded-xl
                overflow-hidden
                shadow-lg
            ">

                    <button type="button"
                        class="
                    block
                    w-full
                    cursor-zoom-in
                    focus:outline-none
                    focus:ring-2
                    focus:ring-purple-500
                    focus:ring-offset-2
                    rounded-xl
                "
                        x-on:click="modalImagen = true" aria-label="Ampliar imagen de percepción docente">

                        <img src="/images/banners/vive/percepcion_docente.png"
                            alt="Información sobre la evaluación docente"
                            class="
                        w-full
                        h-auto
                        object-cover
                        transition-transform
                        duration-300
                        {{-- hover:scale-[1.01] --}}
                    ">

                    </button>

                </div>


                {{-- Texto --}}
                <div
                    class="
                w-full
                md:w-1/3
                text-center
                md:text-left
            ">

                    <p
                        class="
                    text-sm
                    sm:text-base
                    md:text-lg
                    lg:text-xl
                    text-gray-700
                    dark:text-gray-200
                    leading-relaxed
                ">
                        Hay cosas que solo sabes después de vivirlas:
                        esa clase que te encantó o ese profe que hizo la diferencia.

                        <br><br>

                        Este es tu momento para contarlo. Tu opinión es como
                        dejar una nota en el camino para que quienes vienen
                        detrás encuentren una mejor ruta.

                        <br><br>

                        Participa en la evaluación y ayuda a construir,
                        entre todos, una mejor experiencia en UCompensar.
                    </p>

                </div>

            </div>



            {{-- ========================================================
        MODAL
    ========================================================= --}}

            <div x-cloak x-show="modalImagen" x-transition.opacity.duration.200ms x-on:click.self="modalImagen = false"
                class="
            fixed
            inset-0
            z-[9999]

            flex
            items-center
            justify-center

            bg-black/75
            backdrop-blur-sm

            p-4
            sm:p-6
            md:p-8
        "
                role="dialog" aria-modal="true" aria-label="Imagen ampliada de percepción docente">

                {{-- ================================================
            CONTENEDOR DE LA IMAGEN
        ================================================= --}}

                <div
                    class="
                relative
                w-auto
                max-w-[95vw]
                max-h-[92vh]
            ">

                    {{-- ============================================
                BOTÓN DE CIERRE
            ============================================= --}}

                    <button type="button" x-on:click="modalImagen = false"
                        class="
                    absolute
                    z-20

                    -top-4
                    -right-4

                    flex
                    items-center
                    justify-center

                    w-11
                    h-11
                    md:w-12
                    md:h-12

                    rounded-full

                    bg-white
                    dark:bg-gray-900

                    border
                    border-gray-200
                    dark:border-gray-700

                    text-purple-700
                    dark:text-purple-400

                    shadow-xl

                    transition-all
                    duration-200

                    scale-110

                    focus:outline-none
                    focus:ring-4
                    focus:ring-purple-300
                "
                        aria-label="Cerrar imagen ampliada">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2.5" class="w-6 h-6" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>

                    </button>


                    {{-- ============================================
                IMAGEN AMPLIADA
            ============================================= --}}

                    <img src="/images/banners/vive/percepcion_docente.png"
                        alt="Información ampliada sobre la evaluación docente"
                        class="
                    block
                    max-w-[95vw]
                    max-h-[88vh]
                    w-auto
                    h-auto

                    object-contain

                    rounded-2xl

                    {{-- bg-purple-700 --}}

                    shadow-2xl
                "
                        x-on:click.stop>

                </div>

            </div>

        </div>


    </main>

    <x-section-rating sectionKey="revisa-como-vas" />
    @include('partials.footer')
</x-layouts.app>
