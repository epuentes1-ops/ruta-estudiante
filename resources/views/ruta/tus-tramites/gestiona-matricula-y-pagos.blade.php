<x-layouts.app :title="__('Gestiona matrícula y pagos')">

    <div class="flex flex-col items-center w-full gap-8 p-6">
        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/tramites/seccion2_1.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- ACORDEÓN-->
        <div x-data="{ openSection: 'inscripcion' }" class="w-full max-w-6xl mx-auto mt-8 px-4 space-y-6">

            <!-- Ítem 1: Ruta de matrícula, inscripción y pago -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button class="w-full flex justify-between items-center px-4 py-3 text-left focus:outline-none"
                    @click="openSection = openSection === 'inscripcion' ? null : 'inscripcion'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100">
                        Ruta de matrícula, inscripción y pago
                    </h4>
                    <span x-text="openSection === 'inscripcion' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'inscripcion'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                ¿Llegó el momento de matricularte y estás como: bueno… ¿y ahora qué hago?<br><br>
                                Tranqui. Antes de que el semestre arranque, hay varios pasos que debes tener claros:
                                cuándo matricularte, cómo inscribir tus cursos y cómo hacer el pago.<br><br>
                                Aquí tienes la ruta completa para que sepas qué va primero, qué sigue y en qué momento
                                darle clic a cada cosa.<br><br>
                                Organízalo con tiempo y empieza el semestre sin correr.
                            </p>

                            <div class="flex justify-center md:justify-start mt-4">

                                <flux:button href="https://academico.ucompensar.edu.co:8090/hermesoft/vortal/o365/login"
                                    target="_blank" rel="noopener noreferrer" icon="academic-cap" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]
                                        dark:hover:!text-gray-900
                                        transition-all duration-300">

                                    Ingresa al sistema académico

                                </flux:button>
                            </div>


                        </div>
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-matricula"
                                    src="https://player.vimeo.com/video/670311020?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 2: Inscribe tus cursos paso a paso -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button class="w-full flex justify-between items-center px-4 py-3 text-left focus:outline-none"
                    @click="openSection = openSection === 'cursos' ? null : 'cursos'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100">
                        Inscribe tus cursos paso a paso
                    </h4>
                    <span x-text="openSection === 'cursos' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'cursos'" x-collapse class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        {{-- <!-- Genially -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="genially-cursos"
                                    src="https://player.vimeo.com/video/1133852219?h=6eef8cd54a" class="w-full h-full"
                                    frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div> --}}

                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                ¿Ya sabes qué materias vas a ver este semestre?<br><br>
                                Arma tu horario sin enredos. En este instructivo te mostramos, paso a paso, cómo
                                inscribir tus materias, revisar tus opciones y dejar todo listo para empezar con toda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 3: Crea y consulta tus solicitudes en el CRM -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button class="w-full flex justify-between items-center px-4 py-3 text-left focus:outline-none"
                    @click="openSection = openSection === 'consulta' ? null : 'consulta'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100">
                        Crea y consulta tus solicitudes en el CRM
                    </h4>
                    <span x-text="openSection === 'consulta' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'consulta'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Necesitas hacer una solicitud y no sabes por dónde empezar?</strong><br><br>
                                Si estás estudiando en modalidad virtual en UCompensar, hay una ruta para radicar tus
                                solicitudes académicas y administrativas sin darle mil vueltas.<br><br>
                                En este video te mostramos paso a paso dónde entrar, qué seleccionar y cómo enviar tu
                                solicitud para que llegue al lugar correcto.<br><br>
                                Porque saber dónde pedir ayuda también hace parte de la ruta.
                            </p>
                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-crear-solicitudes-CRM"
                                    src="https://player.vimeo.com/video/834164515?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 4: Solicita tutoría, monitoría o asesoría académica -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button class="w-full flex justify-between items-center px-4 py-3 text-left focus:outline-none"
                    @click="openSection = openSection === 'tutoria' ? null : 'tutoria'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100">
                        Solicita tutoría, monitoría o asesoría académica
                    </h4>
                    <span x-text="openSection === 'tutoria' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'tutoria'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Genially -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="genially-tutoria"
                                    src="https://view.genially.com/66bb8c8990672ae837c00954" class="w-full h-full"
                                    frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Hay una materia que se te está poniendo cuesta arriba?</strong><br><br>
                                Tranquilo, no tienes que resolver todo solo.<br><br>
                                Aquí te mostramos cómo pedir una tutoría y encontrar el apoyo que necesitas para seguir
                                avanzando.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 5: ¿Qué hacer si tienes bajo rendimiento académico?-->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button class="w-full flex justify-between items-center px-4 py-3 text-left focus:outline-none"
                    @click="openSection = openSection === 'bajo-rendimiento' ? null : 'bajo-rendimiento'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100">
                        ¿Qué hacer si tienes bajo rendimiento académico?
                    </h4>
                    <span x-text="openSection === 'bajo-rendimiento' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'bajo-rendimiento'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Tus notas no están saliendo como esperabas?</strong><br><br>
                                Antes de dejar que se acumule todo, <strong>haz una pausa y pide
                                    acompañamiento</strong>.<br><br>
                                En este video te mostramos la ruta para levantar la mano y empezar a recuperar el ritmo.
                            </p>
                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-crear-solicitudes-CRM"
                                    src="https://player.vimeo.com/video/834164515?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 6: Solicita orientación vocacional -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button class="w-full flex justify-between items-center px-4 py-3 text-left focus:outline-none"
                    @click="openSection = openSection === 'orientacion-vocacional' ? null : 'orientacion-vocacional'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl font-semibold text-gray-800 dark:text-gray-100">
                        Solicita orientación vocacional
                    </h4>
                    <span x-text="openSection === 'orientacion-vocacional' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'orientacion-vocacional'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Genially -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="genially-orientacion-vocacional"
                                    src="https://view.genially.com/66bb8c8990672ae837c00954" class="w-full h-full"
                                    frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Tienes mil preguntas sobre tu futuro y cero respuestas claras?
                                </strong><br><br>
                                Tranqui, no tienes que tenerlo todo decidido. Aquí te mostramos cómo solicitar
                                orientación vocacional y empezar a descubrir qué camino va más contigo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>

    <x-section-rating sectionKey="gestiona-matricula-y-pagos" />
    @include('partials.footer')
</x-layouts.app>
