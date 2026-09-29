<x-layouts.app :title="__('Activa tu red de apoyo')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/conectate/seccion3_4.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- ACORDEÓN-->
        <div x-data="{ openSection: 'apoyo' }" class="w-full max-w-6xl mx-auto mt-8 px-4 space-y-6">

            <!-- Ítem 1: Conoce tu red de apoyo UCompensar -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden shadow-sm">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
                    focus:outline-none transition-all duration-300"
                    :class="openSection === 'apoyo'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'apoyo' ? null : 'apoyo'">

                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Conoce tu red de apoyo UCompensar
                    </h4>

                    <span x-text="openSection === 'apoyo' ? '−' : '+'" class="text-xl font-bold text-inherit">
                    </span>

                </button>

                <div x-show="openSection === 'apoyo'" x-collapse class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                A veces una buena ayuda llega justo cuando sabes dónde buscarla. En UCompensar tienes
                                una red de apoyo con acompañamiento académico, psicoeducativo, psicosocial y
                                psicológico, según lo que estés viviendo en tu proceso universitario<br><br>
                                Conoce qué opciones tienes y encuentra el apoyo que mejor se ajuste a ti.
                            </p>

                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="#"
                                    onclick="window.open('mailto:permanenciaestudiantel@ucompensar.edu.co', '_blank'); return false;"
                                    icon="envelope" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
        hover:!bg-[#362651]
        dark:!bg-[#7C3AED] dark:!text-white
        dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900
        transition-all duration-300">
                                    Contáctanos
                                </flux:button>
                            </div>
                        </div>
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="genially-Servicios de apoyo estudiantil"
                                    src="https://view.genially.com/66abd2b0d825f6db15a3fbd3" class="w-full h-full"
                                    frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                    allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 2:Accede a alza la mano y agenda una orientación psicosocial, psicoeducativa y psicológica -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'orientacion'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'orientacion' ? null : 'orientacion'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Accede a alza la mano y agenda una orientación psicosocial, psicoeducativa y psicológica
                    </h4>
                    <span x-text="openSection === 'orientacion' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'orientacion'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-orientación"
                                    src="https://player.vimeo.com/video/1006380851?badge=0&autopause=0&player_id=0&app_id=58479"
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
                                A veces solo necesitas hacer una pausa y hablar con alguien que sepa cómo acompañarte.<br><br>
                                Así como buscas una mano cuando algo se te enreda, en UCompensar puedes encontrar
                                orientación psicosocial, psicoeducativa y psicológica para diferentes momentos de tu
                                vida universitaria.
                            </p>
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://alertastempranas.ucompensar.edu.co/app/login_page.php"
                                    target="_blank" rel="noopener noreferrer" icon="puzzle-piece" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Agendar orientación
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ítem 3: Conoce la ruta de atención frente a violencias, acoso o discriminación -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'atencion'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'atencion' ? null : 'atencion'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Conoce la ruta de atención frente a violencias, acoso o discriminación
                    </h4>
                    <span x-text="openSection === 'atencion' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'atencion'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Texto -->
                        <div class="w-full md:w-1/3 text-center md:text-left">
                            <p
                                class="text-sm sm:text-sm md:text-base lg:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                                ¿Algo pasó y no sabes a quién acudir? o ¿Viste una situación que te preocupa?<br><br>
                                En UCompensar no tienes que resolverlo solo.<br><br>
                                Conoce las rutas que tienes para pedir ayuda, reportar una situación y recibir acompañamiento. 
                            </p>
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://alertastempranas.ucompensar.edu.co/app/login_page.php"
                                    target="_blank" rel="noopener noreferrer" icon="hand-raised"
                                    variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Solicitar atención o reportar
                                </flux:button>
                            </div>
                                <br>
                                
                                
                                <div class="flex flex-col sm:flex-row gap-4">
                                <flux:button href="#"
                                    onclick="window.open('mailto:lineanaranja@ucompensar.edu.co', '_blank'); return false;"
                                    icon="envelope" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
        hover:!bg-[#362651]
        dark:!bg-[#7C3AED] dark:!text-white
        dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900
        transition-all duration-300">
                                    Contáctanos
                                </flux:button>


                            </div>
                        </div>
                        <!-- video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-crear-solicitudes-CRM"
                                    src="https://player.vimeo.com/video/1229610206?badge=0&autopause=0&player_id=0&app_id=58479"
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

            <!-- Ítem 4: Solicita servicios de inclusión y accesibilidad  -->
            <div class="border border-gray-200 dark:border-gray-700 rounded-xl overflow-hidden">
                <button
                    class="w-full flex justify-between items-center px-4 py-3 text-left
           focus:outline-none transition-all duration-300"
                    :class="openSection === 'servicios'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] dark:text-white hover:!bg-[#362651]' :
                        'bg-gray-50 text-gray-700 hover:!bg-[#ede9fe] dark:bg-gray-800 dark:text-gray-200 dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900'"
                    @click="openSection = openSection === 'servicios' ? null : 'servicios'">
                    <h4
                        class="text-base sm:text-lg md:text-xl lg:text-xl
                        font-semibold text-inherit">
                        Solicita servicios de inclusión y accesibilidad 
                    </h4>
                    <span x-text="openSection === 'servicios' ? '-' : '+'"
                        class="text-xl font-bold text-gray-700 dark:text-gray-200"></span>
                </button>

                <div x-show="openSection === 'servicios'" x-collapse
                    class="border-t border-gray-200 dark:border-gray-700">
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6 mt-6 px-4 pb-6">
                        <!-- Video -->
                        <div class="w-full md:w-2/3 rounded-xl overflow-hidden shadow-lg">
                            <div class="aspect-video">
                                <iframe title="video-servicios"
                                    src="https://player.vimeo.com/video/1229613708?badge=0&autopause=0&player_id=0&app_id=58479"
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
                                No todos vivimos la universidad de la misma forma. A veces necesitas un apoyo, una adaptación o simplemente que alguien te oriente para que una situación no termine siendo una barrera.<br><br>
                                Si necesitas apoyo relacionado con inclusión o accesibilidad, aquí te mostramos dónde levantar la mano y cómo pedirlo de forma fácil.
                            </p>
                            <br>

                            <div class="flex flex-col sm:flex-row gap-4">

                                <flux:button href="https://alertastempranas.ucompensar.edu.co/app/login_page.php"
                                    target="_blank" rel="noopener noreferrer" icon="user-group" variant="filled"
                                    class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                                    Solicitar apoyo de inclusión
                                </flux:button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>



    </div>

    <x-section-rating sectionKey="activa-tu-red-de-apoyo" />
    @include('partials.footer')
</x-layouts.app>
