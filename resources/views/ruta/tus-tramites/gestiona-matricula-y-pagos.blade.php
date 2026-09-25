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
        <div x-data="{ openSection: 'ruta-matricula' }" class="w-full max-w-6xl mx-auto mt-8 px-4 space-y-6">

            <!-- Ítem 1: Ruta de matrícula, inscripción y pago  -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
                    focus:outline-none transition-all duration-300"
                    :class="openSection === 'ruta-matricula'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'ruta-matricula' ? null : 'ruta-matricula'">

                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Ruta de matrícula, inscripción y pago
                    </h4>

                    <span x-text="openSection === 'ruta-matricula' ? '−' : '+'" class="text-xl font-bold text-inherit">
                    </span>

                </button>

                <div x-show="openSection === 'ruta-matricula'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Llegó el momento de matricularte y estás como: bueno… ¿y ahora qué
                                    hago?</strong><br><br>
                                Tranqui. Antes de que el semestre arranque, hay varios pasos que debes tener claros:
                                cuándo matricularte, cómo inscribir tus cursos y cómo hacer el pago.<br><br>
                                Aquí tienes la ruta completa para que sepas qué va primero, qué sigue y en qué momento
                                darle clic a cada cosa.<br><br>
                                Organízalo con tiempo y empieza el semestre sin correr.
                            </p>
                            <br>
                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://campusvirtual.ucompensar.edu.co/" target="_blank"
                                    rel="noopener noreferrer" icon="building-office" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir mi Campus Virtual
                                </flux:button>

                                <flux:button href="https://academico.ucompensar.edu.co" target="_blank"
                                    rel="noopener noreferrer" icon="book-open" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Iniciar mi proceso
                                </flux:button>
                            </div>
                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-ruta-matricula"
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

            <!-- Ítem 2:Inscribe tus cursos paso a paso -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'tus-cursos'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'tus-cursos' ? null : 'tus-cursos'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Inscribe tus cursos paso a paso
                    </h4>
                    <span x-text="openSection === 'tus-cursos' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'tus-cursos'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Imagen -->
                        <div class="w-full md:w-5/12 rounded-xl overflow-hidden">

                            <img src="/images/banners/tramites/imgseccion2.png" alt="Consulta tus fechas claves"
                                class="w-full h-auto object-contain" id="modelImage" style="cursor: pointer;">

                        </div>

                        <!-- Texto -->
                        <div class="w-full md:w-2/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Ya sabes qué materias vas a ver este semestre?</strong><br><br>
                                Arma tu horario sin enredos. En este instructivo te mostramos, paso a paso, cómo
                                inscribir tus materias, revisar tus opciones y dejar todo listo para empezar con toda.
                            </p>

                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://bancodecontenidos.ucompensar.edu.co/index.php/s/zEeHKEJEJ8L4eES"
                                    target="_blank" rel="noopener noreferrer" icon="document-arrow-down"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir al paso a paso
                                </flux:button>

                                <flux:button href="https://academico.ucompensar.edu.co" target="_blank"
                                    rel="noopener noreferrer" icon="book-open" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Inscribir mis cursos
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 3: Consulta el estado de tu matrícula y recibos-->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'estado-matricula'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'estado-matricula' ? null : 'estado-matricula'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Consulta el estado de tu matrícula y recibos
                    </h4>
                    <span x-text="openSection === 'estado-matricula' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'estado-matricula'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Llegó el momento de la matrícula y ya estás pensando: “¿Dónde miro cuánto tengo
                                    que
                                    pagar?” o “¿será que ya aparece mi recibo?</strong><br><br>
                                Antes de correr a pagar, primero revisa qué tienes disponible, qué está pendiente y si
                                los valores aplicados están correctos. En este video te mostramos la ruta para consultar
                                el estado de tu matrícula y tus recibos de forma rápida y saber exactamente qué tienes
                                frente a ti.
                            </p>

                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://estudiantes.ucompensar.edu.co:8081/ucompensarPolLTD/"
                                    target="_blank" rel="noopener noreferrer" icon="currency-dollar" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Consulta el estado de mi matrícula
                                </flux:button>
                            </div>
                            <br>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <flux:button href="https://ucompensar2.my.site.com/estudiantes/s/ " target="_blank"
                                    rel="noopener noreferrer" icon="cursor-arrow-ripple" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Reportar una inconsistencia
                                </flux:button>
                            </div>

                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-estado-matricula"
                                    src="https://player.vimeo.com/video/1229548995?badge=0&autopause=0&player_id=0&app_id=58479%22"
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

            <!-- Ítem 4: Realiza tus pagos en línea -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'pagos-en-linea'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'pagos-en-linea' ? null : 'pagos-en-linea'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Realiza tus pagos en línea
                    </h4>
                    <span x-text="openSection === 'pagos-en-linea' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'pagos-en-linea'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-pagos-en-linea"
                                    src="https://player.vimeo.com/video/1229552696?badge=0&autopause=0&player_id=0&app_id=58479%22"
                                    class="w-full h-full" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>Hay momentos del semestre en los que solo quieres resolver una cosa:
                                    pagar y seguir con lo tuyo.</strong><br><br>
                                Pero entre encontrar el recibo, revisar cuánto debes, elegir cómo pagar y asegurarte de
                                que todo quede listo, es fácil perderse entre tantos clics. Aquí te mostramos la ruta
                                completa para realizar tus pagos en línea, descargar tu recibo y conocer qué debes tener
                                en cuenta según el medio de pago que elijas.
                            </p>
                            <br>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <flux:button href="https://estudiantes.ucompensar.edu.co:8081/ucompensarPolLTD/"
                                    target="_blank" rel="noopener noreferrer" icon="currency-dollar"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir a pagar mis facturas
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 5: Consulta apoyos económicos y orientación financiera-->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'apoyos-economicos'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'apoyos-economicos' ? null : 'apoyos-economicos'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Consulta apoyos económicos y orientación financiera
                    </h4>
                    <span x-text="openSection === 'apoyos-economicos' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'apoyos-economicos'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿La matrícula te está haciendo sacar cuentas?</strong><br><br>
                                Antes de pensar que toca resolverlo todo de una, date una vuelta por las opciones que
                                tiene UCompensar para apoyarte. En este video te mostramos dónde encontrar becas,
                                descuentos y alternativas de financiación, y cómo revisar cuál puede ajustarse mejor a
                                tu situación.<br><br>
                                Porque antes de sacar la calculadora, vale la pena conocer tus opciones.
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

            <!-- Ítem 6: Consulta tus horarios, grupos y cursos inscritos-->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'consulta-horarios'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'consulta-horarios' ? null : 'consulta-horarios'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Consulta tus horarios, grupos y cursos inscritos
                    </h4>
                    <span x-text="openSection === 'consulta-horarios' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'consulta-horarios'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-consulta-horarios"
                                    src="https://player.vimeo.com/video/1229563619?badge=0&autopause=0&player_id=0&app_id=58479%22" class="w-full h-full"
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
                                <strong>Tu horario es el mapa de tu semestre: te muestra tus clases, grupos, asignaturas y momentos para que puedas organizar tu tiempo y disfrutar mejor cada etapa de la U.
                                </strong><br><br>
                                Aquí te mostramos cómo consultarlo de forma rápida y tener toda esta información a la mano desde el Campus Virtual.
                            </p>

                            <br>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <flux:button href="https://academico.ucompensar.edu.co/consultaHorario/"
                                    target="_blank" rel="noopener noreferrer" icon="table-cells"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir a consultar mi horario
                                </flux:button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>

    <x-section-rating sectionKey="gestiona-matricula-y-pagos" />
    @include('partials.footer')
</x-layouts.app>
