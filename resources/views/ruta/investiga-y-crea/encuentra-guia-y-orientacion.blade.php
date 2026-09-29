<x-layouts.app :title="__('Encuentra guía y orientación')">

    <div class="flex flex-col items-center w-full gap-8 p-6">

        <!-- Banner principal -->
        <div x-data="{
            activeSlide: 0,
            slides: ['/images/banners/crea/seccion4_1.png']
        }" x-init="setInterval(() => activeSlide = (activeSlide + 1) % slides.length, 4000)"
            class="relative w-full max-w-6xl aspect-[16/6] sm:aspect-[16/7] md:aspect-[16/5] lg:aspect-[16/4] overflow-hidden rounded-2xl shadow-xl">
            <template x-for="(slide, index) in slides" :key="index">
                <img :src="slide" alt="Banner"
                    class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-700 ease-in-out"
                    :class="{ 'opacity-100': activeSlide === index, 'opacity-0': activeSlide !== index }">
            </template>
        </div>

        <!-- CONTENIDO EN PESTAÑAS -->
        <div x-data="{ activeTab: 'crai' }" class="w-full max-w-6xl mx-auto mt-8">

            <!-- Barra de pestañas -->
            <div
                class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-gray-700 rounded-t-xl overflow-hidden">
                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'crai'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'crai'">
                    1. Conoce el CRAI y los servicios disponibles
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'institucional'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'institucional'">
                    2. Ingresa al CRAI con tu cuenta institucional
                </button>

                <button
                    class="flex-1 px-4 py-3 text-xs sm:text-sm md:text-base font-semibold text-center tracking-wide
                           border-b-2 sm:border-b-0 sm:border-r-2
                           border-transparent  hover:bg-gray-300 dark:hover:bg-gray-800
                           transition"
                    :class="activeTab === 'asesoria'
                        ?
                        'bg-[#7C3AED] text-white dark:bg-[#7C3AED] hover:!bg-[#362651] dark:text-gray-900' :
                        'bg-gray-50 text-gray-700 dark:hover:!bg-[#b49bec] dark:bg-gray-800 dark:text-gray-200 dark:hover:!text-gray-900'"
                    @click="activeTab = 'asesoria'">
                    3. Agenda una asesoría con el CRAI
                </button>
            </div>

            <!-- Contenedor de contenido -->
            <div
                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-b-xl shadow-lg p-6">

                <!-- TAB 1: Conoce el CRAI y los servicios disponibles -->
                <div x-show="activeTab === 'crai'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        A veces tienes un trabajo pendiente, necesitas encontrar información o simplemente no sabes por
                        dónde empezar. Y justo ahí puede entrar el CRAI. <br><br>
                        Descubre sus servicios, espacios y recursos, y encuentra eso que necesitas para hacer más fácil
                        tu vida universitaria.
                    </p>



                    <div class="flex flex-col sm:flex-row gap-4">

                        <flux:button href="https://crai.ucompensar.edu.co/" target="_blank" rel="noopener noreferrer"
                            icon="book-open" variant="filled"
                            class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                            Ir al CRAI
                        </flux:button>
                    </div>
                    <br>
                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="descubre el CRAI" src="https://view.genially.com/6aa713f303beb2b4e2ceebec"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 2: institucional -->
                <div x-show="activeTab === 'institucional'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        ¿Quieres entrar al CRAI y no sabes dónde encontrarlo? <br><br>
                        Tranqui, te mostramos la ruta más fácil para llegar usando tu cuenta institucional.<br><br>
                        En menos de un minuto sabrás dónde entrar, qué buscar y cómo llegar directo a todo lo que el
                        CRAI tiene para ti.
                    </p>



                    <div class="flex flex-col sm:flex-row gap-4">

                        <flux:button href="https://crai.ucompensar.edu.co/" target="_blank" rel="noopener noreferrer"
                            icon="book-open" variant="filled"
                            class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                            Ir al CRAI
                        </flux:button>
                    </div>
                    <br>

                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="Ingresa al CRAI"
                                src="https://player.vimeo.com/video/1229617120?badge=0&autopause=0&player_id=0&app_id=58479"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- TAB 3: asesoria -->
                <div x-show="activeTab === 'asesoria'" x-transition>
                    <p class="mb-6 text-sm sm:text-base md:text-lg text-gray-700 dark:text-gray-200 leading-relaxed">
                        Hay trabajos que empiezan con un simple “esto lo saco rápido” y terminan en veinte pestañas
                        abiertas, tres búsquedas que no sirven y cero ideas de por dónde seguir. <br><br>
                        Si te pasó, el CRAI tiene ayuda especializada para ti. Descubre cómo pedir acompañamiento para
                        investigar, trabajar en tu proyecto de grado o mejorar tus textos.
                    </p>



                    <div class="flex flex-col sm:flex-row gap-4">
                        <flux:button href="#"
                            onclick="window.open('mailto:crai@ucompensar.edu.co', '_blank'); return false;"
                            icon="envelope" variant="filled"
                            class="!bg-[#7C3AED] !text-white
        hover:!bg-[#362651]
        dark:!bg-[#7C3AED] dark:!text-white
        dark:hover:!bg-[#b49bec] dark:hover:!text-gray-900
        transition-all duration-300">
                            Contáctanos
                        </flux:button>
                    
                  
                    

                        <flux:button
                            href="https://teams.microsoft.com/dl/launcher/launcher.html?url=%2F_%23%2Fl%2Fteam%2F19%3Aafde9c8a792944c1b16b96ea43d87dce%40thread.tacv2%2Fconversations%3FgroupId%3D8277133f-6de4-4522-866f-7186245bc257%26tenantId%3D4bf38ea2-832d-4552-b508-421570da43ff&type=team&deeplinkId=78304da8-f352-46e0-876b-876e519a9d3d&directDl=true&msLaunch=true&enableMobilePage=true&suppressPrompt=true"
                            target="_blank" rel="noopener noreferrer" icon="calendar" variant="filled"
                            class="!bg-[#7C3AED] !text-white
                                        hover:!bg-[#362651]
                                        dark:!bg-[#7C3AED] dark:!text-white
                                        dark:hover:!bg-[#b49bec]  dark:hover:!text-gray-900
                                        transition-all duration-300">
                            Agenda tu asesoría
                        </flux:button>
                    </div>
                    <br><br>
                    <div class="w-full rounded-xl overflow-hidden shadow-md">
                        <div class="aspect-video">
                            <iframe title="Asesoría CRAI"
                                src="https://player.vimeo.com/video/1229617981?badge=0&autopause=0&player_id=0&app_id=58479"
                                class="w-full h-full" frameborder="0" referrerpolicy="strict-origin-when-cross-origin"
                                allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                </div>

            </div> <!-- fin contenedor contenido tabs -->
        </div> <!-- fin x-data tabs -->



    </div>

    <x-section-rating sectionKey="encuentra-guia-y-orientacion" />
    @include('partials.footer')
</x-layouts.app>
