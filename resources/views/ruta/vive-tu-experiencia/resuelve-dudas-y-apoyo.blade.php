<x-layouts.app :title="__('Resuelve dudas y apoyo')">

    <div class="flex flex-col items-center w-full gap-10 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/vive/seccion1_6.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- ACORDEÓN-->
        <div x-data="{ openSection: 'canal' }" class="w-full max-w-6xl mx-auto mt-8 px-4 space-y-6">

            <!-- Ítem 1: Encuentra el canal de atención que necesitas -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
                    focus:outline-none transition-all duration-300"
                    :class="openSection === 'canal'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'canal' ? null : 'canal'">

                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Encuentra el canal de atención que necesitas
                    </h4>

                    <span x-text="openSection === 'canal' ? '−' : '+'" class="text-xl font-bold text-inherit">
                    </span>

                </button>

                <div x-show="openSection === 'canal'" x-collapse class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-2/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Tienes una duda y no sabes a quién preguntarle? </strong><br><br>
                                Tranqui, no tienes que ir preguntando de chat en chat hasta encontrar a la persona
                                indicada. En UCompensar tienes diferentes canales según lo que necesites: desde una duda
                                sobre una nota o una materia, hasta problemas para entrar a una plataforma o situaciones
                                relacionadas con tu proceso académico.<br><br>
                                Aquí encontrarás la ruta más fácil para saber a quién acudir y dónde pedir ayuda, según
                                cada situación.<br><br>
                                Ubica tu caso, encuentra el canal y sigue tu ruta.
                            </p>

                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://bancodecontenidos.ucompensar.edu.co/index.php/s/PfHRMbSdp3zRdtn/preview"
                                    target="_blank" rel="noopener noreferrer" icon="document-arrow-down"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ver Infografía
                                </flux:button>
                            </div>
                        </div>
                        <!-- Imagen -->
                        <div class="w-full md:w-5/12 rounded-xl overflow-hidden">

                            <img src="/images/banners/vive/imgseccion1_1.png" alt="Consulta tus fechas claves"
                                class="w-full h-auto object-contain" id="modelImage">

                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 2:Reporta un problema técnico o de acceso -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'problema'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'problema' ? null : 'problema'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Reporta un problema técnico o de acceso
                    </h4>
                    <span x-text="openSection === 'problema' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'problema'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-CRM"
                                    src="https://player.vimeo.com/video/1229537693?badge=0&autopause=0&player_id=0&app_id=58479%22" class="w-full h-full"
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
                                <strong>¿Intentaste entrar y la plataforma decidió no cooperar?</strong><br><br>
                                Antes de pensar que algo está mal con tu cuenta, hay una cosa clave: entra siempre desde
                                el acceso institucional de UCcompensar. Si aun así no funciona, tranqui, también hay una
                                ruta para reportarlo.<br><br>
                                En este video te mostramos qué revisar, dónde reportar el problema y qué información
                                enviar para que soporte pueda entender qué pasó y ayudarte más rápido.<br><br>
                                Un pantallazo del error puede ahorrar muchas vueltas.
                            </p>
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://ucompensar2.my.site.com/estudiantes"
                                    target="_blank" rel="noopener noreferrer" icon="cursor-arrow-ripple"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir al CRM
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 3: Crea y consulta tus solicitudes en el CRM -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'consulta'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'consulta' ? null : 'consulta'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
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
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://ucompensar2.my.site.com/estudiantes"
                                    target="_blank" rel="noopener noreferrer" icon="cursor-arrow-ripple"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir al CRM
                                </flux:button>
                            </div>
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
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'tutoria'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'tutoria' ? null : 'tutoria'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Solicita tutoría, monitoría o asesoría académica
                    </h4>
                    <span x-text="openSection === 'tutoria' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'tutoria'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-permanencia"
                                    src="https://player.vimeo.com/video/1229543276?badge=0&autopause=0&player_id=0&app_id=58479%22" class="w-full h-full"
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
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://alertastempranas.ucompensar.edu.co/app/login_page.php"
                                    target="_blank" rel="noopener noreferrer" icon="user-group"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Solicitar Acompañamiento
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 5: ¿Qué hacer si tienes bajo rendimiento académico?-->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'bajo-rendimiento'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'bajo-rendimiento' ? null : 'bajo-rendimiento'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
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
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://alertastempranas.ucompensar.edu.co/app/login_page.php"
                                    target="_blank" rel="noopener noreferrer" icon="hand-raised"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Tengo una dificultad académica
                                </flux:button>
                            </div>
                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-crear-solicitudes-CRM"
                                    src="https://player.vimeo.com/video/1229545319?badge=0&autopause=0&player_id=0&app_id=58479%22"
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
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'orientacion-vocacional'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'orientacion-vocacional' ? null : 'orientacion-vocacional'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Solicita orientación vocacional
                    </h4>
                    <span x-text="openSection === 'orientacion-vocacional' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'orientacion-vocacional'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Imagen -->
                        <div class="w-full md:w-5/12 rounded-xl overflow-hidden">

                            <img src="/images/banners/vive/imgseccion1_3.png" alt="Consulta tus fechas claves"
                                class="w-full h-auto object-contain" id="modelImage">

                        </div>

                        <!-- Texto -->
                        <div class="w-full md:w-2/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                <strong>¿Tienes mil preguntas sobre tu futuro y cero respuestas claras?
                                </strong><br><br>
                                Tranqui, no tienes que tenerlo todo decidido. Aquí te mostramos cómo solicitar
                                orientación vocacional y empezar a descubrir qué camino va más contigo.
                            </p>

                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button
                                    href="https://bancodecontenidos.ucompensar.edu.co/index.php/s/mZ9q7TwYczSzB4p"
                                    target="_blank" rel="noopener noreferrer" icon="document-arrow-down"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Ir al paso a paso
                                </flux:button>

                                <flux:button
                                    href="https://alertastempranas.ucompensar.edu.co/app/login_page.php"
                                    target="_blank" rel="noopener noreferrer" icon="chat-bubble-oval-left-ellipsis"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Quiero una orientación vocacional
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <x-section-rating sectionKey="resuelve-dudas-y-apoyo" />
    @include('partials.footer')
</x-layouts.app>
